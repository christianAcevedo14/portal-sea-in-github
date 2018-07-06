@extends('layouts.app')

@section('menu')
    @include('layouts.main_menu')
@endsection

@section('content')
    <div class="card">
        <h5 class="card-header">Aplicaciones</h5>
        <div class="card-body">
            <ul>
                @foreach(auth()->user()->apps as $app)
                    <a class="btn btn-primary btn-lg btn-block" href="{{ url($app->url) }}">{{ $app->name }}</a>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
