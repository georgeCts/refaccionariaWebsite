@section('title', 'Bolsa de trabajo')

@section('content')
    <section class="bolsa-trabajo">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>ÚNETE A LA FAMILIA</h2>
                </div>
            </div>

            @foreach ($lstJobs as $item)
                <div class="row">
                    <div class="col-lg-8">
                        <p>
                            <span>Puesto</span><br />
                            {{$item->job}}<br />
                            <span>Sucursal</span><br />
                            {{$item->location->name}}<br />
                            <span>Requisitos</span><br />
                            {{$item->requirement}}<br />
                            <span>Ofrecemos</span><br />
                            {{$item->offer}}<br />
                            <span>Postularse</span><br />
                            {{$item->apply}}<br />
                            <span>Contacto</span><br />
                            {{$item->contact}}
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{Storage::url($item->file)}}" alt="trabajo" style="width: 400px; padding-top: 40px;" />
                    </div>
                </div>
            @endforeach
        </div>
    </section>

@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.PreFooter')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')