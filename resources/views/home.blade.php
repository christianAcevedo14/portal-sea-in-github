@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <ul>
                        @foreach(auth()->user()->apps as $app)
                            <a class="btn btn-primary btn-lg btn-block" href="{{ url($app->url) }}">{{ $app->name }}</a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
