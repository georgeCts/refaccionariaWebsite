@section('title', 'Expert Tips')

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

    {!! Form::open(['route' => 'update-tip', 'method' => 'PUT', 'files' => true]) !!}
        <input type="hidden" name="hddIdTip" value="{{$objTip->id}}" />

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modificar Tip</h4>
                        <p class="card-description">Información General</p>
                        
                        <div class="form-group">
                            <label for="title">Título</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Título del tip" value="{{$objTip->title}}" required />
                        </div>

                        <div class="form-group">
                            <label for="body">Descripción</label>
                            <textarea class="form-control" id="body" name="body" rows="5">{{$objTip->body}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="/panel/tips" role="button" class="btn btn-light">Cancelar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Imagen del tip</h4>
                                <p class="card-description">La imagen deben ser (700 x 700)</p>
                                <div class="form-group">
                                    <label>Imágen</label>
                                    <input type="file" name="image" class="form-control" />
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