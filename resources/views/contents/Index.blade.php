@section('title', 'Inicio')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="initial">
        <div class="initial-slider">
            @foreach ($lstSliders as $item)
                <img src="{{Storage::url($item->file)}}" alt="{{$item->title}}" />
            @endforeach
        </div>
    </section><!-- End Hero -->

    <main id="main">
        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-center text-lg-left">
                        <h3>Nosotros si la tenemos</h3>
                        <p>
                            Contamos con un inventario que supera los <span>149,000</span> productos siendo unos de los 
                            más amplios del sureste, estamos seguros que nosotros <span>si</span> tenemos la refacción
                            que tu auto o camión necesita.
                        </p>

                        <div class="contact-box">
                            <span>CONTÁCTANOS</span>
                        </div>
                    </div>
                    <div class="col-lg-4 phone-container" style="position: absolute; right: 0;">
                        <img class="phone-image" src="/images/banner-contacto/020-telefono.png" style="position: relative;" />
                    </div>
                </div>
            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Welcome Section ======= -->
        <section id="welcome" class="welcome">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center">
                        <img src="/images/banner-bienvenido/022-logo-slogan.png" style="width: 80%;" />
                    </div>

                    <div class="col-lg-6 text-center">
                        <h3>Bienvenido</h3>
                        <p>
                            Somos una Empresa Yucateca líder en la comercialización de Refacciones Automotrices para vehículos ligeros y de 
                            carga pesada, que bajo las mejores prácticas comerciales genera soluciones eficientes para nuestros clientes.
                        </p>
                    </div>
                </div>
            </div>
        </section><!-- End Welcome Section -->

        <!-- ======= Products Section ======= -->
        <section id="products" class="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>REFACCIONES</h2>
                    </div>
                </div>
            </div>

            <div class="productos-container">
                <div class="slider-productos">
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-1.png" class="producto-image" />
                        </a>
                    </div>
        
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-2.png" class="producto-image" />
                        </a>
                    </div>
        
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-3.png" class="producto-image" />
                        </a>
                    </div>
    
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-4.png" class="producto-image" />
                        </a>
                    </div>
        
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-5.png" class="producto-image" />
                        </a>
                    </div>
        
                    <div class="producto-item">
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/slide-6.png" class="producto-image" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="row search">
                <div class="col-lg-6">
                    <img class="trucks-picture" src="/images/banner-productos/025-auto-camion.png" alt="Camión" />
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="search-container">
                        <h3>Búsqueda Avanzada</h3>
                        <p>
                            Encuentra las refacciones disponibles para la marca, modelo y versión
                             de tu vehículo.
                        </p>
                        <a href="{{URL::to('/productos') }}">
                            <img src="/images/banner-productos/026-boton-buscar.png" class="search-picture" />
                        </a>
                    </div>

                    <img class="engine-picture" src="/images/banner-productos/024-motor.png" />
                </div>
            </div>
        </section><!-- End Products Section -->

        <!-- ======= Brands Section ======= -->
        <section id="brands" class="brands">
            <div class="container brand-content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-center left-info">
                            <h3>Bienvenido</h3>
                            <p>
                                Nuestro compromiso es con la calidad, por eso hemos formado grandes alianzas comerciales con las marcas más 
                                importantes y de más alto prestigio en el mercado nacional e internacional, buscando siempre lo mejor.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-6 text-center mt-4">
                        <h3>MARCAS DE PRESTIGIO</h3>
                        <div class="principles-container">
                            <span>Seguridad, Confianza y Valor</span>
                        </div>
                    </div>
                </div>

                <div class="row brand-image-container">
                    @php $count = 0; @endphp
                    @foreach($_BRANDS as $item)
                        @if($count <= 2)
                            <div class="col-md-4 col-sm-4 text-center">
                                <img src="{{Storage::url($item->file)}}" class="img-responsive" alt="Responsive image" />
                                @php $count++; @endphp
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section><!-- End Brands Section -->
    </main><!-- End #main -->
@endsection

@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-productos').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.initial-slider').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                dots: true,
                autoplay: true,
            });
        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')