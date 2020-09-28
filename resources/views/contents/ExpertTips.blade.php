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
                    <h2>EXPERT TIPS</h2>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="slider-productos">
                <div class="producto-item">
                    <img src="/images/tips/124.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/tips/125.png" class="producto-image" />
                </div>
    
                <div class="producto-item">
                    <img src="/images/tips/126.png" class="producto-image" />
                </div>

                <div class="producto-item">
                    <img src="/images/tips/127.png" class="producto-image" />
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
                infinite: true,
                slidesToShow: 3,
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