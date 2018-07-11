<div class="dropdown">
    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
        <span class="avatar" style="background-image: url({{ asset('demo/faces/male/2.jpg') }})"></span>
        <span class="ml-2 d-none d-lg-block">
            <span class="text-default">{{ auth()->user()->full_name }}</span>
            <small class="text-muted d-block mt-1">{{ auth()->user()->title->description }}</small>
        </span>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
        <a class="dropdown-item" href="#">
            <i class="dropdown-icon fe fe-user"></i> Profile
        </a>
        <a class="dropdown-item" href="#">
            <i class="dropdown-icon fe fe-settings"></i> Settings
        </a>
        <a class="dropdown-item" href="#">
            <span class="float-right"><span class="badge badge-primary">6</span></span>
            <i class="dropdown-icon fe fe-mail"></i> Inbox
        </a>
        <a class="dropdown-item" href="#">
            <i class="dropdown-icon fe fe-send"></i> Message
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">
            <i class="dropdown-icon fe fe-help-circle"></i> Need help?
        </a>
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="dropdown-icon fe fe-log-out"></i> Sign out
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

    </div>
</div>