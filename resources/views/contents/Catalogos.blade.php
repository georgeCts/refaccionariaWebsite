@section('title', 'Categorías')

@section('content')
    <section class="productos">
        <div class="categorias">
            <div class="container-fluid w14 px-0">
                <div class="swiper-container swiper-categorias">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/lineaProducto.png')">
                            <div class="content text-center w-80">
                                <h3 class="text-uppercase m20">Frenos</h3>
                                <a href="{{URL::to('/catalogos/frenos') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza aquí</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/lineaProducto-01.jpg')">
                            <div class="content text-center w-80">
                                <h3 class="text-uppercase m20">Eléctrico</h3>
                                <a href="{{URL::to('/catalogos/electrico') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza aquí</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/lineaProducto-02.png')">
                            <div class="content text-center w-80">
                                <h3 class="text-uppercase m20">Suspensión</h3>
                                <a href="{{URL::to('/catalogos/suspension') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza aquí</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/lineaProducto-03.png')">
                            <div class="content text-center w-80">
                                <h3 class="text-uppercase m20">Colisión</h3>
                                <a href="{{URL::to('/catalogos/colision') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza aquí</a>
                            </div>
                        </div>

                        <div class="swiper-slide" style="background-image: linear-gradient(0deg, rgba(37,37,37,0.6) 0%, rgba(37,37,37,0.6) 100%), url('/images/productos/lineaProducto-04.png')">
                            <div class="content text-center w-80">
                                <h3 class="text-uppercase m20">Enfriamiento</h3>
                                <a href="{{URL::to('/catalogos/enfriamiento') }}" class="btn btn-blanco d-inline-block m20">ver catálogo</a>
                                <a href="#mdCotizaciones" data-toggle="modal" class="btn btn-amarillo d-inline-block">Cotiza aquí</a>
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
                        <a href="productos.html#mdCotizaciones" data-toggle="modal" class="d-inline-block">Cotiza Aquí</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="caracteristicas">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="wrapper"><img src="/images/caracteristicas/ubicacion.png" alt=""></div>
                    <p>Con más de 40 años <br> en la industria</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/delivery.png" alt="" class="ml-n3"></div>
                    <p>Envíos a toda la <br> República Mexicana</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/productos2.png" alt=""></div>
                    <p>Forman parte de <br> nuestro inventario</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/mesa_trabajo.png" alt=""></div>
                    <p>Catálogos en <br> línea, más rápido</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')