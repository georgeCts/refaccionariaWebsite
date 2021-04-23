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

    <div class="productos-destacados">
        <div class="container-fluid w14">
            <div class="row m30 align-items-sm-center">
                <div class="col-12 col-sm-5 col-md-6"><h3 class="d-inline-block m30 mb-sm-0">ÁREAS <br> ESPECIALIZADAS</h3></div>
                <div class="col-12 col-sm-7 col-md-6 text-sm-right">
                    <a href="{{URL::to('/catalogos') }}" class="btn btn-blanco">CONOCE TODA LA LÍNEA DE PRODUCTOS <i class="fas fa-caret-right ml-2 ml-lg-3"></i></a>
                </div>
            </div>

            <div class="tab-content" id="productos-destacados">
                <div class="tab-pane fade show active" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                            <div class="contenedor-image text-center">
                                <img src="/images/productos/2neyQOeLSTDudM72n6Efg20JfmfpMVxSA2jfz1zm.png" alt="Ferretería">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Ferretería</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de  Ferretería</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                            <div class="contenedor-image text-center">
                                <img src="/images/productos/JHlBlMFko5DzkSGroJqHCDdBNGM9wMCbfX5D8rtN.png" alt="Plomería">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Plomería</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de Plomería</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                            <div class="contenedor-image text-center">
                                <img src="/images/productos/fHBOdeolYyNWsZzUcoDPNSyZFRA3c2jrxtZsR5t2.png" alt="Material Eléctrico">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Material Eléctrico</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de Material Eléctrico</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                            <div class="contenedor-image text-center">
                                <img src="/images/productos/YF1c3YAcRqI9yQsXJ6dJcdDLu1dLMpd1sc4FST3z.png" alt="Agroindustrial">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Agroindustrial</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de Equipo Agroindustrail</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="nav-6" role="tabpanel" aria-labelledby="nav-6-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                           <div class="contenedor-image text-center">
                                <img src="/images/productos/aXGI9DMGiFt9XuLG49eMBEHlsNNUkalBPUfZ0QZ1.png" alt="Iluminación">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Iluminación</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de iluminación</p>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade " id="nav-7" role="tabpanel" aria-labelledby="nav-7-tab">
                    <div class="row mt-sm-5 m30 align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-8 order-md-last">
                            <div class="contenedor-image text-center">
                                <img src="/images/productos/hrugtmBDCj8cWjbS7mHgycn7hVjnC4Xyid0TTmlw.png" alt="Tornillería">
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 order-md-first">
                            <h4 class="text-uppercase">Tornillería</h4>
                            <p>Contamos con la mejor variedad y disponibilidad  en productos de Tornillería</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown ml-auto mr-auto" id="nav-productos-destacados-movil">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Ferretería
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item active" href="">FERRETERíA</a>
                    <a class="dropdown-item " href="">PLOMERíA</a>
                    <a class="dropdown-item " href="">MATERIAL ELéCTRICO</a>
                    <a class="dropdown-item " href="">AGROINDUSTRIAL</a>
                    <a class="dropdown-item " href="">ILUMINACIóN</a>
                    <a class="dropdown-item " href="">TORNILLERíA</a>
                </div>
            </div>

            <nav id="nav-productos-destacados">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link text-uppercase active" id="nav-2-tab" data-toggle="tab" href="#nav-2" role="tab" aria-controls="nav-2" aria-selected="true">Ferretería</a>
                    <a class="nav-item nav-link text-uppercase" id="nav-3-tab" data-toggle="tab" href="#nav-3" role="tab" aria-controls="nav-3" aria-selected="true">Plomería</a>
                    <a class="nav-item nav-link text-uppercase" id="nav-4-tab" data-toggle="tab" href="#nav-4" role="tab" aria-controls="nav-4" aria-selected="true">Material Eléctrico</a>
                    <a class="nav-item nav-link text-uppercase" id="nav-5-tab" data-toggle="tab" href="#nav-5" role="tab" aria-controls="nav-5" aria-selected="true">Agroindustrial</a>
                    <a class="nav-item nav-link text-uppercase" id="nav-6-tab" data-toggle="tab" href="#nav-6" role="tab" aria-controls="nav-6" aria-selected="true">Iluminación</a>
                    <a class="nav-item nav-link text-uppercase" id="nav-7-tab" data-toggle="tab" href="#nav-7" role="tab" aria-controls="nav-7" aria-selected="true">Tornillería</a>
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
                    <a href="#mdCotizaciones" data-toggle="modal" class="d-inline-block">Cotiza con nosotros</a>
                </div>
            </div>
        </div>
    </div>

    <div class="seccion-madero">
        <div class="container-fluid w13">
            <div class="row align-items-md-center">
                <div class="col-12 col-md-6 m40 mb-md-0">
                    <h2 class="text-uppercase">Acerca de<br>Madero Refaccionaria</h2>
                    <p>Contamos con un inventario que supera los 149,000 productos siendo unos de los más amplios del sureste, estamos seguros que nosotros si tenemos la refacción que tu auto o camión necesita.</p>
                    <a href="{{URL::to('/nosotros') }}" class="btn btn-amarillo text-uppercase">Nuestra historia</a>
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h3>Encuentra todo lo que necesitas en un solo lugar y al mejor precio</h3>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
    $('#mdNewsletter').modal('show');
</script>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')