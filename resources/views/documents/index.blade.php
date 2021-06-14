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
                @if(session()->has('notification'))
                    <div class="alert alert-icon alert-success alert-dismissible float-right">
                        <button type="button" class="close" data-dismiss="alert"></button>{{ session()->get('notification') }}
                    </div>
                @endif
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-9 col-md-8 col-sm-12">
                                <h1 class="page-header">
                                    <a href="{{ route('offices.index') }}" class="mr-2"><i
                                            class="fe fe-arrow-left-circle"></i></a>
                                    {{ $office->name }}
                                    <span class="avatar ml-2" style="background-image: url({{($office->logo)}})"></span>
                                </h1>
                                <div class="row">
                                    <div class="col-12">
                                        <h6 class="ml-6">{{ $office->description }}</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-12">
                                @if(auth()->user()->title_id === 1 || auth()->user()->title_id === 4)
                                <a href="{{ route('offices.edit', [$office]) }}" class="btn btn-sm btn-pill btn-primary mt-2 float-right">
                                    <span class="text-white" style="font-size:17px"><i
                                            class="fe fe-edit pr-1"></i>Editar</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Documentos</h3>
                        @if(auth()->user()->title_id === 1 || auth()->user()->title_id === 4)
                        <div class="card-options">
                            <a href="{{ route('documents.create', $office) }}" class="btn btn-sm  btn-pill btn-info">
                                    <span class="text-white" style="font-size:17px"><i
                                            class="fe fe-plus-circle pr-1"></i>Añadir</span>
                            </a>
                        </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="documentsTable">
                                <thead>
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripcion</th>
                                    @if(auth()->user()->title_id === 1 || auth()->user()->title_id === 4)
                                    <th scope="col">Acciones</th>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($documents->where('office_id',$office->id) as $document)
                                    <tr>
                                        <td><a href="{{ $document->file }}" target="_blank">
                                                <i class="fe fe-file mr-1"></i>
                                                {{ $document->name }}
                                            </a>
                                        </td>
                                        <td>{{ $document->description }}</td>
                                        @if(auth()->user()->title_id === 1 || auth()->user()->title_id === 4)
                                        <td>
                                            {{--                                        <a href="{{ $document->file }}" role="button" class="btn btn-info btn-pill"--}}
                                            {{--                                           target="_blank">--}}
                                            {{--                                            <i class="fa fa-download"></i>--}}
                                            {{--                                        </a>--}}

                                            <a href="{{ route('documents.edit', [$office,$document]) }}"
                                               class="btn btn-sm btn-pill btn-primary" title="Editar"><i
                                                    class="fe fe-edit"></i></a>
                                            <br>
                                            <form action="{{ route('documents.destroy', [$office,$document]) }}"
                                                  method="post" class="w-5" title="Borrar"
                                                  onsubmit="return confirm('¿Está seguro que desea eliminar el documento?');">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete" class="w-0">
                                                <button class="btn btn-sm btn-pill btn-danger"><i
                                                        class="fe fe-trash-2"></i></button>
                                            </form>
                                        </td>
                                        @endif
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('custom-scripts')
<script>
    $(document).ready(function () {
        $('#documentsTable').DataTable(dtOpts);
    });
</script>
@endsection
