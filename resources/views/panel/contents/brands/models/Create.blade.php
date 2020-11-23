@section('title', 'Modelos')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        @if(Session::has('error_message'))
            <div class="alert alert-danger col-md-12 col-sm-12 alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('error_title' )}}!</strong> {{ Session::get('error_message' )}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>

    {!! Form::open(['route' => 'new-model', 'method' => 'POST']) !!}
        <input type="hidden" name="hddIdBrand" value="{{$objBrand->id}}" />
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear Modelo de la marca {{$objBrand->name}}</h4>
                        <p class="card-description">El modelo creado se mostrará en el catálogo de productos de la página web</p>
                        
                        <div class="form-group">
                            <label for="txtTitle">Nombre</label>
                            <input type="text" class="form-control" id="txtName" name="txtName" placeholder="Nombre del modelo" />
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="/panel/brands/{{$objBrand->id}}/models" role="button" class="btn btn-light">Cancelar</a>
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