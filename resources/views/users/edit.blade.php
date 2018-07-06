@extends('layouts.app')

@section('menu')
    @include('layouts.main_menu')
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">{{ $user->full_name }}</h5>
        <div class="card-body">
            <form action="{{ route('users.update', $user) }}" id="update_user" method="post">

                @csrf
                <input type="hidden" name="_method" value="put">

                <div class="form-group row">
                    <div class="col-sm-6">
                        <select name="title_id" class="form-control">
                            <option selected>Título</option>
                            @foreach($titles as $title)
                                <option value="{{ $title->id }}" {{ (old("title_id", $user->title->id) == $title->id ? "selected":"") }}>{{ $title->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <select name="programmatic_unit_id" class="form-control">
                            <option selected>Unidad Programática</option>
                            @foreach($programmatic_units as $programmatic_unit)
                                <option value="{{ $programmatic_unit->id }}" {{ (old("programmatic_unit_id", $user->programmatic_unit->id) == $programmatic_unit->id ? "selected":"") }}>{{ $programmatic_unit->description }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-4">
                        <input type="text" name="first_name" class="form-control" placeholder="First name" value="{{ old('first_name', $user->first_name) }}">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="initial" class="form-control" placeholder="Initial" value="{{ old('initial', $user->initial) }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="surname" class="form-control" placeholder="Surname" value="{{ old('surname', $user->surname) }}">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="second_surname" class="form-control" placeholder="Second Surname" value="{{ old('second_surname', $user->second_surname) }}">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" name="phone" class="form-control" placeholder="Phone" value="{{ old('phone', $user->phone) }}">
                    </div>
                    <div class="col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email', $user->email) }}">
                    </div>
                </div>

                @foreach($apps as $app)
                    <div class="form-check form-check-inline">
                        <input name="app_id[]" class="form-check-input" type="checkbox" value="{{ $app->id }}" {{ old('app_id', $user->apps)->contains($app->id) ? 'checked' : '' }}>
                        <label class="form-check-label">{{ $app->name }}</label>
                    </div>
                @endforeach
            </form>

        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary float-right" onclick="document.getElementById('update_user').submit();">Actualizar</button>
        </div>
    </div>
@endsection
