@section('title', 'Contacto')

@section('content')
    <div class="contacto">
        <div class="bg-amarillo" style="background-image: url('/images/nosotros/bg-mapa.png')">
            <div class="container-fluid w12">
                <div class="row formulario m30">
                    <div class="col-12 m15">
                        <h3 class="text-uppercase">¿Tienes alguna duda? Contáctanos</h3>
                    </div>
                    <div class="col-12 col-md-7 col-lg-8 m30">
                        <form action="https://www.fernandez.com.mx/contacto/send" class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-12 col-lg-6 m15">
                                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" required>
                                    <input type="email" name="correo" id="correo" placeholder="Email" class="form-control" required>
                                    <input type="text" name="telefono" id="telefono" placeholder="Teléfono" class="form-control" required>
                                    <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" required>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Mensaje" class="m20 form-control" required></textarea>
                                    <button type="submit" class="btn btn-negro">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-5 col-lg-4">
                        <p class="m30">
                            <b>Dirección:</b> Calle 70 No. 535-A entre 65 y 67 Centro. Mérida, Yucatán, México. <br>
                            <b>Tel/fax:</b> 52 (999) 9281096 y (999) 9280345<br>
                            <b>Correo:</b> cia@fernandez.com.mx
                        </p>
                        <p>
                            <b>Horario de Atención</b> <br>
                            Lunes a Viernes de 8 a.m. a 6.30 p.m. <br>
                            Sábado  de 8 a.m. a 2.30 p.m.
                        </p>
                    </div>
                </div>
                <div class="row mapa">
                    <div class="col-12">
                        <div id="mapa"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        var lat = 20.964810,
            lng = -89.630630;
    </script>
    <script src="{{ asset('js/mapa-v=12245.js') }}"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuu1Q0hHmlO30h7YRDZ0mWYof-SM-edns&callback=initMap"></script>
@endsection

@include('components.Header')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')