<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Portal del Extensionista | Servicio de Extensión Agrícola</title>
    <link rel="icon" href="/demo/brand/portal_icon.png" type="image"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            /*color: #636b6f;*/
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            /*margin: 0;*/
        }

        /*.modal-header-warning {*/
        /*    color: #fff;*/
        /*    padding: 9px 15px;*/
        /*    font-weight: bold;*/
        /*    border-bottom: 1px solid #eee;*/
        /*    background-color: #f0ad4e;*/
        /*    -webkit-border-top-left-radius: 5px;*/
        /*    -webkit-border-top-right-radius: 5px;*/
        /*    -moz-border-radius-topleft: 5px;*/
        /*    -moz-border-radius-topright: 5px;*/
        /*    border-top-left-radius: 5px;*/
        /*    border-top-right-radius: 5px;*/
        /*}*/

        /*.modal-header-danger {*/
        /*    color: #fff;*/
        /*    padding: 9px 15px;*/
        /*    font-weight: bold;*/
        /*    border-bottom: 1px solid #eee;*/
        /*    background-color: #a41a19;*/
        /*    -webkit-border-top-left-radius: 5px;*/
        /*    -webkit-border-top-right-radius: 5px;*/
        /*    -moz-border-radius-topleft: 5px;*/
        /*    -moz-border-radius-topright: 5px;*/
        /*    border-top-left-radius: 5px;*/
        /*    border-top-right-radius: 5px;*/
        /*}*/

        /*.modal-body {*/
        /*    height: 80%;*/
        /*    overflow: auto;*/
        /*    text-align: justify;*/
        /*    font-weight: bold;*/
        /*}*/

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            /*font-weight: 600;*/
            color: #0a0c0d;
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-size: 20px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
            background-color: #57A1F3;
        }

        .modal-content, .btn {
            border-radius: 15px;
        }

        /* check if the screen size is at least 770px */
        @media only screen and (min-width: 1000px) {
            #sea_logo_sm {
                display: none;
            }
            .title {
                font-size: 90px;
            }
        }

        @media only screen and (max-width: 1000px) {
            #sea_logo_lg {
                display: none;
            }
            .title {
                font-size: 55px;
            }
        }


    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    {{--    @if (Route::has('login'))--}}
    {{--        <div class="top-right links">--}}
    {{--            @auth--}}
    {{--                <a href="{{ url('/home') }}">Home</a>--}}
    {{--            @else--}}
    {{--                <a href="{{ route('login') }}">Login</a>--}}
    {{--            @endauth--}}
    {{--        </div>--}}
    {{--    @endif--}}

    <div class="content">
        <div class="container">
            <div id="sea_logo_sm" class="row">
                <div class="col-12 text-left">
                    <img src="/assets/images/sea-logo.png" style="height: 320px">
                    <hr class="mt-5">
                    <h3 class="title text-left">
                        Portal del <br> Extensionista
                    </h3>
                    <hr>
                </div>
            </div>
            <div id="sea_logo_lg" class="row">
                <div class="col-8 border-right pr-4">
                    <h3 class="title text-right mt-5 font-weight-bold">
                        Portal <br> del <br> Extensionista
                    </h3>
                </div>
                <div class="col-4 pl-4 pt-3">
                    <img src="/assets/images/sea-logo.png" style="height: 400px">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    @if (Route::has('login'))
                        <div class="links">
                            @auth
                                <a href="{{ url('/home') }}" class="btn btn-info">
                                    Página Principal</a>
                            @else
                                <a href="{{ route('login') }}" class="btn btn-info">
                                    Iniciar Sesión</a>
                            @endauth
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <!-- Modal content-->

                <div class="modal-content">
                    <div class="modal-header modal-header-warning">
                        <h4 class="modal-title text-dark font-weight-bold">AVISO IMPORTANTE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-warning text-justify font-weight-bold">
                            <p> Usted está accediendo a un sistema con seguridad controlada. Al entrar, usted
                                certifica que es un
                                usuario autotizado del Servicio de Extensión Agrícola. </p>

                            <p>Cualquier acceso sin autorización estará sujeto a normas y reglamentaciones que rigen
                                la política de
                                tecnología e información de la Universidad de Puerto Rico y a cualquier otra
                                disposición, ley
                                estatal y federal según aplicable.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger font-weight-bold" data-dismiss="modal">Acepto
                        </button>
                    </div>
                </div>


            {{--       For Portal-SEA Update--}}

            <!--                <div class="modal-content">
                    <div class="modal-header modal-header-danger">
                        <h4 class="modal-title"  style="font-weight: bold; color:white;">AVISO IMPORTANTE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> El Portal del Extensionista se encuentra bajo mantenimiento. Por el momento, no tendrá acceso a ciertas aplicaciones.</p>

                        <p>Cualquier acceso sin autorización estará sujeto a normas y reglamentaciones que rigen la política de
                            tecnología e información de la Universidad de Puerto Rico y a cualquier otra disposición, ley
                            estatal y federal según aplicable.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger strong btn-lg" data-dismiss="modal">Continuar</button>
                    </div>
                </div>-->

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(window).on('load', function () {
        $('#myModal').modal('show');
    });
</script>
</body>
</html>
