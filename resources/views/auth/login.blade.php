@extends('layouts.auth')

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                    <img src="{{ asset('demo/brand/portal.png') }}" class="h-6" alt="">
                        <label class="text-center text-black" style="height: 15px">| Servicio de Extensión Agrícola </label>
                    </div>
                    <form class="card" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="card-body p-6">
                            <div class="card-title">Iniciar Sesión</div>
                            <div class="form-group">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="form-label">
                                    Contraseña
                                    <a href="{{ route('password.request') }}" class="float-right small">Olvidé mi contraseña</a>
                                </label>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                                    <span class="custom-control-label">Recuérdame</span>
                                </label>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Acceder</button>
                            </div>
                        </div>
                    </form>
{{--                    <div class="text-center text-muted">--}}
{{--                        ¿No tienes una cuenta? <a href="#">Regístrate</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
