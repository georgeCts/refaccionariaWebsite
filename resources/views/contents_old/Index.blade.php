@section('title', 'Inicio')

@section('stylesheets')
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/slick/slick-theme.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="initial">
        <div class="initial-slider">
            @foreach ($lstSliders as $item)
                <img src="{{Storage::url($item->file)}}" alt="{{$item->title}}" />
            @endforeach
        </div>
        <div class="slick-slider-dots"></div>

        <img src="/images/sparkie-sello.png" class="sparkie-image" />
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

        <!-- ======= Products Section ======= -->
        <section id="products" class="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>LINEA DE PRODUCTOS</h2>
                    </div>
                </div>
            </div>

            <div class="productos-container">
                <div class="slider-productos">
                    @foreach ($lstCategories as $item)
                        <div class="producto-item">
                            <img src="{{Storage::url($item->file)}}" class="producto-image product-link" data-slug="{{$item->slug}}" />
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="row brand-image-container">
                @foreach($_BRANDS as $item)
                    <div class="col-md-4 col-sm-4 text-center">
                        <img src="{{Storage::url($item->file)}}" class="img-responsive" alt="Responsive image" />
                    </div>
                @endforeach
            </div>

            <div class="row search mt-4">
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

                    <img class="engine-picture" src="/images/banner-productos/024-Motor.png" />
                </div>
            </div>
        </section><!-- End Products Section -->
    </main><!-- End #main -->
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('.initial-slider').slick({
                dots: true,
                arrows: false,
                infinite: true,
                autoplay: true,
                speed: 300,
                appendDots: $('.slick-slider-dots'),
            });

            $('.slider-productos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                arrows: true,
                infinite: false,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ]
            });

            $('.brand-image-container').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
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
            })

            $('.product-link').click(function(e) {
                var element = e.target;
                var slug = element.getAttribute('data-slug');

                console.log(slug);
                window.location = `https://${window.location.host}/categorias/${slug}`;
            });

            $('.contact-box').click(function() {
               // window.location = `https://${window.location.host}/contacto`;
            });
        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')