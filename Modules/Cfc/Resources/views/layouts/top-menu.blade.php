<div class="row align-items-center">
    <div class="col-lg-3 ml-auto">
        <form class="input-icon my-3 my-lg-0">
            <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
            <div class="input-icon-addon">
                <i class="fe fe-search"></i>
            </div>
        </form>
    </div>
    <div class="col-lg order-lg-first">
        <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
            <li class="nav-item">
                <a href="{{ route('cfc.dashboard') }}" class="nav-link"><i class="fe fe-home"></i> DASHBOARD</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('participants.index') }}" class="nav-link"><i class="fa fa-pencil-square-o"></i> PARTICIPANTES </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-file-text-o"></i> VISITAS </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-check-square-o"></i> PROYECTOS </a>
            </li>
        </ul>
    </div>
</div>
