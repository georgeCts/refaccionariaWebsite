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
                        @foreach ($lstLocations as $item)
                        <p class="m30">
                            <h4>{{ $item->name }}</h4>
                            <b>Dirección:</b>{{ $item->address }}<br>
                            <b>Whatsapp:</b><a href="https://api.whatsapp.com/send?phone=52{{$item->whatsapp1}}&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank">{{$item->whatsapp1}}</a> y <a href="https://api.whatsapp.com/send?phone=52{{$item->whatsapp2}}&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%20deseo%20recibir%20atenci%C3%B3n%20personalizada." target="_blank">{{$item->whatsapp2}}</a>
                        </p>
                        @endforeach
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
        var sucursales = JSON.parse('{!!$lstLocations!!}');

        // Mapa
        var map;
        function initMap() {
            var uluru = {lat: 20.964810, lng: -89.630630};
            map = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 12,
                center: uluru,
            });

            sucursales.map(sucursal => {
                new google.maps.Marker({
                    position: {
                        lat: parseFloat(sucursal.latitude),
                        lng: parseFloat(sucursal.longitude)
                    },
                    map: map,
                    icon: '/images/pin.png',
                });
            })
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBuu1Q0hHmlO30h7YRDZ0mWYof-SM-edns&callback=initMap"></script>
@endsection

@include('components.Header')
@include('components.Prefooter')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')