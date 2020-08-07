@extends('layouts.auth')

@section('content')
    <div class="page-single">
        <div class="container">
            <div class="row">
                <div class="col col-login mx-auto">
                    <div class="text-center mb-6">
                        <img src="{{ asset('demo/brand/portal.png') }}" class="h-6" alt="">
                        <label class="text-center text-black mt-3">| Servicio de Extensión Agrícola </label>
                    </div>
                    <form class="card" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf
                        <div class="card-body p-6">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-title">Olvidé mi contraseña</div>
                            <p class="text-muted">Ingrese su correo electrónico para restablecer su contraseña.</p>
                            <div class="form-group">
                                <label for="email" class="col-form-label">Correo electrónico</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Enviar enlace para restablecer contraseña</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        Regresar a la <a href="{{ route('login') }}">página de inicio.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
