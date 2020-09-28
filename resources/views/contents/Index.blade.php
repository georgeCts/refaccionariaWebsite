@section('title', 'Inicio')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel banners slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slide-1 active"></div>
                <div class="carousel-item slide-2"></div>
                <div class="carousel-item slide-3"></div>
                <div class="carousel-item slide-4"></div>
                <div class="carousel-item slide-5"></div>
                <div class="carousel-item slide-6"></div>
                <div class="carousel-item slide-7"></div>
                <div class="carousel-item slide-8"></div>
                <div class="carousel-item slide-9"></div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
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
                            Contamos con un inventario que supera los <span>149,000</span> productos siendo unos de de los más
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
                        <img src="/images/banner-productos/slide-1.png" class="producto-image" />
                    </div>
        
                    <div class="producto-item">
                        <img src="/images/banner-productos/slide-2.png" class="producto-image" />
                    </div>
        
                    <div class="producto-item">
                        <img src="/images/banner-productos/slide-3.png" class="producto-image" />
                    </div>
    
                    <div class="producto-item">
                        <img src="/images/banner-productos/slide-4.png" class="producto-image" />
                    </div>
        
                    <div class="producto-item">
                        <img src="/images/banner-productos/slide-5.png" class="producto-image" />
                    </div>
        
                    <div class="producto-item">
                        <img src="/images/banner-productos/slide-6.png" class="producto-image" />
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
                        <img src="/images/banner-productos/026-boton-buscar.png" class="search-picture" />
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
                    <div class="col-md-4 col-sm-4 text-center">
                        <img src="/images/proveedores/namcco.png" class="img-responsive" alt="Responsive image" />
                    </div>

                    <div class="col-md-4 col-sm-4 text-center">
                        <img src="/images/proveedores/gonher.png" class="img-responsive" alt="Responsive image" />
                    </div>

                    <div class="col-md-4 col-sm-4 text-center">
                        <img src="/images/proveedores/soportes-star.png" class="img-responsive" alt="Responsive image" />
                    </div>
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
        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')