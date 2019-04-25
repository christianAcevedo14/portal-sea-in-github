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
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-center" id="coordinators-tab" data-toggle="tab" href="#coordinators"
                                   role="tab" aria-controls="coordinators" aria-selected="true">Administradores /
                                    Coordinadores <br> Regionales ({{ $coordinators->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="agents-tab" data-toggle="tab" href="#agents" role="tab"
                                   aria-controls="agents" aria-selected="false">Agentes Agrícolas
                                    ({{ $agents->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="educators-tab" data-toggle="tab" href="#educators" role="tab"
                                   aria-controls="educators" aria-selected="false">Educadoras CFC
                                    ({{ $educators->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="specialists-tab" data-toggle="tab" href="#specialists"
                                   role="tab" aria-controls="specialists" aria-selected="false">Especialistas
                                    ({{ $specialists->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="directors-tab" data-toggle="tab" href="#directors" role="tab"
                                   aria-controls="directors" aria-selected="false">Directores de Departamento
                                    ({{ $directors->count() }})</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="administrativo-tab" data-toggle="tab" href="#administrativo" role="tab"
                                   aria-controls="administrativo" aria-selected="false">Personal Administrativo
                                    ({{ $administrativos->count() }})</a>
                            </li>
                        </ul>
                        <br>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane show active" id="coordinators" role="tabpanel"
                                 aria-labelledby="coordinators-tab">
                                <table class="table table-hover">
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
                                    @foreach($coordinators as $coordinator)
                                        <tr>
                                            <th>
                                                <form action="{{ route('users.destroy', $coordinator) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $coordinator->full_name }}</th>
                                            <td>{{ $coordinator->title->description }}</td>
                                            <td>{{ $coordinator->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $coordinator->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="agents" role="tabpanel" aria-labelledby="agents-tab">
                                <table class="table table-hover">
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
                                                <form action="{{ route('users.destroy', $agent) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $agent->full_name }}</th>
                                            <td>{{ $agent->title->description }}</td>
                                            <td>{{ $agent->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $agent->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="educators" role="tabpanel" aria-labelledby="educators-tab">
                                <table class="table table-hover">
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
                                                <form action="{{ route('users.destroy', $educator) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $educator->full_name }}</th>
                                            <td>{{ $educator->title->description }}</td>
                                            <td>{{ $educator->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $educator->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="directors" role="tabpanel" aria-labelledby="directors-tab">
                                <table class="table table-hover">
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
                                    @foreach($directors as $director)
                                        <tr>
                                            <th>
                                                <form action="{{ route('users.destroy', $director) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $director->full_name }}</th>
                                            <td>{{ $director->title->description }}</td>
                                            <td>{{ $director->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $director->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="specialists" role="tabpanel"
                                 aria-labelledby="specialists-tab">
                                <table class="table table-hover">
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
                                                <form action="{{ route('users.destroy', $specialist) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $specialist->full_name }}</th>
                                            <td>{{ $specialist->title->description }}</td>
                                            <td>{{ $specialist->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $specialist->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="administrativo" role="tabpanel"
                                 aria-labelledby="administrativo-tab">
                                <table class="table table-hover">
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
                                    @foreach($administrativos as $administrativo)
                                        <tr>
                                            <th>
                                                <form action="{{ route('users.destroy', $administrativo) }}" method="post"
                                                      onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                    @csrf
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                </form>
                                            </th>
                                            <th>{{ $administrativo->full_name }}</th>
                                            <td>{{ $administrativo->title->description }}</td>
                                            <td>{{ $administrativo->programmatic_unit->description }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $administrativo->id) }}"
                                                   class="btn btn-sm btn-pill btn-warning"><i
                                                            class="fe fe-edit"></i></a>
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

    <script>
        $(document).ready(function () {
            $('#users').DataTable();
        });
    </script>

@endsection
