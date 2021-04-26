@section('title', 'Nosotros')

@section('content')
    <section class="nosotros">
        <div class="portada" style="background-image: linear-gradient(0deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%), url('/images/seo/DHxapFIsi1FXb8L5jYlEulyTDCpwmEYHSaWEJmFs.jpeg')">
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
                        <h2 class="text-uppercase">&quot;ENCUENTRA TODO LO QUE NECESITAS EN UN SOLO LUGAR Y AL MEJOR PRECIO”</h2>
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
                        <h3>Nosotros le garantizamos que usted encontrará en nuestros almacenes todos los productos que necesita.</h3>
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
                                    <div class="col-12 col-md-6 col-lg-5 m20">
                                        
                                        <h2>MATRIZ MÉRIDA YUC.</h2>
                                        <img src="images/footer/direccion.svg" alt="Direccion" class="w-100 direccion mb-sm-4 mb-lg-0">
                                    </div>
                                    <div class="col-12 col-md-6 text-center">
                                        <img src="/images/seo/4b9RIaTfn8JBa305AbRVju7kHgpy7rb5P2URBItk.svg" alt="Mapa" class="mapa w-100 m20">
                                        
                                        <div class="text-left">
                                            <h4>COBERTURA<br>YUCATÁN, QUINTANA ROO,<br>CAMPECHE, TABASCO, CHIAPAS,<br>VERACRUZ Y OAXACA</h4>
                                        </div>
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
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')