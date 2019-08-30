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
                    <form class="card" method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf
                        <div class="card-body p-6">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <div class="card-title">Olvidé mi contraseña</div>
                            <p class="text-muted">Enter your email address and your password will be reset and emailed to you.</p>
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
                                <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
                            </div>
                        </div>
                    </form>
                    <div class="text-center text-muted">
                        De vuelta a la <a href="{{ route('login') }}">página de inicio.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
