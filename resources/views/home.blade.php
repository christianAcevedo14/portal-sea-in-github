@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

<style>
    .card:hover {
        border-color: #2d89f0;
        box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.1);
    }
    .nounderline {
        text-decoration: none !important
    }
</style>

@section('content')

    <div class="container">
        <div class="page-header">
            <h1>
                Aplicaciones
            </h1>
        </div>

        <div class="row row-cards">
            @foreach(auth()->user()->apps as $app)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ url($app->url) }}" class="nounderline">
                        <div class="card text-dark">
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
@endsection





