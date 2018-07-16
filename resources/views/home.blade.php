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
                <div class="col-sm-6 col-lg-3">
                    <div class="card p-3">
                        <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                      <i class="fa fa-chevron-right"></i>
                    </span>
                            <div>
                                <h4 class="m-0"><a href="{{ url($app->url) }}">{{$app->name}}</a></h4>
                                <small class="text-muted">{{ url($app->url) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
