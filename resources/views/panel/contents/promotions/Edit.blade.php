@section('title', 'Promociones/Ofertas')

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

    {!! Form::open(['route' => 'update-promotion', 'method' => 'PUT', 'files' => true]) !!}
        <input type="hidden" name="hddIdPromotion" value="{{$objPromotion->id}}" />

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modificar promoción/oferta</h4>
                        <p class="card-description">Información General</p>
                        
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título de la promoción u oferta" value="{{$objPromotion->title}}" required />
                        </div>

                        <div class="form-group">
                            <label for="body">Descripción</label>
                            <textarea class="form-control" id="body" name="body" rows="5">{{$objPromotion->body}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="/panel/promociones" role="button" class="btn btn-light">Cancelar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Imagen de la oferta/promoción</h4>
                                <p class="card-description">La imagen deben ser (1600 x 900)</p>
                                <div class="form-group">
                                    <label>Imágen</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>

                                <hr />

                                <h4 class="card-title">Estatus</h4>
                                <p class="card-description">Selecciona el estatus que tendrá la publicación.</p>

                                <div class="form-group">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if($objPromotion->status == 'PUBLISHED')
                                                <input type="radio" class="form-check-input" name="status" value="PUBLISHED" checked> Publicado
                                            @else
                                                <input type="radio" class="form-check-input" name="status" value="PUBLISHED"> Publicado
                                            @endif
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if($objPromotion->status == 'DRAFT')
                                                <input type="radio" class="form-check-input" name="status" value="DRAFT" checked> Borrador
                                            @else
                                                <input type="radio" class="form-check-input" name="status" value="DRAFT"> Borrador
                                            @endif
                                        </label>
                                    </div>
                                </div>

                                <hr />

                                <h4 class="card-title">Tipo</h4>
                                <p class="card-description">Selecciona el tipo de publicación.</p>

                                <div class="form-group">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if($objPromotion->is_promotion)
                                                <input type="radio" class="form-check-input" name="is_promotion" value="true" checked> Promoción
                                            @else
                                                <input type="radio" class="form-check-input" name="is_promotion" value="true"> Promoción
                                            @endif
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            @if(!$objPromotion->is_promotion)
                                                <input type="radio" class="form-check-input" name="is_promotion" value="false" checked> Oferta
                                            @else
                                                <input type="radio" class="form-check-input" name="is_promotion" value="false"> Oferta
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

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')