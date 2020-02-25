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
        <div class="row row-cards">
            <div class="col-sm-12">
                <form action="{{ route('documents.store', $office) }}" enctype="multipart/form-data" class="card" method="post">
                    <div class="card-header">
                        <h3 class="card-title">Añadir documento</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nombre de documento" value="{{ old('name') }}">
                                </div>
                            </div>

                            @if ($errors->has('name'))
                                <strong>{{ $errors->first('name') }}</strong>
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea type="text" rows="4" cols="150" name="description" placeholder="Descripcion" value="{{ old('description') }}">
                                    </textarea>
                                </div>
                            </div>

                            @if ($errors->has('description'))
                                <strong>{{ $errors->first('description') }}</strong>
                            @endif

                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <span class="form-label"> documento </span>
                                    <input type="file" name="file" class="form-control-file" placeholder="documento" value="{{ old('file') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer text-right">
                        <a href="{{ route('offices.show', $office_class = $office) }}" class="btn btn-warning"
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
