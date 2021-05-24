@section('title', 'Expert Tips')

@section('content')
    <div class="bolsa-trabajo">
        <div class="portada">
            <div class="container-fluid w13">
                <h3 class="text-uppercase">Expert Tips</h3>
            </div>
        </div>

        <div class="expert-tips">
            <div class="row">
                @foreach ($lstTips as $item)
                    <div class="col-lg-4 text-center">
                        @if ($item->file != null)
                            <img src="{{Storage::url($item->file)}}" alt="{{$item->title}}" />
                        @endif
                        <div class="info">
                            <p>{{$item->body}}</p>
                        </div>
                    </div>
                @endforeach
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