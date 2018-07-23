@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Lista de usuarios</h3>
                        <div class="card-options">
                            <a href="{{ route('users.create') }}"><i class="fe fe-plus-circle"></i></a>
                            {{--<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>--}}
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover" id="users">
                            <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Título</th>
                                <th scope="col">Unidad Programática</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th>
                                        <form action="{{ route('users.destroy', $user) }}" method="post" onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button class="btn btn-sm btn-pill btn-danger"><i class="fe fe-trash-2"></i></button>
                                        </form>
                                    </th>
                                    <th>{{ $user->full_name }}</th>
                                    <td>{{ $user->title->description }}</td>
                                    <td>{{ $user->programmatic_unit->description }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-pill btn-warning"><i class="fe fe-edit"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready( function () {
            $('#users').DataTable();
        } );
    </script>

@endsection
