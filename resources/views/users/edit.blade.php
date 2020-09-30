@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h1 class="page-header">
                    Perfil de Usuario
                </h1>
            </div>
            <div class="col-sm-8">
                @if(session()->has('errors'))
                    <div class="col-sm-5 offset-7">
                        <div class="alert alert-icon alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <i class="fe fe-trash-2 mr-2" aria-hidden="true"></i> {{ session()->get('errors') }}
                        </div>
                    </div>
                @endif
                @if(session()->has('notification'))
                    <div class="col-sm-5 offset-7">
                        <div class="alert alert-icon alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"></button>
                            <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session()->get('notification') }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="row row-cards">
            <div class="col-sm-12">
                <form action="{{ route('users.update', $user) }}" class="card" method="post"
                      enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 pb-5 text-center align-content-center">
                                <span id="image" class="avatar avatar-xl image" type="file" onclick = "pro1()"
                                      style="background-image: url({{asset($user->avatar)}}) ; width: 8em ; height: 8em">
                                      <p class="label">Cambiar</p>
                                </span>

                                <input type="file" id="avatar" name="avatar" class="form-control-file" >
                            </div>
                            <div class="col-12 text-center pb-2">
                                <h3>{{ $user->full_name }}</h3>
                            </div>
                            <div class="col-12 text-center pb-5">
                                <h5 class="text-muted">{{ $user->title->description }}</h5>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label" for="">Editar información de perfil:</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" name="first_name" class="form-control" placeholder="Nombre"
                                               required
                                               value="{{ old('first_name', $user->first_name) }}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <input type="text" name="initial" class="form-control" placeholder="Inicial"
                                               value="{{ old('initial', $user->initial) }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="surname" class="form-control" placeholder="Apellido"
                                               required
                                               value="{{ old('surname', $user->surname) }}">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <input type="text" name="second_surname" class="form-control"
                                               placeholder="Segundo Apellido"
                                               value="{{ old('second_surname', $user->second_surname) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="title_id" class="custom-select"
                                                @if(!(Auth::user()->isAdmin)) disabled @endif>
                                            <option selected>Título</option>
                                            @foreach($titles as $title)
                                                <option
                                                    value="{{ $title->id }}" {{ (old("title_id", $user->title->id) == $title->id ? "selected":"") }}>{{ $title->description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <select name="programmatic_unit_id" class="custom-select"
                                                @if(!(Auth::user()->isAdmin)) disabled @endif>
                                            <option selected>Unidad Programática</option>
                                            @foreach($programmatic_units as $programmatic_unit)
                                                <option
                                                    value="{{ $programmatic_unit->id }}" {{ (old("programmatic_unit_id", $user->programmatic_unit->id) == $programmatic_unit->id ? "selected":"") }}>{{ $programmatic_unit->description }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Teléfono"
                                               data-mask="(000) 000-0000" data-mask-clearifnotmatch="true"
                                               value="{{ old('phone', $user->phone) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                               required
                                               value="{{ old('email', $user->email) }}"
                                               @if(!(Auth::user()->isAdmin)) disabled @endif>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="password" name="password" class="form-control" placeholder="Contraseña"
                                           disabled
                                           value="{{ old('password'), $user->password }}">
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                </div>
                                <div class="col-sm-6 pb-3">
                                    <input type="password" name="confirm_password" class="form-control"
                                           placeholder="Confirmar Contraseña" disabled
                                           value="{{ old('password'), $user->password }}">
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                </div>
                            </div>
                            <div class="row" @if(!(Auth::user()->isAdmin)) hidden @endif>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-label">Aplicaciones autorizadas</div>
                                        @foreach($apps as $app)
                                            <label class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input" name="app_id[]"
                                                       value="{{ $app->id }}"
                                                    {{ old('app_id', $user->apps)->contains($app->id) ? 'checked' : '' }}>
                                                <span class="custom-control-label">{{ $app->name }}</span>
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" @if(!(Auth::user()->isAdmin)) hidden @endif>
                                <div class="form-label">Región a supervisar</div>
                                <div class="custom-controls-stacked">
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value="100"
                                               {{ old('supervised_region', $user->supervised_region) === 100 ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">Arecibo</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value="200"
                                               {{ old('supervised_region', $user->supervised_region) === 200 ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">Caguas</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value="300"
                                               {{ old('supervised_region', $user->supervised_region) === 300 ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">Mayagüez</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value="400"
                                               {{ old('supervised_region', $user->supervised_region) === 400 ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">Ponce</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value="500"
                                               {{ old('supervised_region', $user->supervised_region) === 500 ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">San Juan</span>
                                    </label>
                                    <label class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" name="supervised_region"
                                               value=""
                                               {{ old('supervised_region', $user->supervised_region) === NULL ? 'checked' : '' }} @if(!(Auth::user()->isAdmin)) disabled @endif>
                                        <span class="custom-control-label">Ninguna</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        @if(!(Auth::user()->isAdmin))
                            <a href="{{ route('home') }}" class="btn btn-secondary"
                               onclick="return confirm('¿Está seguro que desea salir? Perderá toda la información no guardada.');">Cancelar</a>
                        @else
                            <a href="{{ route('users.index') }}" class="btn btn-secondary"
                               onclick="return confirm('¿Está seguro que desea salir? Perderá toda la información no guardada.');">Cancelar</a>
                        @endif
                        <span class="m-1"></span>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                    <input type="hidden" name="_method" value="put">
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')
    <script>
        function pro1(){
            document.getElementById("avatar").click();
        }
    </script>


    <script>
        require(['input-mask']);
    </script>


@endsection
