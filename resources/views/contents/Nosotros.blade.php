@section('title', 'Nosotros')

@section('content')
    <section class="nosotros">
        <div class="portada" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%), url('/images/nosotros/bg-nosotros.jpg')">
            <div class="w16 mr-auto ml-auto h-100">
                <div class="container-fluid w14 h-100">
                    <div class="row align-items-end h-100">
                        <div class="col-12 m30">
                            <h2 class="text-uppercase m30">Acerca de <br> madero refaccionarias</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="informacion">
            <div class="container-fluid w14">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-12 col-lg-6 text-center text-lg-left m30">
                        <h2 class="text-uppercase">Conoce un poco de los valores con los que hemos forjado una historia, 40 años de un servicio de calidad, pasión y compromiso por brindar más que soluciones.</h2>
                    </div>
                    <div class="col-12 col-md-10 col-lg-6">
                        
                        <p>
                            Somos una empresa yucateca líder en la comercialización de Refacciones Automotrices para vehículos ligeros y de carga pesada, 
                            que bajo las mejores prácticas comerciales genera soluciones seguras, rápidas pero sobre todo eficientes, brindándoles siempre 
                            productos nacionales e importados de gran tecnología y alta calidad a nuestros clientes.
                        </p>
                        <p>
                            Respaldados por 40 años de experiencia en la industria y más de 30 años de presencia en el mercado, somos especialistas en el 
                            Automotive Aftermarket (Mercado Postventa Automotriz) y por ello buscamos satisfacer las necesidades de nuestros consumidores con 
                            gran calidad y calidez humana.
                        </p>
                        <p>El trato amable, el precio justo y una actitud de servicio total nos define.</p>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="informacion--2" style="background-image: url('/images/nosotros/bg-manchas.png')">
            <div class="container-fluid w14">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-8 text-center">
                        <h3>Somos una empresa yucateca líder en la comercialización de Refacciones Automotrices para vehículos ligeros y de carga pesada.</h3>
                    </div>
                </div>
            </div>
        </div>

        
        <div class="mision-vision" style="background-image: url('/images/nosotros/bg-mapa.png')">
            <div class="container-fluid w16">
                <div class="row justify-content-center">
                    
                    <div class="col-12 col-md-12 col-lg-11">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-12 col-md-12">
                                        <img src="images/nosotros/sucursales.jpg" alt="Direccion" class="w-100 mb-sm-4 mb-lg-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="encuentra-todo"></div>

    <div class="informacion"></div>

    <div class="mv"></div>

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
                    <div class="wrapper"><img src="/images/caracteristicas/productos2.png" alt=""></div>
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

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')