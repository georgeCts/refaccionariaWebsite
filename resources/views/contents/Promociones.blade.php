@section('title', 'Promociones')

@section('styles')
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/slick/slick-theme.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="bolsa-trabajo">
        <div class="portada">
            <div class="container-fluid w13">
                <h3 class="text-uppercase">Promociones</h3>
            </div>
        </div>

        <div class="row mt-5 slider-promociones text-center">
            @foreach ($lstPromotions as $item)
                <div class="promocion-item">
                    <img src="{{Storage::url($item->file)}}" class="promocion-image promos" />
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-promociones').slick({
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

@include('components.Header')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')