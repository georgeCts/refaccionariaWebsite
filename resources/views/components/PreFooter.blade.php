@section('stylesheets')
    <link href="{{ asset('vendor/slick/slick.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/slick/slick-theme.css') }}" rel="stylesheet" />
@endsection

@section('components.PreFooter')
    <section id="prefooter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>MARCAS DE PRESTIGIO</h2>
                </div>
            </div>
        </div>

        <div class="slider-proveedores">
            @foreach ($_BRANDS as $item)
                <div class="proveedor-item">
                    <img src="{{Storage::url($item->file)}}" class="proveedor-image" alt="{{$item->title}}" />
                </div>
            @endforeach
        </div>

        <div class="row suscripcion">
            <div class="col-lg-12 text-center">
                <h3 class="go-contact">SUSCRIBETE AHORA</h3>
                <span>OBTENDRÁS DESCUENTOS Y PROMOCIONES EXCLUSIVAS</span>
            </div>

            <div class="col-lg-8 text-right mt-4">
                <h4>LO HACEMOS MÁS FÁCIL</h4>
                <span>YA PUEDES PAGAR TUS REFACCIONES COMO MÁS TE GUSTE</span>
            </div>

            <div class="col-lg-4 float-left mt-4">
                <img src="/images/74-metodos-pagos.png" style="width: 200px; margin: 15px;"/>
            </div>
        </div>
    </section>
@endsection

@section('scripts-prefooter')
    <script type="text/javascript" src="{{ asset('vendor/slick/slick.min.js') }}"></script>
    <script>
        $( document ).ready(function() {
            $('.slider-proveedores').slick({
                infinite: true,
                slidesToShow: 5,
                slidesToScroll: 1,
                arrows: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });

            $('.go-contact').click(function() {
                let baseUrl = `https://${window.location.host}`;
                window.location.replace(`${baseUrl}/contacto`);
            });
        });
    </script>
@endsection