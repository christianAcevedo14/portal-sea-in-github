@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Usuarios
            </h1>
        </div>

        <div class="row row-cards">
            <div class="col-sm-12">
                <form action="{{ route('users.update', $user) }}" class="card" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="put">

                    <div class="card-body">
                        <h3 class="card-title">{{ $user->full_name }}</h3>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="title_id" class="custom-select">
                                        <option selected>Título</option>
                                        @foreach($titles as $title)
                                            <option value="{{ $title->id }}" {{ (old("title_id", $user->title->id) == $title->id ? "selected":"") }}>{{ $title->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select name="programmatic_unit_id" class="custom-select">
                                        <option selected>Unidad Programática</option>
                                        @foreach($programmatic_units as $programmatic_unit)
                                            <option value="{{ $programmatic_unit->id }}" {{ (old("programmatic_unit_id", $user->programmatic_unit->id) == $programmatic_unit->id ? "selected":"") }}>{{ $programmatic_unit->description }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="form-group">
                                    <input type="text" name="initial" class="form-control" placeholder="Initial" value="{{ old('initial', $user->initial) }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="surname" class="form-control" placeholder="Surname" value="{{ old('surname', $user->surname) }}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <input type="text" name="second_surname" class="form-control" placeholder="Second Surname" value="{{ old('second_surname', $user->second_surname) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone', $user->phone) }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-label">Aplicaciones autorizadas</div>
                                    @foreach($apps as $app)
                                        <label class="custom-control custom-checkbox custom-control-inline">
                                            <input type="checkbox" class="custom-control-input" name="app_id[]" value="{{ $app->id }}" {{ old('app_id', $user->apps)->contains($app->id) ? 'checked' : '' }}>
                                            <span class="custom-control-label">{{ $app->name }}</span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
