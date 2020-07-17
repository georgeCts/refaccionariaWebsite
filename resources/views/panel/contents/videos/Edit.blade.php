@section('title', 'Vídeos')

@section('content')
    @if(Session::has('error_message'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">{{ Session::get('error_title' )}}</h4>
                    <p>{{ Session::get('error_message' )}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    {!! Form::open(['route' => 'update-video', 'method' => 'PUT']) !!}
        <input type="hidden" name="hddPkVideo" value="{{$objVideo->pk_video}}" />

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modificar V&iacute;deo</h4>
                        <p class="card-description">Información General</p>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txtTitle">Título</label>
                                    <input type="text" class="form-control" id="txtTitle" name="txtTitle" value="{{$objVideo->title}}" placeholder="Información acerca del vídeo" required />
                                </div>  
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="txtCodigo">Código del vídeo</label>
                                    <input type="text" class="form-control" id="txtCodigo" name="txtCodigo" value="{{$objVideo->url_video}}" placeholder="https://www.youtube.com/watch?v=(CODIGO)" required />
                                </div>  
                            </div>
                        </div>
                                         
                        
                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <button class="btn btn-light">Cancelar</button>                    
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Estatus</h4>
                                <p class="card-description">Selecciona el estatus que tendrá la publicación al ser creada</p>

                                <div class="form-group">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if($objVideo->status != "DRAFT")
                                                <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus1" value="PUBLISHED" checked> Publicado
                                            @else
                                                <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus1" value="PUBLISHED"> Publicado
                                            @endif
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if($objVideo->status != "PUBLISHED")
                                                <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus2" value="DRAFT" checked> Borrador
                                            @else
                                                <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus2" value="DRAFT"> Borrador
                                            @endif
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {

        });        
    </script>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')