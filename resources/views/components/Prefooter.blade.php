@section('components.Prefooter')
    <div class="newsletter">
        <div class="container text-center">
            <form action="/contacto-subscribe" method="POST" class="needs-validation" novalidate>
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 m20"><h3 class="text-uppercase">Registrate con nosostros</h3></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="name" placeholder="Nombre" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="email" name="email" placeholder="Correo" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 m20 mb-lg-0"><input class="form-control" type="text" name="state" placeholder="Estado" required autocomplete="off"></div>
                    <div class="col-12 col-md-6 col-lg-3 text-left"><button class="btn pr-2 text-uppercase" type="submit">Registrarme <img src="images/send01.svg" alt="" class="ml-4"></button></div>
                </div>
            </form>
        </div>
    </div>
@endsection