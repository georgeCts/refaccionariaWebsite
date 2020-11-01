@section('title', 'Productos')

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

    {!! Form::open(['route' => 'update-product', 'method' => 'PUT', 'files' => true]) !!}
        <input type="hidden" name="hddIdProduct" value="{{$objProduct->id}}" />

        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modificar producto</h4>
                        <p class="card-description">El producto modificado se mostrará en el catálogo de productos de la página web</p>
                        
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del producto" value="{{$objProduct->name}}" required />
                        </div>

                        <div class="form-group">
                            <label for="part_number">SKU</label>
                            <input type="text" class="form-control" id="part_number" name="part_number" placeholder="Número de parte" value="{{$objProduct->part_number}}" required />
                        </div>

                        <div class="form-group">
                            <label for="model">Modelo</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Modelo del producto" value="{{$objProduct->model}}" />
                        </div>

                        <div class="form-group">
                            <label for="brand">Marca</label>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca del producto" value="{{$objProduct->brand}}" required />
                        </div>

                        <div class="form-group">
                            <label for="year">Año</label>
                            <input type="text" class="form-control" id="year" name="year" placeholder="Año compatible" value="{{$objProduct->year}}" />
                        </div>

                        <div class="form-group">
                            <label for="engine">Motor</label>
                            <input type="text" class="form-control" id="engine" name="engine" placeholder="Motor compatible" value="{{$objProduct->engine}}" />
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{!!$objProduct->description!!}</textarea>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="/panel/productos" role="button" class="btn btn-light">Cancelar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Imagen del producto</h4>
                                @if ($objProduct->file != null)
                                    <img src="{{Storage::url($objProduct->file)}}" alt="producto" style="width: 250px;" />
                                @endif
                                <p class="card-description">La imagen deben ser (526 x 526)</p>
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