@section('title', 'Inicio')

@section('content')
    <div class="content-slider">
        <img class="" src="/images/almacen.jpg" style="width: 100%; height: 843px;" />

        <img src="/images/slider-seccion/014-sello-garantia.png" style="position: absolute; top: 430px; left: 10px; z-index: 21; width: 250px" />
        <img src="/images/slider-seccion/015-sparkie.png" style="position: absolute; top: 410px; left: 10px; z-index: 21; width: 400px" />
        <img src="/images/slider-seccion/013-fondo.png" style="position: absolute; top: 60px; left: -1px; z-index: 20;" />

        <span class="slider cintillo-negro" style="position: absolute; top: 618px; right: 65px; z-index: 22;">Más Información</span>
        <span class="slider cintillo-blanco" style="position: absolute; top: 645px; right: 50px; z-index: 22;">SURTIDO AMPLIO</span>
        
        <img src="/images/slider-seccion/018-cintillo-derecho-negro.png" style="position: absolute; top: 620px; right: 35px; z-index: 21; width: 15%" />
        <img src="/images/slider-seccion/017-cintillo-derecho-blanco.png" style="position: absolute; top: 650px; right: 30px; z-index: 20; width: 20%" />
        <img src="/images/slider-seccion/016-pie-banner.png" style="position: absolute; top: 790px; right: 0px; z-index: 19; width: 75%" />
    </div>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')