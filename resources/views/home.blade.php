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
        {{--        Opens modal to change password if user is still using the default--}}
        @if(isset($firstLogin))
            @include('users.partials.reset_pass_modal')
        @endif

        <div class="row">
            @if(session()->has('notification'))
                <div class="col-sm-5 offset-7 float-right">
                    <div class="alert alert-icon alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        <i class="fe fe-check mr-2" aria-hidden="true"></i> {{ session()->get('notification') }}
                    </div>
                </div>
            @endif
            <div class="col-12">
                <h4 class="page-title">
                    Bienvenido, {{ Auth::user()->first_name }}
                </h4>
            </div>
        </div>
        <div class="form-control p-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="page-title mb-2">
                        Aplicaciones
                    </h2>
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
                                    <div class="text-muted">{{$sise->name}} 2.0</div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                @foreach(auth()->user()->apps->where('id', '!=', 2) as $app)
                    <div class="col-sm-6 col-md-4 col-lg-2">
                        <a href="{{ url($app->url) }}" class="nounderline">
                            <div class="card text-dark" style="border-radius: 15px">
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

        @include('layouts.includes.announcements')

    </div>
@endsection





