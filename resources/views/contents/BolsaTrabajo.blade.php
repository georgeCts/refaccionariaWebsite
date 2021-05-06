@section('title', 'Bolsa de trabajo')

@section('content')
    <div class="bolsa-trabajo">
        <div class="portada">
            <div class="container-fluid w13">
                <h3 class="text-uppercase">Bolsa de Trabajo</h3>
            </div>
        </div>

        <div class="listado">
            <div class="bg-contain">
                <div class="container-fluid w13">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <h3 class="text-uppercase m-lg-30">Envíanos tu C.V.</h3>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-5 descripciones">
                            <p>Hola estimado candidato, para mantener los protocolos de distanciamiento social puedes enviar tu curriculum vitae a la dirección recursos.humanos@maderorefaccionarias.com.mx<br></p>
                            <p>en horario de 8:30 a.m. a 6:30 p.m.</p>
                            <p><span style="font-size: 1rem;">Si estás interesado en alguna vacante te invitamos a guardar tu sana distancia y por favor enviarnos tu documentación vía correo electrónico.</span></p>
                            <p>Sin más por el momento muchas gracias.</p>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-6 descripciones">
                            <p>En caso de ser convocado contamos con todas las medidas de seguridad:</p>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Zonas marcadas para la sana distancia de 1.5mts</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Uso de gel anti-bacterial al entrar y salir de la tienda</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Tomamos la temperatura de manera correcta</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Todo el personal cuenta con caretas y cubrebocas</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Barras protectoras en el mostrador</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Limpieza y desinfección del área de trabajo con equipo de alta tecnología</span><br>
                            <img alt="✅" src="https://www.facebook.com/images/emoji.php/v9/t33/1/16/2705.png">&nbsp;<span style="font-size: 1rem;">Control de entrada y salida guiada</span>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-bolsa" data-toggle="modal" data-target="#mdBolsaTrabajo" data-job="2">Postularme</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-contain">
                <div class="container-fluid w13">
                    @foreach ($lstJobs as $item)
                        <div class="row justify-content-between mb-5">
                            <div class="col-12">
                                <h3 class="text-uppercase m-lg-30">{{$item->job}}</h3>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-5 descripciones">
                                <p>Requisitos:</p>
                                <p>{{$item->requirement}}</p>
                            </div>
                            <div class="col-12 col-md-6 col-lg-6 col-xl-6 descripciones">
                                <p>{{$item->offer}}</p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-bolsa" data-toggle="modal" data-target="#mdBolsaTrabajo" data-job="9">Postularme</button>
                            </div>
                        </div>
                    @endforeach
                </div>
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
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')