<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <span class="avatar" style="background-image: url({{ asset(auth()->user()->avatar) }})"></span>
        <span class="ml-2 d-none d-lg-block">
            <span class="text-default">{{ auth()->user()->full_name }}</span>
            <small class="text-muted d-block mt-1">{{ auth()->user()->title->description }}</small>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="{{ route('home') }}">
            <i class="dropdown-icon fe fe-grid"></i> Aplicaciones
        </a>
        <a class="dropdown-item" href="{{ route('users.edit', Auth::user()->id) }}">
            <i class="dropdown-icon fe fe-user"></i> Perfil
        </a>
{{--        <a class="dropdown-item" href="#">--}}
{{--            <i class="dropdown-icon fe fe-settings"></i> Settings--}}
{{--        </a>--}}
{{--        <a class="dropdown-item" href="#">--}}
{{--            <span class="float-right"><span class="badge badge-primary">6</span></span>--}}
{{--            <i class="dropdown-icon fe fe-mail"></i> Inbox--}}
{{--        </a>--}}
{{--        <a class="dropdown-item" href="#">--}}
{{--            <i class="dropdown-icon fe fe-send"></i> Message--}}
{{--        </a>--}}
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#" data-toggle="modal"
           data-target="#helpModal">
            <i class="dropdown-icon fe fe-help-circle"></i> Ayuda
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="dropdown-icon fe fe-log-out"></i> Cerrar sesión
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>

<div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModal"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ayuda</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>
            <div class="modal-body text-center align-content-center">
                <div class="form-control">
                    <h3 class="header">Visite Nuestra Ventana de Apoyo</h3>
                    <div class="row">
                        <div class="col-12 my-4">
                            <a href="https://meet.google.com/hze-outc-csd" target="_blank">
                                <img src="/assets/images/logos/google-meet-logo.png" alt="Google Meet Logo" width="120" height="120" title="Visitar Ventana">
                            </a>
                        </div>
                        <div class="col-12 my-5">
                            <a href="https://meet.google.com/hze-outc-csd" class="btn btn-pill btn-primary" target="_blank">Visitar Ahora</a>
                        </div>
                    </div>
                    <p class="text-center">Horario: Lunes a Jueves, de 9:00AM a 11:00AM y de 2:00PM a 4:00PM</p>
                </div>
                <br>
                <div class="form-control">
                <h3 class="header">Contáctenos via Email</h3>
                <p class="text-center"><a href="mailto:support-ope@upr.edu">
                        support-ope@upr.edu
                    </a></p>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
