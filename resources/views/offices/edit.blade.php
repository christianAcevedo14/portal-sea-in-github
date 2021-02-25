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
            <div class="col-12">
                <h1 class="page-header"><a href="{{ route('documents.index', [$office]) }}" class="mr-2"><i class="fe fe-arrow-left-circle"></i></a>
                    Editar Oficina</h1>
            </div>
            <div class="col-sm-12">
                <form action="{{ route('offices.update', [$office]) }}" enctype="multipart/form-data" class="card" method="post">
                    <div class="card-body">
                        <fieldset class="form-fieldset">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre:</label>
                                        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nombre de oficina..." value="{{ old('name' , $office->name) }}">
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">Descripción:</label>
                                        <input type="text" name="description" class="form-control @if($errors->has('description')) is-invalid @endif" placeholder="Descripcion de oficina..." value="{{ old('description' , $office->description) }}">
                                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="file" class="form-label">Logo:</label>
                                        <input type="file" name="logo" class="form-control-file" placeholder="Logo" value="{{ old('logo') }}">
                                        @if ($errors->has('logo'))
                                            <p class="text-danger">{{ $errors->first('logo') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('offices.index') }}" class="btn btn-secondary"
                           onclick="return confirm('¿Está seguro que desea salir? Perderá toda la información no guardada.');">Cancelar</a>
                        <span class="m-1"></span>
                        <button type="submit" class="btn btn-success" disabled>Actualizar</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@stop
