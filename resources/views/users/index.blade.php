@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">
        @if(!(Auth::user()->isAdmin || Auth::user()->isOPE))
            <access-denied></access-denied>
        @else
            <div class="row">
                <div class="col-4">
                    <h1 class="page-header">
                        Usuarios
                    </h1>
                </div>
                <div class="col-8">
                    @if(session()->has('notification'))
                        <div class="col-sm-5 offset-7">
                            <div class="alert alert-icon alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session()->get('notification') }}
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Lista de usuarios</h3>
                            <div class="card-options">
                                <a href="{{ route('users.create') }}" class="btn btn-sm  btn-pill btn-info">
                                    <div class="d-inline-flex">
                                        <img src="/assets/images/plus-icon-png-white.png" style="height: 18px;"
                                             class="pt-1"><span
                                            class="pl-3 text-white" style="font-size:17px">Crear Usuario</span>
                                    </div>
                                </a>
                                {{--                            <a href="{{ route('users.create') }}"><i class="fe fe-plus-circle"></i></a>--}}
                                {{--<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>--}}
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link active text-center" id="coordinators-tab" data-toggle="tab"
                                       href="#coordinators"
                                       role="tab" aria-controls="coordinators" aria-selected="true">Administradores /
                                        Coordinadores <br> Regionales ({{ $coordinators->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="agents-tab" data-toggle="tab" href="#agents" role="tab"
                                       aria-controls="agents" aria-selected="false">Agentes Agrícolas
                                        ({{ $agents->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="educators-tab" data-toggle="tab" href="#educators"
                                       role="tab"
                                       aria-controls="educators" aria-selected="false">Educadoras CFC
                                        ({{ $educators->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="specialists-tab" data-toggle="tab" href="#specialists"
                                       role="tab" aria-controls="specialists" aria-selected="false">Especialistas
                                        ({{ $specialists->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="directors-tab" data-toggle="tab" href="#directors"
                                       role="tab"
                                       aria-controls="directors" aria-selected="false">Directores de Departamento
                                        ({{ $directors->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="administrativo-tab" data-toggle="tab" href="#administrativo"
                                       role="tab"
                                       aria-controls="administrativo" aria-selected="false">Personal Administrativo
                                        ({{ $administrativos->count() }})</a>
                                </li>
                                <li class="nav-item" style="width: 150px">
                                    <a class="nav-link" id="opes-tab" data-toggle="tab" href="#opes"
                                       role="tab"
                                       aria-controls="opes" aria-selected="false">Oficina de Planificación
                                        ({{ $opes->count() }})</a>
                                </li>
                            </ul>
                            <br>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane show active table-responsive" id="coordinators" role="tabpanel"
                                     aria-labelledby="coordinators-tab">
                                    <table class="table table-hover" id="coordsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($coordinators as $coordinator)
                                            <tr>
                                                <td><strong>{{ $coordinator->full_name }}</strong></td>
                                                <td>{{ $coordinator->title->description }}</td>
                                                <td>{{ $coordinator->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $coordinator->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $coordinator) }}"
                                                          method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="agents" role="tabpanel"
                                     aria-labelledby="agents-tab">
                                    <table class="table table-hover" id="agentsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($agents as $agent)
                                            <tr>
                                                <td><strong>{{ $agent->full_name }}</strong></td>
                                                <td>{{ $agent->title->description }}</td>
                                                <td>{{ $agent->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $agent->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $agent) }}" method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="educators" role="tabpanel"
                                     aria-labelledby="educators-tab">
                                    <table class="table table-hover" id="educatorsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($educators as $educator)
                                            <tr>
                                                <td><strong>{{ $educator->full_name }}</strong></td>
                                                <td>{{ $educator->title->description }}</td>
                                                <td>{{ $educator->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $educator->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $educator) }}" method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="directors" role="tabpanel"
                                     aria-labelledby="directors-tab">
                                    <table class="table table-hover" id="directorsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($directors as $director)
                                            <tr>
                                                <td><strong>{{ $director->full_name }}</strong></td>
                                                <td>{{ $director->title->description }}</td>
                                                <td>{{ $director->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $director->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $director) }}" method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="specialists" role="tabpanel"
                                     aria-labelledby="specialists-tab">
                                    <table class="table table-hover" id="specialistsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($specialists as $specialist)
                                            <tr>
                                                <td><strong>{{ $specialist->full_name }}</strong></td>
                                                <td>{{ $specialist->title->description }}</td>
                                                <td>{{ $specialist->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $specialist->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $specialist) }}"
                                                          method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="administrativo" role="tabpanel"
                                     aria-labelledby="administrativo-tab">
                                    <table class="table table-hover" id="adminsTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($administrativos as $administrativo)
                                            <tr>
                                                <td><strong>{{ $administrativo->full_name }}</strong></td>
                                                <td>{{ $administrativo->title->description }}</td>
                                                <td>{{ $administrativo->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $administrativo->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    <form action="{{ route('users.destroy', $administrativo) }}"
                                                          method="post"
                                                          onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                        @csrf
                                                        <input type="hidden" name="_method" value="delete">
                                                        <button class="btn btn-sm btn-pill btn-danger"><i
                                                                class="fe fe-trash-2"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="tab-pane fade table-responsive" id="opes" role="tabpanel"
                                     aria-labelledby="opes-tab">
                                    <table class="table table-hover" id="opesTable">
                                        <thead>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Título</th>
                                            <th scope="col">Unidad Programática</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Eliminar</th>
                                        </tr>
                                        </thead>
                                        <tbody id="usersTable">
                                        @foreach($opes as $ope)
                                            <tr>
                                                <td><strong>{{ $ope->full_name }}</strong></td>
                                                <td>{{ $ope->title->description }}</td>
                                                <td>{{ $ope->programmatic_unit->description }}</td>
                                                <td>
                                                    <a href="{{ route('users.edit', $ope->id) }}"
                                                       class="btn btn-sm btn-pill btn-primary"><i
                                                            class="fe fe-edit"></i></a>
                                                </td>
                                                <td>
                                                    @if($ope->title_id !== 1)
                                                        <form action="{{ route('users.destroy', $ope) }}"
                                                              method="post"
                                                              onsubmit="return confirm('¿Está seguro que desea eliminar el usuario?');">
                                                            @csrf
                                                            <input type="hidden" name="_method" value="delete">
                                                            <button class="btn btn-sm btn-pill btn-danger"><i
                                                                    class="fe fe-trash-2"></i></button>
                                                        </form>
                                                    @endIf
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
        @endif
    </div>
@endsection

@section('custom-scripts')
    <script>
        $(document).ready(function () {
            $("#searchInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#usersTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
            $('#coordsTable').DataTable(dtOpts);
            $('#agentsTable').DataTable(dtOpts);
            $('#educatorsTable').DataTable(dtOpts);
            $('#directorsTable').DataTable(dtOpts);
            $('#specialistsTable').DataTable(dtOpts);
            $('#adminsTable').DataTable(dtOpts);
            $('#opesTable').DataTable(dtOpts);
        });
    </script>
@endsection
