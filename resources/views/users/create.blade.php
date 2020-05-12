@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">
        <div class="row row-cards">
            <div class="col-sm-12">
                <form action="{{ route('users.store') }}" class="card" method="post">
                    <input type="hidden" name="password"  value="123123" readonly="readonly">
                    <input type="hidden" name="avatar"  value="assets/images/avatars/no_avatar.png" readonly="readonly">
                    <div class="card-header">
                        <h3 class="card-title">Crear usuario</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="title_id" class="custom-select @if($errors->has('title_id')) is-invalid @endif">
                                        <option disabled selected>Título</option>
                                        @foreach($titles as $title)
                                            <option value="{{ $title->id }}" {{ (old("title_id") == $title->id ? "selected":"") }}>{{ $title->description }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">{{ $errors->first('programmatic_unit_id') }}</div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="programmatic_unit_id" class="custom-select @if($errors->has('programmatic_unit_id')) is-invalid @endif">
                                        <option disabled selected>Unidad Programática</option>
                                        @foreach($programmatic_units as $programmatic_unit)
                                            <option value="{{ $programmatic_unit->id }}" {{ (old("programmatic_unit_id") == $programmatic_unit->id ? "selected":"") }}>{{ $programmatic_unit->description }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">{{ $errors->first('programmatic_unit_id') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control @if($errors->has('first_name')) is-invalid @endif" placeholder="Nombre" value="{{ old('first_name') }}">
                                    <div class="invalid-feedback">{{ $errors->first('first_name') }}</div>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" name="initial" class="form-control" placeholder="Inicial" value="{{ old('initial') }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control @if($errors->has('surname')) is-invalid @endif" placeholder="Primer Apellido" value="{{ old('surname') }}">
                                    <div class="invalid-feedback">{{ $errors->first('surname') }}</div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="second_surname" class="form-control" placeholder="Segundo Apellido" value="{{ old('second_surname') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Teléfono" data-mask="(000) 000-0000" data-mask-clearifnotmatch="true" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" placeholder="Correo Electrónico" value="{{ old('email') }}">
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-label">Aplicaciones autorizadas</div>
                                    @foreach($apps as $app)
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" name="app_id[]" @if ($app->id === 8) checked="checked" disabled @endif value="{{ $app->id }}">
                                            <span class="custom-control-label">{{ $app->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label">Region a Supervisar</div>
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="supervised_region" value="1">
                                    <span class="custom-control-label">Region Arecibo</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="supervised_region" value="2">
                                    <span class="custom-control-label">Region Caguas</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="supervised_region" value="3">
                                    <span class="custom-control-label">Region Mayaguez</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="supervised_region" value="4">
                                    <span class="custom-control-label">Region Ponce</span>
                                </label>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" name="supervised_region" value="5">
                                    <span class="custom-control-label">Region San Juan</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('users.index') }}" class="btn btn-warning"
                           onclick="return confirm('¿Está seguro que desea salir? Perderá toda la información no guardada.');">Cancelar</a>
                        <span class="m-1"></span>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

@section('custom-scripts')

    <script>
        require(['input-mask']);
    </script>

@endsection
