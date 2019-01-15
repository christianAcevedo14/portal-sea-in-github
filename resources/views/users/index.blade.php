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

                        <div class="row">
                            <div class="col-3">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-agents-tab" data-toggle="pill" href="#v-pills-agents" role="tab" aria-controls="v-pills-agents" aria-selected="true">Agentes Agrícolas ({{ $agents->count() }})</a>
                                    <a class="nav-link" id="v-pills-educators-tab" data-toggle="pill" href="#v-pills-educators" role="tab" aria-controls="v-pills-educators" aria-selected="false">Educadoras CFC ({{ $educators->count() }})</a>
                                    <a class="nav-link" id="v-pills-specialists-tab" data-toggle="pill" href="#v-pills-specialists" role="tab" aria-controls="v-pills-specialists" aria-selected="false">Especialistas ({{ $specialists->count() }})</a>
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-agents" role="tabpanel" aria-labelledby="v-pills-specialists-tab">
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
                                            @foreach($agents as $agent)
                                                <tr>
                                                    <th>
                                                        <form action="{{ route('users.destroy', $agent) }}" method="post" onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button class="btn btn-sm btn-pill btn-danger"><i class="fe fe-trash-2"></i></button>
                                                        </form>
                                                    </th>
                                                    <th>{{ $agent->full_name }}</th>
                                                    <td>{{ $agent->title->description }}</td>
                                                    <td>{{ $agent->programmatic_unit->description }}</td>
                                                    <td>
                                                        <a href="{{ route('users.edit', $agent->id) }}" class="btn btn-sm btn-pill btn-warning"><i class="fe fe-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-educators" role="tabpanel" aria-labelledby="v-pills-educators-tab">
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
                                            @foreach($educators as $educator)
                                                <tr>
                                                    <th>
                                                        <form action="{{ route('users.destroy', $educator) }}" method="post" onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button class="btn btn-sm btn-pill btn-danger"><i class="fe fe-trash-2"></i></button>
                                                        </form>
                                                    </th>
                                                    <th>{{ $educator->full_name }}</th>
                                                    <td>{{ $educator->title->description }}</td>
                                                    <td>{{ $educator->programmatic_unit->description }}</td>
                                                    <td>
                                                        <a href="{{ route('users.edit', $educator->id) }}" class="btn btn-sm btn-pill btn-warning"><i class="fe fe-edit"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-specialists" role="tabpanel" aria-labelledby="v-pills-specialists-tab">
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
                                            @foreach($specialists as $specialist)
                                                <tr>
                                                    <th>
                                                        <form action="{{ route('users.destroy', $specialist) }}" method="post" onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button class="btn btn-sm btn-pill btn-danger"><i class="fe fe-trash-2"></i></button>
                                                        </form>
                                                    </th>
                                                    <th>{{ $specialist->full_name }}</th>
                                                    <td>{{ $specialist->title->description }}</td>
                                                    <td>{{ $specialist->programmatic_unit->description }}</td>
                                                    <td>
                                                        <a href="{{ route('users.edit', $specialist->id) }}" class="btn btn-sm btn-pill btn-warning"><i class="fe fe-edit"></i></a>
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
