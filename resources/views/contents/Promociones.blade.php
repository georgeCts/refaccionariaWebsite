@section('title', 'Promociones y ofertas')

@section('stylesheets')
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/slick/slick-theme.css') }}" rel="stylesheet" />
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
                @foreach ($lstPromotions as $item)
                    <div class="producto-item">
                        <img src="{{Storage::url($item->file)}}" class="producto-image promos" />
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container">
            <div class="slider-productos">
                @foreach ($lstOffers as $item)
                    <div class="producto-item">
                        <img src="{{Storage::url($item->file)}}" class="producto-image promos" />
                    </div>
                @endforeach
            </div>
        </div>
    </section><!-- End Promociones Section -->

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
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