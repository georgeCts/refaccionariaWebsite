@section('title', 'Categorías')

@section('content')
    <section class="productos">
        <div class="categorias">
            <div class="container-fluid w14 px-0">
                <div class="swiper-container swiper-categorias">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/VF5Ew7d8ImELYjsXLvS6CrOFphzF8yptM9TGI7Zs.jpeg')">
                            <div class="content text-center w-80">
                                <img src="/images/productos/jYxHMFDyePcT4pvQ2sjNrxm49Ub0oAPDiwaAGVKP.png" alt="" class="m20" />
                                <h3 class="text-uppercase m20">Frenos</h3>
                                <a href="{{URL::to('/catalogos/frenos') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza con nosotros</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/XmetkMa76OGJTn1sbo4F2k1S7OdPckzxsloSfYAC.jpeg')">
                            <div class="content text-center w-80">
                                <img src="/images/productos/oDmqCkBKSJ3wubTOzcKNc7n2ZnwjJ42f4YkQegXg.png" alt="" class="m20" />
                                <h3 class="text-uppercase m20">Eléctrico</h3>
                                <a href="{{URL::to('/catalogos/electrico') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza con nosotros</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/0bPVR2qGXGgjuZ2ovHk50tA2XvoHtAP83b1C4puH.jpeg')">
                            <div class="content text-center w-80">
                                <img src="/images/productos/CpnFrgg1iptXaVMAVPMwec8LDdwDip7syaZo9yDS.png" alt="" class="m20" />
                                <h3 class="text-uppercase m20">Suspensión</h3>
                                <a href="{{URL::to('/catalogos/suspension') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza con nosotros</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/57PPCPl8Wp0voglTsEcpB7alo28H2XK44qqGvFVv.jpeg')">
                            <div class="content text-center w-80">
                                <img src="/images/productos/24fVDSks9KW8WQvkuSZgSAwyD9UgZcel1e2bYWJ3.png" alt="" class="m20" />
                                <h3 class="text-uppercase m20">Colisión</h3>
                                <a href="{{URL::to('/catalogos/colision') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza con nosotros</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/R3zZrlDP5VQbXg3e7ulAKo3VxChI6oMIfwCyFbRk.jpeg')">
                            <div class="content text-center w-80">
                                <img src="/images/productos/n9BLvAVQGc7UfaJnaKSPky4JpNNA0aYMwA1aMFu2.png" alt="" class="m20" />
                                <h3 class="text-uppercase m20">Enfriamiento</h3>
                                <a href="{{URL::to('/catalogos/enfriamiento') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza con nosotros</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

        <div class="link-tienda-online">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 col-lg-7 col-xl-6 trapecio-top text-center text-uppercase">
                        <a href="productos.html#mdCotizaciones" data-toggle="modal" class="d-inline-block">Cotiza con nosotros</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')