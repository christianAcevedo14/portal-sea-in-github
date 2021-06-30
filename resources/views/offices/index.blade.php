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
        <div class="row">
            <div class="col-lg-9 col-sm-12">
                <h2 class="page-header">
                    Oficinas y Documentos
                </h2>
            </div>
            <div class="col-lg-3 col-sm-12 text-center">
                @if(auth()->user()->title_id === 1 || auth()->user()->title_id === 4)
                <a href="{{ route('offices.create') }}" class="btn btn-sm btn-pill btn-info m-2 mt-5 w-75">
                     <span class="text-white" style="font-size:17px"><i
                             class="fe fe-plus-circle pr-1"></i>Crear Oficina</span>
                </a>
                @endif
            </div>
        </div>
        <div class="form-control p-5 mb-5">
            <div class="row row-cards text-center align-content-center">
                @foreach($offices as $office)
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="{{ route("documents.index", $office) }}" class="nounderline">
                            <div class="card text-dark">
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
