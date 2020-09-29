@section('stylesheets')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="http://kenwheeler.github.io/slick/slick/slick-theme.css" />
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
            <div class="proveedor-item">
                <img src="/images/proveedores/67-kem.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/68-dc.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/69-castrol.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/70-luk.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/113-bosch.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/114-motorcraft.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/115-champion.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/116-ngk.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/120-canabrake.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/121-injetech.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/122-bagle.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/123-blatt.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/129-skf.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/130-gabriel.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/131-knadian.png" class="proveedor-image" />
            </div>

            <div class="proveedor-item">
                <img src="/images/proveedores/132-casul.png" class="proveedor-image" />
            </div>
        </div>

        <div class="row suscripcion">
            <div class="col-lg-12 text-center">
                <h3>SUSCRIBETE AHORA</h3>
                <span>CONSEGUIRÁS DESCUENTOS Y PROMOCIONES EXCLUSIVAS</span>
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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
        });
    </script>
@endsection