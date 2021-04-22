@section('components.Footer')
    <div class="caracteristicas">
        <div class="container">
            <div class="row text-center">
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/1.svg" alt="" class="ml-n3"></div>
                    <p>Llegamos a toda la <br> República Mexicana</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/2.svg" alt=""></div>
                    <p>Forman parte de <br> nuestros productos</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/3.svg" alt=""></div>
                    <p>Compras en <br> línea, más rápido</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="wrapper"><img src="/images/caracteristicas/4.svg" alt=""></div>
                    <p>Con más de 30 años <br> en el mercado</p>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container text-center">
            <form action="https://fernandez.com.mx/admin/boletin/store" method="POST" class="needs-validation" novalidate>
                <input type="hidden" name="_token" value="0X5hezWrAfzANxIydq0F6WH3OcUAMS9gQKL8h8uB">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 m20"><h3 class="text-uppercase">Suscríbete a nuestro BOLETÍN</h3></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="name" placeholder="Nombre" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="email" name="email" placeholder="Correo" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="estado" placeholder="Estado" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 text-left"><button class="btn pr-2 text-uppercase" type="submit">Suscribirme <img src="images/send.svg" alt="" class="ml-4"></button></div>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <div class="container-fluid w14">
            <div class="row align-items-lg-center">
                <div class="col-12 col-sm-6 col-lg-4 m30 text-center">
                    <img src="images/footer/direccion.svg" alt="Direccion" class="w-100 logo mb-sm-4 mb-lg-0">
                    <div class="d-none d-sm-block d-lg-none mt-sm-1">
                        <ul class="redes mt-sm-3">
                            <li><a href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/maderorefaccionarias.madero" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/companiafernandez/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                        <a href="#" class="aviso d-inline-block mt-sm-1">Aviso de privacidad</a>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-5 m30">
                    <div class="row align-items-end">
                        <div class="col-12 col-lg-9 m20 mb-lg-0">
                            <div class="mw260 mr-auto ml-auto mr-lg-0">
                                <h3>Secciones</h3>
                                <ul class="menu">
                                    <li><a href="{{URL::to('/nosotros') }}">Nosotros</a></li>
                                    <li><a href="{{URL::to('/catalogos') }}">Catálogos</a></li>
                                    <li><a href="{{URL::to('/contacto') }}">Contacto</a></li>
                                    <li><a href="{{URL::to('/bolsa-trabajo') }}">Bolsa de Trabajo</a></li>
                                    <li><a href="#mdVendedores" data-toggle="modal">Equipo Madero</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3">
                            <div class="mw260 mr-auto ml-auto ml-lg-0 text-lg-left">
                                <a href="#mdCotizaciones" data-toggle="modal" class="facturacion d-block m10">Cotizaciones</a>
                                <a href="#" class="facturacion d-block">Facturación</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-lg-3 m30 text-center text-lg-right d-sm-none d-lg-block">
                    <ul class="redes">
                        <li><a href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="https://www.facebook.com/maderorefaccionarias.madero" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.instagram.com/companiafernandez/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <a href="#" class="aviso">Aviso de privacidad</a>
                </div>
            </div>
        </div>

        <div class="derechos">
            <div class="container-fluid w14 text-center">
                <h4 class="mb-0">© 2021, Madero Refaccionarias. Todos los derechos reservados</h4>
            </div>
        </div>
    </footer>
@endsection