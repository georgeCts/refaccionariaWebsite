@section('title', 'Detalle')

@section('content')
    <section class="catalogo">
        <div class="portada">
            <div class="container-fluid w14">
                <div class="row align-items-center">
                    <div class="col-12 col-md-10 text-center text-md-left">
                        <h1 class="text-uppercase mb-md-0">{{$objCategory->name}}</h1>
                        <h4 class="text-uppercase w-lg-70">"Encuentra todo lo que necesitas en un solo lugar y al mejor precio"</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="all-catalogos">
            <div class="container-fluid w14 w-95">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-12 col-lg-12 col-xl-12 listado-catalogos">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb px-0 mb-0">
                            <li class="breadcrumb-item"><a href="{{URL::to('/catalogos') }}">Línea de Productos</a></li>
                            <li class="breadcrumb-item"><a href="#">{{$objCategory->name}}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Catálogos</li>
                            </ol>
                        </nav>

                        <div class="m30"></div>

                        <div class="row">
                            @foreach ($lstCatalogs as $item)
                                <div class="col-12 col-md-4 col-lg-4 text-center m30">
                                    <div class="bg bg-size-contain mx-auto m20" style="background-image: url({{Storage::url($item->file)}})">
                                        <img src="https://www.fernandez.com.mx/images/catalogo/1.jpg" alt="Catálogo de productos marca Cadena">
                                    </div>
                                    <h3 class="text-uppercase m20">{{$item->name}}</h3>
                                    <a href="{{Storage::url($item->pdf)}}" target="_blank" class="btn btn-amarillo text-uppercase">Descargar</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')