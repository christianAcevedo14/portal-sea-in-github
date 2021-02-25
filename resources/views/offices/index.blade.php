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
        @if(auth()->user()->title_id === 1)
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('offices.create') }}" class="btn btn-sm btn-pill btn-info m-2 float-right">
                     <span class="text-white" style="font-size:17px"><i
                             class="fe fe-plus-circle pr-1"></i>Crear Oficina</span>
                    </a>
                </div>
            </div>
        @endif
        <div class="form-control p-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="header">
                        Oficinas
                    </h1>
                </div>
            </div>
            <div class="row row-cards text-center align-content-center">
                @foreach($offices as $office)
                    <div class="col-sm-6 col-md-3 col-lg-2">
                        <a href="{{ route("documents.index", $office) }}" class="nounderline">
                            <div class="card text-dark">
                                <div class="card-status bg-blue-light"></div>
                                <div class="card-body p-5 text-center">
                                    <span class="avatar"
                                          style="background-image: url({{($office->logo)}}); width: 5em; height: 5em"></span>
                                    <h4 class="text-muted mt-5">{{ $office->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop
