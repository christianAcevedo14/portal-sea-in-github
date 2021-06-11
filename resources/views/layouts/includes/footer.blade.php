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
        <div class="row align-items-center">
            <div class="col-lg-7 col-sm-12 mb-2">
                <div class="row align-items-center">
                    <div class="col-auto">
                        <ul class="list-inline mb-0">
                            {{--                            <li class="list-inline-item"><a href="./docs/index.html" style="color: #0d8ddc">Documentación</a></li>--}}
                            {{--                            <li class="list-inline-item"><a href="./faq.html"  style="color: #0d8ddc">Preguntas frecuentes</a></li>--}}
                            <li class="list-inline-item">
                                <a href="{{ route('tutorials.index') }}" target="_blank">
                                    <button class="btn btn-outline-primary btn-pill btn-sm">
                                        Tutoriales
                                    </button>
                                   </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#" data-toggle="modal"
                                   data-target="#helpModal">
                                    <button class="btn btn-outline-primary btn-pill btn-sm">
                                        Ayuda
                                    </button>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{--               Warning!! Breaks Portal-SEA!!--}}
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
               </div>--}}

                {{--                    <div class="col-auto">--}}
                {{--                        <a href="https://github.com/tabler/tabler" class="btn btn-outline-primary btn-sm">--}}
                {{--                            Código fuente</a>--}}
                {{--                    </div>--}}

            </div>
            <div class="col-lg-5 col-sm-12">
                <div class="row">
                    <div class="col-10 pr-1 border-right text-right">
                        Copyright © {{ date('Y') }} Servicio de Extensión Agrícola. <br> Todos los derechos reservados.
                    </div>
                    <div class="col-2 pl-1">
                        <img src="/assets/images/sea-logo.png" style="height: 50px">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
