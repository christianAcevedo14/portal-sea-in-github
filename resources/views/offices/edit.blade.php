@extends('layouts.app')

@section('top-menu')
    @include('layouts.includes.top_menu')
@endsection

<style>
    /*.card:hover {*/
    /*    border-color: #2d89f0;*/
    /*    box-shadow: 0px 0px 40px 0px rgba(0,0,0,0.1);*/
    /*}*/
    .nounderline {
        text-decoration: none !important
    }
</style>

@section('content')
    <div class="container">
        <div class="row">
            @if(session()->has('notification'))
                <div class="col-sm-5 offset-7">
                    <div class="alert alert-icon alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert"></button>
                        <i class="fe fe-trash-2 mr-2" aria-hidden="true"></i> {{ session()->get('notification') }}
                    </div>
                </div>
            @endif
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Documentos de {{ $office->name }}</h3>
                        <div class="card-options">
                            <a href="{{ route('documents.create', $office) }}" class="btn btn-sm  btn-pill btn-info">
                                <div class="d-inline-flex">
                                    <img src="/assets/images/plus-icon-png-white.png" style="height: 18px;"
                                         class="pt-1"><span
                                            class="pl-3 text-white" style="font-size:17px">Añadir documentos</span>
                                </div>
                            </a>
                            {{--                            <a href="{{ route('users.create') }}"><i class="fe fe-plus-circle"></i></a>--}}
                            {{--<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>--}}
                        </div>
                    </div>
                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
