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
                Oficinas
            </h1>
        </div>

        <div class="row row-cards">
            @foreach($offices as $office)
            <div class="col-6 col-sm-4 col-lg-2">
                <a href="{{ route("offices.edit", $office) }}" class="nounderline">
                    <div class="card text-dark">
                        <div class="card-body p-5 text-center">
                            <div class="h1">
                                <th>    <span class="avatar"
                                          style="background-image: url({{($office->logo)}})"></span>
                                </th>                            </div>
                            <div class="text-muted">{{ $office->name }}</div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
                <div class="card-options">
                    <a href="{{ route('offices.create') }}" class="btn btn-sm  btn-pill btn-info">
                        <div class="d-inline-flexc">
                            <img src="/assets/images/plus-icon-png-white.png" style="height: 18px;"
                                 class="pt-1"><span
                                    class="pl-3 text-white" style="font-size:17px">Añadir oficinas</span>
                        </div>
                    </a>
                    {{--                            <a href="{{ route('users.create') }}"><i class="fe fe-plus-circle"></i></a>--}}
                    {{--<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>--}}
                </div>
        </div>
    </div>
@stop
