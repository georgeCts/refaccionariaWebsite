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

    <div class="caracteristicas">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="wrapper"><img src="/images/caracteristicas/ubicacion.png" alt=""></div>
                    <p>Con más de 40 años <br> en el mercado</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/delivery.png" alt="" class="ml-n3"></div>
                    <p>Llegamos a toda la <br> República Mexicana</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/productos.png" alt=""></div>
                    <p>Forman parte de <br> nuestros productos</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/mesa_trabajo.png" alt=""></div>
                    <p>Catálogos en <br> línea, más rápido</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-promociones').slick({
                dots: true,
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