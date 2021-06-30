<div class="row align-items-center">
    <div class="col-lg-3 ml-auto">
        <form class="input-icon my-3 my-lg-0">
            <input type="search" id="searchInput" class="form-control header-search" placeholder="Buscar..." tabindex="1">
            <div class="input-icon-addon">
                <i class="fe fe-search"></i>
            </div>
        </form>
    </div>
    <div class="col-lg order-lg-first">
        <div class="row">
            <div class="col-sm-12 col-lg-1 pt-4 pl-2 pr-2"><h4 class="border-right">Home</h4></div>
            <div class="col-sm-12 col-lg-11">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="{{ (request()->is('home')) ? 'nav-link active' : 'nav-link' }}"><i class="fe fe-grid"></i> Aplicaciones</a>
                    </li>
                    {{--                <li class="nav-item">--}}
                    {{--                    <a href="{{ route('users.edit', Auth::user()->id) }}" class="{{ (request()->is('users*')) }}" ><i class="fe fe-user"></i>Mi Perfil</a>--}}
                    {{--                </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('tutorials.index') }}" class="{{ (request()->is('tutorials*')) ? 'nav-link active' : 'nav-link' }}"><i class="fe fe-film"></i> Tutoriales</a>
                    </li>
                    @if(Auth::user()->isAdmin)
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="{{ (request()->is('users*')) ? 'nav-link active' : 'nav-link' }}"><i class="fe fe-users"></i> Usuarios</a>
                        </li>
                    @endif
                    {{--<li class="nav-item">--}}
                    {{--<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-box"></i> Interface</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-arrow">--}}
                    {{--<a href="./cards.html" class="dropdown-item ">Cards design</a>--}}
                    {{--<a href="./charts.html" class="dropdown-item ">Charts</a>--}}
                    {{--<a href="./pricing-cards.html" class="dropdown-item ">Pricing cards</a>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown">--}}
                    {{--<a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-calendar"></i> Components</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-arrow">--}}
                    {{--<a href="./maps.html" class="dropdown-item ">Maps</a>--}}
                    {{--<a href="./icons.html" class="dropdown-item ">Icons</a>--}}
                    {{--<a href="./store.html" class="dropdown-item ">Store</a>--}}
                    {{--<a href="./blog.html" class="dropdown-item ">Blog</a>--}}
                    {{--<a href="./carousel.html" class="dropdown-item ">Carousel</a>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown">--}}
                    {{--<a href="javascript:void(0)" class="nav-link active" data-toggle="dropdown"><i class="fe fe-file"></i> Pages</a>--}}
                    {{--<div class="dropdown-menu dropdown-menu-arrow">--}}
                    {{--<a href="./profile.html" class="dropdown-item ">Profile</a>--}}
                    {{--<a href="./login.html" class="dropdown-item ">Login</a>--}}
                    {{--<a href="./register.html" class="dropdown-item ">Register</a>--}}
                    {{--<a href="./forgot-password.html" class="dropdown-item ">Forgot password</a>--}}
                    {{--<a href="./400.html" class="dropdown-item ">400 error</a>--}}
                    {{--<a href="./401.html" class="dropdown-item ">401 error</a>--}}
                    {{--<a href="./403.html" class="dropdown-item ">403 error</a>--}}
                    {{--<a href="./404.html" class="dropdown-item ">404 error</a>--}}
                    {{--<a href="./500.html" class="dropdown-item ">500 error</a>--}}
                    {{--<a href="./503.html" class="dropdown-item ">503 error</a>--}}
                    {{--<a href="./email.html" class="dropdown-item ">Email</a>--}}
                    {{--<a href="./empty.html" class="dropdown-item active">Empty page</a>--}}
                    {{--<a href="./rtl.html" class="dropdown-item ">RTL mode</a>--}}
                    {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item dropdown">--}}
                    {{--<a href="./form-elements.html" class="nav-link"><i class="fe fe-check-square"></i> Forms</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a href="./gallery.html" class="nav-link"><i class="fe fe-image"></i> Gallery</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                    {{--<a href="./docs/index.html" class="nav-link"><i class="fe fe-file-text"></i> Documentation</a>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>

    </div>
</div>
