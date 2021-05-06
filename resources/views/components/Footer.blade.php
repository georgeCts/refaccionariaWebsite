@section('components.Footer')
    <footer>
        <div class="container-fluid w14">
            <div class="row align-items-lg-center">
                <div class="col-12 col-sm-6 col-lg-4 m30 text-center">
                    <img src="/images/logo/logo.png" alt="Direccion" class="w-60 logo mb-sm-4 mb-lg-0">
                    <div class="d-none d-sm-block d-lg-none mt-sm-1">
                        <ul class="redes mt-sm-3">
                            <li><a href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                            <li><a href="https://www.facebook.com/RefaccionariasMadero" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
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
                        <li><a href="https://www.facebook.com/RefaccionariasMadero" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                    <a href="##" class="aviso">Aviso de privacidad</a>
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