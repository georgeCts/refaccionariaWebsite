@section('components.Navbar')
    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info mr-auto">
                Tenemos más de 149,000 razones para decirte SI
            </div>
            <div class="contact-info mr-auto">
                Contactanos: (999)912 01 00\ ventas@maderorefaccionarias.com.mx
            </div>
            <div class="social-links">
                <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
                <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header">
        <div class="container d-flex">
            <div class="logo mr-auto">
                {{-- <h1 class="text-light"><a href="index.html">Flattern</a></h1> --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#"><img src="{{ asset('images/encabezado/05-logo-madero.png') }}" alt="" class="img-fluid"></a>
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">INICIO</a></li>
                    <li><a href="#">CONÓCENOS</a></li>
                    <li><a href="#">PRODUCTOS</a></li>
                    <li><a href="#">PROMOCIONES</a></li>
                    <li><a href="#">EXPERT TIPS</a></li>
                    <li><a href="#">CONTÁCTANOS</a></li>
                </ul>
            </nav><!-- .nav-menu -->
        </div>
    </header><!-- End Header -->
@endsection