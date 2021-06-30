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
                    Añadir Documento</h1>
            </div>
            <div class="col-12">
                <form action="{{ route('documents.store', $office) }}" enctype="multipart/form-data" class="card" method="post">
                    <div class="card-body">
                        <fieldset class="form-fieldset">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="name" class="form-label">Nombre:</label>
                                        <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" placeholder="Nombre del documento..."
                                               value="{{ old('name') }}">
                                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="description" class="form-label">Descripción:</label>
                                        <input type="text" name="description" class="form-control @if($errors->has('description')) is-invalid @endif" placeholder="Descripción del documento..."
                                               value="{{ old('description') }}">
                                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="file" class="form-label">Url:</label>
                                        <input type="text" name="file" class="form-control @if($errors->has('file')) is-invalid @endif" placeholder="Url del documento..."
                                               value="{{ old('file') }}">
                                        <div class="invalid-feedback">{{ $errors->first('file') }}</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="form-label">¿Es un documento descargable (.doc, .pdf, etc.)?</div>
                                        <div class="custom-controls-stacked">
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"
                                                       class="custom-control-input @if($errors->has('downloadable')) is-invalid @endif"
                                                       name="downloadable"
                                                       value="1" {{ (old('downloadable') == '1') ? 'checked' : '' }}>
                                                <span class="custom-control-label">Sí</span>
                                            </label>
                                            <label class="custom-control custom-radio custom-control-inline">
                                                <input type="radio"
                                                       class="custom-control-input @if($errors->has('downloadable')) is-invalid @endif"
                                                       name="downloadable"
                                                       value="0" {{ (old('downloadable') == '0') ? 'checked' : '' }}>
                                                <span class="custom-control-label">No</span>
                                            </label>
                                            <div class="is-invalid"
                                                 style="color:#cd201f; font-size: 87.5%;">{{ $errors->first('retired') }}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ route('documents.index', [$office]) }}" class="btn btn-secondary"
                           onclick="return confirm('¿Está seguro que desea salir? Perderá toda la información no guardada.');">Cancelar</a>
                        <span class="m-1"></span>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@stop
