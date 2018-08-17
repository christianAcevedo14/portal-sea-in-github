@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

@section('content')
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                Aplicaciones
            </h1>
        </div>

        <div class="row row-cards">
            @foreach(auth()->user()->apps as $app)
                <div class="col-6 col-sm-4 col-lg-2">
                    <a href="{{ url($app->url) }}">
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
