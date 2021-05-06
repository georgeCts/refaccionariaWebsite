@section('components.Prefooter')
    <!-- <div class="caracteristicas">
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
                    <div class="wrapper"><img src="/images/caracteristicas/productos22.png" alt=""></div>
                    <p>Forman parte de <br> nuestros productos</p>
                </div>
                <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0">
                    <div class="wrapper"><img src="/images/caracteristicas/mesa_trabajo.png" alt=""></div>
                    <p>Catálogos en <br> línea, más rápido</p>
                </div>
            </div>
        </div>
    </div> -->

    <div class="newsletter">
        <div class="container text-center">
            <form action="#" method="POST" class="needs-validation" novalidate>
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 m20"><h3 class="text-uppercase">Suscríbete a nuestro BOLETÍN</h3></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="name" placeholder="Nombre" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="email" name="email" placeholder="Correo" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="estado" placeholder="Estado" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 text-left"><button class="btn pr-2 text-uppercase" type="submit">Suscribirme <img src="images/send.svg" alt="" class="ml-4"></button></div>
                </div>
            </form>
        </div>
    </div>
@endsection