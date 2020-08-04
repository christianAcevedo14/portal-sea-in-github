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
                    <form class="card" method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="card-body p-6">
                            <div class="card-title">Restablecer contraseña</div>
                            <div class="form-group">
                                <label for="email" class="col-form-label">{{ __('E-Mail Address') }}</label>


                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-form-label">{{ __('Password') }}</label>

                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-form-label">{{ __('Confirm Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <div class="form-footer">
                                <button type="submit" class="btn btn-primary btn-block">Restablecer contraseña</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
