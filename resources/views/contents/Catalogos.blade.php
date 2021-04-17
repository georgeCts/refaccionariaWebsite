@section('title', 'Catalogos')

@section('content')
    <section class="catalogos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>{{$objCategory->name}}</h2>
                </div>
            </div>
            
            <div class="row listado">
                @foreach ($lstCatalogs as $item)
                    <div class="col-12 col-md-4 col-lg-4 text-center mb-3">
                        <div class="img-catalog" style="background-image: url({{Storage::url($item->file)}})">
                            <img src="{{Storage::url($item->file)}}" alt="">
                        </div>

                        <h3>{{$item->name}}</h3>
                        <a href="{{Storage::url($item->pdf)}}" target="_blank" class="btn btn-verde text-uppercase">Descargar</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.PreFooter')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')