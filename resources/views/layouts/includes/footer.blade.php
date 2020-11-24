{{--<div class="footer">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-6 col-md-3">--}}
{{--                        <ul class="list-unstyled mb-0">--}}
{{--                            <li><a href="https://www.uprm.edu/sea/">https://www.uprm.edu/sea/</a></li>--}}
{{--                            --}}{{--                            <li><a href="#">Second link</a></li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                    --}}{{--                    <div class="col-6 col-md-3">--}}
{{--                    --}}{{--                        <ul class="list-unstyled mb-0">--}}
{{--                    --}}{{--                            <li><a href="#">Third link</a></li>--}}
{{--                    --}}{{--                            <li><a href="#">Fourth link</a></li>--}}
{{--                    --}}{{--                        </ul>--}}
{{--                    --}}{{--                    </div>--}}
{{--                    --}}{{--                    <div class="col-6 col-md-3">--}}
{{--                    --}}{{--                        <ul class="list-unstyled mb-0">--}}
{{--                    --}}{{--                            <li><a href="#">Fifth link</a></li>--}}
{{--                    --}}{{--                            <li><a href="#">Sixth link</a></li>--}}
{{--                    --}}{{--                        </ul>--}}
{{--                    --}}{{--                    </div>--}}
{{--                    --}}{{--                    <div class="col-6 col-md-3">--}}
{{--                    --}}{{--                        <ul class="list-unstyled mb-0">--}}
{{--                    --}}{{--                            <li><a href="#">Other link</a></li>--}}
{{--                    --}}{{--                            <li><a href="#">Last link</a></li>--}}
{{--                    --}}{{--                        </ul>--}}
{{--                    --}}{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            --}}{{--            <div class="col-lg-4 mt-4 mt-lg-0">--}}
{{--            --}}{{--                Premium and Open Source dashboard template with responsive and high quality UI. For Free!--}}
{{--            --}}{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<footer class="footer">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-auto ml-lg-auto">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <ul class="list-inline list-inline-dots mb-0">
                            {{--                            <li class="list-inline-item"><a href="./docs/index.html" style="color: #0d8ddc">Documentación</a></li>--}}
                            {{--                            <li class="list-inline-item"><a href="./faq.html"  style="color: #0d8ddc">Preguntas frecuentes</a></li>--}}
                            <li class="list-inline-item btn-primary btn-pill">
                                <a href="{{ route('tutorials.index') }}" target="_blank"
                                   class="text-white">Tutoriales</a>
                            </li>
                        </ul>
                    </div>
          {{--          <div class="col-auto">

                        <ul class="list-inline list-inline-dots mb-0">

                            <li class="list-inline-item btn-primary btn-pill">
                                <a href="{{ route('ticket.create') }}"
                                   target="popup"
                                   onclick="window.open(
                                       '{{ URL::to('ticket/ticket/create') }}',
                                       'name',
                                       'width=600,height=600'
                                       )"
                                   class="text-white">
                                    Crear Ticket Serv
                                </a>
                            </li>
                        </ul>
                        --}}{{--                    <div class="col-auto">--}}{{--
                        --}}{{--                        <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">--}}{{--
                        --}}{{--                            Código fuente</a>--}}{{--
                        --}}{{--                    </div>--}}{{--
                    </div>--}}
                </div>
            </div>
            <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                <img src="/assets/images/sea-logo.png" style="height: 50px">
                Copyright © 2020 Servicio de Extensión Agrícola. Todos los derechos reservados.
            </div>
        </div>
    </div>
</footer>
