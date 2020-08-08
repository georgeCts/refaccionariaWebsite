@section('title', 'Inicio')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
@endsection

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

    <div class="banner-contacto">
        <div class="row">
            <div class="col-8 text-center" style="margin-top: 4%;">
                <span class="contacto-titulo">
                    NOSOTROS SI LA TENEMOS
                </span>
                <br />
                <p class="contacto-subtitulo">
                    Contamos con un inventario que supera los <span style="color: #18FD00">149,000</span> productos, siendo uno de los más amplios del sureste, 
                    estamos seguros que nosotros <span style="color: #18FD00">si</span> tenemos la refacción que tu auto o camión necesita.
                </p>

                <img src="/images/banner-contacto/019-boton-contactanos.png" style="width: 25%; margin-top: 20px" />
            </div>
            <div class="col-4">
                <img src="/images/banner-contacto/020-telefono.png" style="width: 65%; margin-top: 40px" />
            </div>
        </div>
    </div>

    <div class="banner-bienvenido">
        <div class="row">
            <div class="col-6 text-center">
                <img src="/images/banner-bienvenido/022-logo-slogan.png" style="width: 80%;" />
            </div>
            <div class="col-6">
                <img src="/images/banner-bienvenido/023-cajon-texto.png" class="caja-texto" />

                <div class="text-center" style="margin-top: 40px; margin-right: 80px;">
                    <span class="bienvenido-titulo">Bienvenido</span>
                    <p class="bienvenido-descripcion">
                        Somos una Empresa Yucateca líder en la comercialización de Refacciones Automotrices para vehículos ligeros y de 
                        carga pesada, que bajo las mejores prácticas comerciales genera soluciones eficientes para nuestros clientes.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="banner-productos">
        <div class="row">
            <div class="col text-center" style="margin-top: 30px;">
                <span class="banner-productos-title">REFACCIONES</span>
            </div>
        </div>
        
        <div class="productos-container">
            <div class="slider-productos">
                <div class="producto-item">
                    <img src="/images/banner-productos/027-frenos.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/banner-productos/028-suspension.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/banner-productos/029-motor.png" class="producto-image" />
                </div>

                <div class="producto-item">
                    <img src="/images/banner-productos/032-electrico.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/banner-productos/031-enfriamiento.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/banner-productos/030-colision.png" class="producto-image" />
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-productos').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                arrows: true,
            });

        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')