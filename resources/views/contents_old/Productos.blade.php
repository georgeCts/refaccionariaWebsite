@section('title', 'Productos')

@section('content')
    <!-- ======= Pomociones Section ======= -->
    <section id="products" class="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>REFACCIONES</h2>
                </div>
            </div>
        </div>

        <div id="product-app" class="container">
            <products-component token="{{csrf_token()}}" />
        </div>
    </section><!-- End Promociones Section -->

@endsection

@section('scripts')
    <script>
        $( document ).ready(function() {

        });
    </script>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.PreFooter')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')