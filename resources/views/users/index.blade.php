@extends('layouts.app')

@section('menu')
    @include('layouts.main_menu')
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Usuarios</h5>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Título</th>
                        <th scope="col">Unidad Programática</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <th>{{ $user->full_name }}</th>
                            <td>{{ $user->title->description }}</td>
                            <td>{{ $user->programmatic_unit->description }}</td>
                            <td>
                                <a href="{{ route('users.edit', $user->id) }}" type="button" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="" type="button" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
