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
            @if(session()->has('notification'))
                <div class="col-12 offset-7 float-right">
                    <div class="alert alert-icon alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session()->get('notification') }}
                    </div>
                </div>
            @endif
            <div class="col-12">
                <h1 class="page-header">
                    Bienvenido, {{ Auth::user()->first_name }}
                </h1>
            </div>
        </div>
        <div class="form-control p-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="header">
                        Aplicaciones
                    </h1>
                </div>
            </div>
            <div class="row row-cards text-center align-content-center">
                @foreach(auth()->user()->apps->where('id', '=', 2) as $sise)
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <a href="{{ url($sise->url) }}" class="nounderline">
                            <div class="card text-dark">
                                <div class="card-status bg-blue-light"></div>
                                <div class="card-body p-5 text-center">
                                    <div class="h1">
                                        <i class="{{ $sise->icon }}"></i>
                                        {{--                                    <img src="/img/regular-document.png" alt="">--}}
                                        {{--                                    <span class="m-2">{{$sise->name}}</span>--}}
                                    </div>
                                    <div class="text-muted">{{$sise->name}} 2.0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @foreach(auth()->user()->apps->where('id', '!=', 2) as $app)
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <a href="{{ url($app->url) }}" class="nounderline">
                            <div class="card text-dark">
                                <div class="card-status bg-blue-light"></div>
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

        </div>
        <div class="form-control p-5 mb-5">
            <div class="row mt-2">
                <div class="col-12">
                    <h1 class="header">
                        Anuncios
                    </h1>
                </div>
            </div>

            <!--Carousel Wrapper-->
            <div id="announcements" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top mb-3">
                    <a class="btn-floating" href="#announcements" data-slide="prev"><i
                            class="fa fa-chevron-left"></i></a>
                    <a class="btn-floating" href="#announcements" data-slide="next"><i
                            class="fa fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->

                <!--Indicators-->
{{--                <ol class="carousel-indicators">--}}
{{--                    <li data-target="#announcements" data-slide-to="0" class="active"></li>--}}
{{--                    <li data-target="#announcements" data-slide-to="1"></li>--}}
{{--                    <li data-target="#announcements" data-slide-to="2"></li>--}}
{{--                </ol>--}}
                <!--/.Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">

                    <!--First slide-->
                    <div class="carousel-item active">

                        <div class="row row-cards text-center align-content-center">
                            {{--                announcement section--}}
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="card text-dark h-100">
                                    <div class="card-status bg-blue-light"></div>
                                    <div class="card-body">
                                        <h3 class="text-center">SISE 2.0</h3>
                                        <img src="/img/regular-document.png" alt="Document" width="200" height="200">
                                        <p class="mt-2">La nueva versión de SISE contiene cambios y mejoras que
                                            incrementan la
                                            funcionalidad
                                            de la aplicación.</p>
                                    </div>
                                </div>
                            </div>
                            {{--                announcement section--}}
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="card text-dark h-100">
                                    <div class="card-status bg-blue-light"></div>
                                    <div class="card-body">
                                        <a href="/assets/images/announcements/asesory_lid_area_prog.jpg"
                                           class="nounderline text-dark"
                                           target="_blank">
                                            <img src="/assets/images/announcements/asesory_lid_area_prog.jpg"
                                                 alt="Document" width="500" height="300">
                                        </a>
                                        {{--                            <h3 class="text-center">Actividad</h3>--}}
                                        {{--                            <p class="mt-2">La nueva versión de SISE contiene cambios y mejoras que incrementan la--}}
                                        {{--                                funcionalidad--}}
                                        {{--                                de la aplicación.</p>--}}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!--/.First slide-->

                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="row row-cards text-center align-content-center">
                            {{--                announcement section--}}
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <div class="card text-dark h-100">
                                    <div class="card-status bg-yellow-light"></div>
                                    <div class="card-body">
                                        <h3 class="text-center">Navegadores Recomendados</h3>
                                        <div class="row">
                                            <div class="col-lg-6 col-sm-12 p-5">
                                                <a href="https://www.google.com/chrome/" class="nounderline text-dark"
                                                   target="_blank">
                                                    <h3 class="text-center">Google Chrome</h3>
                                                    <img src="/assets/images/logos/Chrome_logo.png" alt="" width="100"
                                                         height="100">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-sm-12 p-5">
                                                <a href="https://www.microsoft.com/en-us/edge"
                                                   class="nounderline text-dark"
                                                   target="_blank">
                                                    <h3 class="text-center">Microsoft Edge</h3>
                                                    <img src="/assets/images/logos/Edge_logo.png" alt="" width="100"
                                                         height="100">
                                                </a>
                                            </div>
                                        </div>
                                        <p class="mt-3">Considere utilizar uno de los siguientes navegadores para
                                            obtener la mejor
                                            experiencia dentro del
                                            Portal del Extansionista.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--/.Second slide-->

                        <!--Third slide-->
                    {{--                    <div class="carousel-item">--}}

                    {{--                        <div class="row">--}}
                    {{--                            <div class="col-md-4">--}}
                    {{--                                <div class="card mb-2">--}}
                    {{--                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"--}}
                    {{--                                         alt="Card image cap">--}}
                    {{--                                    <div class="card-body">--}}
                    {{--                                        <h4 class="card-title">Card title</h4>--}}
                    {{--                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
                    {{--                                            card's content.</p>--}}
                    {{--                                        <a class="btn btn-primary">Button</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="col-md-4 clearfix d-none d-md-block">--}}
                    {{--                                <div class="card mb-2">--}}
                    {{--                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"--}}
                    {{--                                         alt="Card image cap">--}}
                    {{--                                    <div class="card-body">--}}
                    {{--                                        <h4 class="card-title">Card title</h4>--}}
                    {{--                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
                    {{--                                            card's content.</p>--}}
                    {{--                                        <a class="btn btn-primary">Button</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}

                    {{--                            <div class="col-md-4 clearfix d-none d-md-block">--}}
                    {{--                                <div class="card mb-2">--}}
                    {{--                                    <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"--}}
                    {{--                                         alt="Card image cap">--}}
                    {{--                                    <div class="card-body">--}}
                    {{--                                        <h4 class="card-title">Card title</h4>--}}
                    {{--                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the--}}
                    {{--                                            card's content.</p>--}}
                    {{--                                        <a class="btn btn-primary">Button</a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                    </div>--}}
                    <!--/.Third slide-->

                    </div>
                    <!--/.Slides-->

                </div>
                <!--/.Carousel Wrapper-->
            </div>

        </div>
    </div>
@endsection





