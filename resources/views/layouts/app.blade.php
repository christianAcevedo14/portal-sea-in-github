<!doctype html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
{{--    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon"/>--}}
{{--    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />--}}
{{--    <!-- Generated: 2018-04-16 09:29:05 +0200 -->--}}

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal del Extensionista | Servicio de Extensión Agrícola</title>
    <link rel="icon" href="/demo/brand/portal_icon.png" type="image"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,500,500i,600,600i,700,700i&amp;subset=latin-ext">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <!-- Summernote -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.js"></script>
    <!-- Dashboard Core -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet" />
    <!-- c3.js Charts Plugin -->
    <link href="{{ asset('assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet" />
    <!-- Google Maps Plugin -->
    <link href="{{ asset('assets/plugins/maps-google/plugin.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/require.min.js') }}"></script>
    <script>
        requirejs.config({
            baseUrl: '/'
        });
    </script>
    <style>
        /*usado en profile para esconder input*/
        #avatar{
            display: none;
        }

        .image {
            height: 100px;
            overflow: hidden;
            position: relative;
            width: 100px;
        }
        .label {
            background: rgba(0, 0, 0, 0.5) none repeat scroll 0 0;
            bottom: -65px;
            color: #fff;
            left: 0;
            margin: 0;
            position: absolute;
            right: 0;
            text-align: center;
            transition:0.1s all;
        }

        .image:hover .label {
            bottom: 0px;
        }

        #myBtn {
            visibility: hidden;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            /*background-color: whitesmoke;*/
            /*color: white;*/
            cursor: pointer;
            padding: 15px;
            border-radius: 15px;
            opacity: 0;
            transition: .5s ease;
        }

        /* check if the screen size is at least 770px */
        @media only screen and (max-width: 770px) {
            #sea_brand {
           display: none;
            }
        }

        @media print {
            .modal-body {
                overflow: visible !important;
            }
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
        }

        .pulse-button {
            box-shadow: 0 0 0 0 rgba(38, 143, 255, 0.5);
            -webkit-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -moz-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            -ms-animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
            animation: pulse 1.25s infinite cubic-bezier(0.66, 0, 0, 1);
        }

        .pulse-button:hover
        {
            -webkit-animation: none;-moz-animation: none;-ms-animation: none;animation: none;
        }

        .form-control , .form-fieldset , .form-group , .custom-select , .card , .dropdown-menu , .modal-content , .btn , .alert {
            border-radius: 15px;
        }

        .stamp {
            border-radius: 10px;
        }

        .fade {
            backdrop-filter: blur(5px);
        }

        .nounderline {
            text-decoration: none !important
        }

        @-webkit-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @-moz-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @-ms-keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}
        @keyframes pulse {to {box-shadow: 0 0 0 45px rgba(232, 76, 61, 0);}}

        /*#myBtn:hover {*/
        /*    background-color: #2d89f0;*/
        /*}*/

        html { scroll-behavior: smooth;}
    </style>
</head>
<body>
    <div id="app" class="page">
        <div class="page-main">
            <div class="header py-4">
                <div class="container">
                    <div class="d-flex">
                        <a class="header-brand" href="/home">
                            <img src="{{ asset('demo/brand/portal.png') }}" class="header-brand-img" alt="portal logo">
                            <label id="sea_brand" class="text-center text-black md-lg" style="height: 8px">| Servicio de Extensión Agrícola </label>
                        </a>
                        <div class="d-flex order-lg-2 ml-auto">
                            <notifications></notifications>
                            {{--@include('layouts.includes.notifications')--}}
                            @include('layouts.includes.user_menu')
                        </div>
                        <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                            <span class="header-toggler-icon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
                <div class="container">
                    @yield('top-menu')
                </div>
            </div>
            <div class="my-3 my-md-5">
                <button onclick="topFunction()" id="myBtn" class="btn btn-primary" title="Regresar Arriba"><span class="fe fe-arrow-up-circle"></span></button>
                @yield('content')
            </div>
        </div>
        {{--footer--}}
    </div>
    @yield('custom-scripts')
    <!-- App.js -->
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Dashboard Core -->
    {{--<script src="{{ asset('assets/js/dashboard.js') }}"></script>--}}
    <!-- c3.js Charts Plugin -->
    <script src="{{ asset('assets/plugins/charts-c3/plugin.js') }}"></script>
    <!-- Google Maps Plugin -->
    <script src="{{ asset('assets/plugins/maps-google/plugin.js') }}"></script>
    <!-- Input Mask Plugin -->
    <script src="{{ asset('assets/plugins/input-mask/plugin.js') }}"></script>
    <script>
        let timeoutID;
        let langOpt = {
            "sProcessing": "Procesando...",
            "sLengthMenu": "Mostrar _MENU_ registros.",
            "sZeroRecords": "No se encontraron resultados.",
            "sEmptyTable": "Ningún dato disponible en esta tabla.",
            "sInfo": "Mostrando registros del _START_ al _END_ de _TOTAL_.",
            "sInfoEmpty": "Mostrando registros del 0 al 0 de 0.",
            "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast": "Último",
                "sNext": "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            },
            "buttons": {
                "copy": "Copiar",
                "colvis": "Visibilidad"
            }
        }
        let dtOpts = {
            // dom: 'lfrtip<"clear">B',
            // buttons: [
            //     'copy', 'csv', 'pdf'
            // ],
            // responsive: true,
            // processing: true,
            retrieve: true,
            language: langOpt,
        }

        function setup() {
            this.addEventListener("mousemove", resetTimer, false);
            this.addEventListener("mousedown", resetTimer, false);
            this.addEventListener("keypress", resetTimer, false);
            this.addEventListener("DOMMouseScroll", resetTimer, false);
            this.addEventListener("mousewheel", resetTimer, false);
            this.addEventListener("touchmove", resetTimer, false);
            this.addEventListener("MSPointerMove", resetTimer, false);

            startTimer();
        }

        setup();

        function startTimer() {
            // wait 115 minutes before calling goInactive
            timeoutID = window.setTimeout(goInactive, 6900000);
        }

        function resetTimer(e) {
            window.clearTimeout(timeoutID);
            goActive();
        }

        function goInactive() {
            let actual = new Date();
            let actual_plus_five = new Date(actual.getTime() + 5*60000);

            let actual_time = actual.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });
            let actual_plus_five_time = actual_plus_five.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });

            alert('Aviso Importante:\n\nHemos detectado inactividad durante 1 hora y 55 minutos.\nDe no guardar su trabajo en los próximos 5 minutos, puede perder el mismo.\n\nTiempo de envío  : ' + actual_time + '\nExpiración de sesión: ' + actual_plus_five_time)
        }

        function goActive() {
            startTimer();
        }

        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
                mybutton.style.visibility = "visible";
                mybutton.style.opacity = "1";
            } else {
                mybutton.style.visibility = "hidden";
                mybutton.style.opacity = "0";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        $(document).ready(function () {
            $('.dropdown-submenu a.test').on("click", function (e) {
                $(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
            $("#resetPassModal").modal('show');
        });

    </script>
</body>

<footer>
    @include('layouts.includes.footer')
</footer>

</html>
