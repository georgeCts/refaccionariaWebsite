@section('title', 'Inicio')

@section('content')
    <div class="slider-principal">
        <div class="container-fluid w16 p-0">
            <div class="swiper-container swiper-principal">
                <div class="swiper-wrapper">
                    @foreach ($lstSliders as $item)
                        <div class="swiper-slide">
                            <div class="bg" style="background-image: url('{{Storage::url($item->file)}}')">
                                <img src="images/blank.gif" alt="Mascara movil" class="d-sm-none">
                                <img src="images/blank-rect.png" alt="Mascara tablet" class="d-none d-sm-block d-lg-none">
                                <img src="images/blank-slide-principal.png" alt="Mascara desk" class="d-none d-lg-block">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
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
                    <p>Envíos a todo <br>el sureste</p>
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

    <div class="productos-destacados">
        <div class="container-fluid w14">
            <div class="row m30 align-items-sm-center">
                <div class="col-12 col-sm-5 col-md-6"><h3 class="d-inline-block m30 mb-sm-0"> <br> Categorías</h3></div>
                <div class="col-12 col-sm-7 col-md-6 text-sm-right">
                    <a href="{{URL::to('/catalogos') }}" class="btn btn-blanco">CATÁLOGOS<i class="fas fa-caret-right ml-2 ml-lg-3"></i></a>
                </div>
            </div>

            <div class="tab-content" id="productos-destacados">
                @foreach ($lstCategories as $index => $item)
                    <div class="tab-pane fade {{$index == 0 ? 'show active' : ''}}" id="nav-{{$item->id}}" role="tabpanel" aria-labelledby="nav-{{$item->id}}-tab">
                        <div class="row mt-sm-5 m30 align-items-md-center">
                            <div class="col-12 col-md-6 col-lg-8 order-md-last">
                                <div class="contenedor-image text-center">
                                    <img src="{{Storage::url($item->file)}}" alt="{{$item->name}}" />
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 order-md-first">
                                <h4 class="text-uppercase">{{$item->name}}</h4>
                                <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="dropdown ml-auto mr-auto" id="nav-productos-destacados-movil">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Colisión
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    @foreach ($lstCategories as $index => $item)
                        <a class="dropdown-item {{$index == 0 ? 'active' : ''}}" href="">{{$item->name}}</a>
                    @endforeach
                </div>
            </div>

            <nav id="nav-productos-destacados">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    @foreach ($lstCategories as $index => $item)
                        <a class="nav-item nav-link text-uppercase {{$index == 0 ? 'active' : ''}}" id="nav-{{$item->id}}-tab" data-toggle="tab" href="#nav-{{$item->id}}" role="tab" aria-controls="nav-{{$item->id}}" aria-selected="true">{{$item->name}}</a>
                    @endforeach
                </div>
            </nav>
        </div>
    </div>

    <div class="marcas">
        <div class="container-fluid w16">
            <div class="row justify-content-center align-items-md-center">
                <div class="col-12 col-md-10 order-md-2 m30 mb-md-0">
                    <div class="swiper-container swiper-marcas-principal">
                        <div class="swiper-wrapper">
                            @foreach ($_BRANDS as $item)
                                <div class="swiper-slide">
                                    <div class="card">
                                        <a href="#">
                                            <div class="card-body">
                                                <img src="{{Storage::url($item->file)}}" alt="" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-1 order-md-1 text-center text-md-right">
                    <img src="/images/marca-arrow-prev.svg" alt="" class="prev">
                </div>
                <div class="col-3 col-md-1 order-md-3 text-center text-md-left">
                    <img src="/images/marca-arrow-next.svg" alt="" class="next">
                </div>
            </div>
        </div>
    </div>

    <div class="link-tienda-online">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7 col-xl-6 trapecio-top text-center text-uppercase">
                    <a href="#mdCotizaciones" data-toggle="modal" class="d-inline-block">Cotiza aquí</a>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion-madero">
        <div class="container-fluid w13">
            <div class="row align-items-md-center">
                <div class="col-12 col-md-6 m40 mb-md-0">
                    <h2 class="text-uppercase">Acerca de<br>Madero Refaccionaria</h2>
                    <p>Contamos con un inventario que supera los 100,000 productos siendo unos de los más amplios del sureste, estamos seguros que nosotros si tenemos la refacción que tu auto o camión necesita.</p>
                    <a href="{{URL::to('/nosotros') }}" class="btn btn-amarillo text-uppercase">Nuestra historia</a>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h3>En auto y camion, la mejor opción nacionales e importados</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    //$('#mdNewsletter').modal('show');
</script>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')