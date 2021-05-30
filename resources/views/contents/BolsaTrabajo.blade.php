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
                        </div>
                        <div class="col-12 col-md-6 col-lg-6 col-xl-5 descripciones">
                            <p>Si estas interesado en alguna de nuestras postulaciones, envíanos un correo
                                a rhumanos@maderorefaccionarias.com.mx en horario de 8:00 a.m. a 6:00 p.m.<br></p>
                            <p><span style="font-size: 1rem;">Te invitamos a seguir las recomendaciones de sana distancia establecidas
                            por la empresa, obligatorio el uso de cubre bocas en todo momento dentro las
                            instalaciones.</span></p>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-bolsa" data-toggle="modal" data-target="#mdBolsaTrabajo" data-job="2">Postulate</button>
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
                                <button class="btn btn-bolsa" data-toggle="modal" data-target="#mdBolsaTrabajo" data-job="9">Postulate</button>
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
@endsection

@include('components.Header')
@include('components.Footer')
@include('components.Modals')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')