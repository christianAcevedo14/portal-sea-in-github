@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

<style>
    .card:hover {
        border-color: #2d89f0;
        box-shadow: 0px 0px 40px 0px rgba(0, 0, 0, 0.1);
    }

    .nounderline {
        text-decoration: none !important
    }
</style>

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1 class="page-header">
                    Aplicaciones
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
        </div>
        <div class="row row-cards text-center align-content-center">
            @foreach(auth()->user()->apps->where('id', '=', 2) as $sise)
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="{{ url($sise->url) }}" class="nounderline">
                        <div class="card text-dark">
                            <div class="card-body p-5 text-center">
                                <div class="h1">
                                    <i class="{{ $sise->icon }}"></i>
                                    {{--                                    <img src="/img/regular-document.png" alt="">--}}
                                    {{--                                    <span class="m-2">{{$sise->name}}</span>--}}
                                </div>
                                <div class="text-muted">{{$sise->name}}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            @foreach(auth()->user()->apps->where('id', '!=', 2) as $app)
                <div class="col-sm-6 col-md-4 col-lg-2">
                    <a href="{{ url($app->url) }}" class="nounderline">
                        <div class="card text-dark">
                            <div class="card-body p-5 text-center">
                                <div class="h1">
                                    <i class="{{ $app->icon }}"></i>
                                </div>
                                <div class="text-muted">{{$app->name}}</div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="row mt-2">
            <div class="col-12">
                <h1 class="page-header">
                    Anuncios
                </h1>
            </div>
            {{--            <div class="col-12">--}}
            {{--                <p></p>--}}
            {{--            </div>--}}
        </div>

        <div class="row row-cards text-center align-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card text-dark">
                    <div class="card-status bg-blue-light"></div>
                    <div class="card-body">
                        <h3 class="text-center">SISE 2.0</h3>
                        <img src="/img/regular-document.png" alt="Document" width="200" height="200">
                        <p class="mt-2">La nueva versión de SISE trae cambios y mejoras que incrementan la funcionalidad de la herramienta.</p>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card text-dark">
                    <div class="card-status bg-green-light"></div>
                    <div class="card-body">
                        <h3 class="text-center">Felices Fiestas</h3>
                        <img src="/img/firework.gif" alt="Fireworks" width="200" height="200">
                        <p class="mt-2">De parte del equipo de programación de la Oficina de Planificación y Evaluación del Servicio de Extensión Agrícola.</p>
                        {{--                        Felices fiestas, compañeros. Gracias por su excelente trabajo y por la oportunidad de compartir esta experiencia con ustedes. Mucho éxito!! (EM)--}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12">
                <h1 class="page-header">
                    Navegadores Recomendados
                </h1>
            </div>
            <div class="col-12">
                <p>Considere utilizar uno de los siguientes navegadores para obtener la mejor experiencia dentro del Portal del Extansionista.</p>
            </div>
        </div>

        <div class="row row-cards text-center align-content-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="https://www.google.com/chrome/" class="nounderline" target="_blank">
                    <div class="card text-dark pulse-button">
                        <div class="card-status bg-green"></div>
                        <div class="card-body">
                            <h3 class="text-center">Google Chrome</h3>
                            <img src="/assets/images/logos/Chrome_logo.png" alt="" width="100" height="100">
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-6">
                <a href="https://www.microsoft.com/en-us/edge" class="nounderline" target="_blank">
                    <div class="card text-dark pulse-button">
                        <div class="card-status bg-blue"></div>
                        <div class="card-body">
                            <h3 class="text-center">Microsoft Edge</h3>
                            <img src="/assets/images/logos/Edge_logo.png" alt="" width="100" height="100">
                        </div>
                    </div>
                </a>
            </div>

{{--            <div class="col-sm-12 col-md-6 col-lg-4">--}}
{{--                <a href="https://www.mozilla.org/en-US/firefox/new/" class="nounderline" target="_blank">--}}
{{--                    <div class="card text-dark">--}}
{{--                        <div class="card-status bg-orange"></div>--}}
{{--                        <div class="card-body">--}}
{{--                            <h3 class="text-center">Mozilla Firefox</h3>--}}
{{--                            <img src="/assets/images/logos/Firefox_logo.png" alt="" width="100" height="100">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
        </div>



    </div>
@endsection





