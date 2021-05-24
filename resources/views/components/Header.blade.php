@section('components.Header')
    <header>
        <nav class="menu--movil">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-8">
                        <a href="{{URL::to('/') }}">
                            <img src="{{ asset('images/logo/logo_horizontal.png') }}" alt="Madero Refaccionaria" class="w-100 logo" />
                        </a>
                    </div>
                    <div class="col-4 text-right">
                        <div class="menu menu-1" id="menu">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu--list">
                <div class="scroll">
                    <ul>
                        <li class="text-uppercase "><a href="{{URL::to('/nosotros') }}">Nosotros</a></li>
                        <li class="text-uppercase "><a href="{{URL::to('/catalogos') }}">Catálogos</a></li>
                        <li class="text-uppercase "><a href="{{URL::to('/expert-tips') }}">Expert Tips</a></li>
                        <li class="text-uppercase "><a href="{{URL::to('/promociones') }}">Promociones</a></li>
                        <li class="text-uppercase dropdown">
                                <span class="dropbtn">Contáctanos</span>
                                <div class="dropdown-content">
                                    <a href="{{URL::to('/contacto') }}">Contacto</a>
                                    <a href="{{URL::to('/bolsa-trabajo') }}">Bolsa de trabajo</a>
                                </div>
                            </li>
                        <li class="text-uppercase"><a href="#mdCotizaciones" data-toggle="modal" class="btn d-inline-block btn-amarillo">Cotiza aquí</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="menu--desk">
            <div class="container-fluid w14">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <a href="{{URL::to('/') }}">
                            <img src="{{ asset('images/logo/logo_horizontal.png') }}" alt="Madero Refaccionarias" class="w-100 logo">
                        </a>
                    </div>
                    <div class="col-lg-9">
                        <ul>
                            <li class="text-uppercase "><a href="{{URL::to('/nosotros') }}">Nosotros</a></li>
                            <li class="text-uppercase "><a href="{{URL::to('/catalogos') }}">Catálogos</a></li>
                            <li class="text-uppercase "><a href="{{URL::to('/expert-tips') }}">Expert Tips</a></li>
                            <li class="text-uppercase "><a href="{{URL::to('/promociones') }}">Promociones</a></li>
                            <li class="text-uppercase dropdown">
                                <span class="dropbtn">Contáctanos</span>
                                <div class="dropdown-content">
                                    <a href="{{URL::to('/contacto') }}">Contacto</a>
                                    <a href="{{URL::to('/bolsa-trabajo') }}">Bolsa de trabajo</a>
                                </div>
                            </li>
                            <li class="text-uppercase"><a href="#mdCotizaciones" data-toggle="modal" class="btn d-inline-block btn-amarillo">Cotiza aquí</a></li>
                            <li>
                                <a class="d-inline-block mr-2" href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank"><i class="fab fa-whatsapp"></i></a>
                                <a class="d-inline-block mr-2" href="https://www.facebook.com/RefaccionariasMadero" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a class="d-inline-block" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
@endsection