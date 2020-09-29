@section('title', 'Nosotros')

@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
@endsection

@section('content')
    <!-- ======= Pomociones Section ======= -->
    <section id="products" class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PROMOCIONES</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="slider-productos">
                <div class="producto-item">
                    <img src="/images/promociones/117-mobil.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/promociones/118-thre-five.png" class="producto-image" />
                </div>
            </div>
        </div>

        <div class="container">
            <div class="slider-productos">
                <div class="producto-item">
                    <img src="/images/promociones/117-mobil.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/promociones/118-thre-five.png" class="producto-image" />
                </div>
            </div>
        </div>
    </section><!-- End Promociones Section -->

@endsection

@section('scripts')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-productos').slick({
                dots: false,
                infinite: false,
                slidesToShow: 1,
                arrows: true,
                autoplay: true,
                autoplaySpeed: 3000,
                fade: true,
                cssEase: 'linear',
                mobileFirst: true,
            });

        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.PreFooter')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')