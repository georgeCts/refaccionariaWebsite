@section('components.Modals')
    <div class="modal" tabindex="-1" role="dialog" id="mdBolsaTrabajo">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close bln" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-metal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="text-uppercase">POSTULATE</h3>
                                <p>Llena el siguiente formulario</p>
                                <form action="/contacto-cv" method="POST" class="needs-validation" novalidate data-action="$('#mdBolsaTrabajo').modal('hide')" enctype="multipart/form-data" >
                                    <input type="text" name="name" placeholder="*Nombre" class="m20 form-control" autocomplete="off" required />
                                    <input type="email" name="email" placeholder="*Correo" class="m20 form-control" autocomplete="off" required />
                                    <input type="text" name="phone_number" placeholder="*Teléfono" class="m20 form-control" autocomplete="off" required />
                                    <label for="cv_file" class="btn btn-amarillo position-relative m15">
                                        Adjuntar CV
                                        <input type="file" name="cv_file" id="cv_file" accept=".jpeg, .jpg, .pdf" required>
                                    </label>
                                    <p>Se admiten imagenes (.jpg, .jpeg) y PDFs (.pdf). Peso máximo del archivo: 5 mb</p>
                                    <button class="btn btn-blanco">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="mdNewsletter" data-cookie="">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header dual">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body diagonal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-6 bg-ngr text-center text-lg-left">
                                <div class="position-relative" style="z-index: 3">
                                    <img src="{{ asset('images/logo/logo_horizontal.png') }}" alt="Fernández" class="m20 w-90" style="max-width: 277px">
                                    <p>Suscríbete para recibir noticias de nuevos productos, eventos y promociones de Madero Refaccionarias.</p>
                                    <p>Síguenos en Redes Sociales</p>
                                    <a href="https://www.facebook.com/RefaccionariasMadero" target="_blank" class="d-inline-block mr-3 text-white"><i class="fab fa-lg fa-facebook-f"></i></a>
                                    <a href="#" target="_blank" class="d-inline-block mr-3 text-white"><i class="fab fa-lg fa-instagram"></i></a>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 bg-amr text-center">
                                <div class="position-relative" style="z-index: 3">
                                    <form action="#" method="POST" class="needs-validation" novalidate data-action="$('#mdNewsletter').modal('hide')">
                                        <h3 class="text-uppercase">REGISTRATE</h3>
                                        <input id="nameNews" type="text" name="name" placeholder="*Nombre" class="m20 form-control" autocomplete="off" required>
                                        <input id="emailNews" type="email" name="email" placeholder="*Correo" class="m20 form-control" autocomplete="off" required>
                                        <!-- <select name="estado" class="m20 form-control" autocomplete="off" required="">
                                            <option value="">*Seleccione un estado</option>
                                            <option value="Yucatan">Yucatán</option>
                                            <option value="Campeche">Campeche</option>
                                            <option value="Quintana Roo">Quintana Roo</option>
                                        </select> -->
                                        <button class="btn">Registrarme</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" role="dialog" id="mdCotizaciones">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close bln" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body bg-metal">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 text-center">
                                <h3 class="text-uppercase">COTIZACIONES</h3>
                                <p>Llena el siguiente formulario</p>
                                <form action="/contacto-quote" method="POST" class="needs-validation" novalidate data-action="$('#mdCotizaciones').modal('hide')" enctype="multipart/form-data" >
                                    <input type="text" name="name" placeholder="*Nombre" class="m20 form-control" autocomplete="off" required />
                                    <input type="email" name="email" placeholder="*Correo" class="m20 form-control" autocomplete="off" required />
                                    <input type="text" name="phone_number" placeholder="*Teléfono" class="m20 form-control" autocomplete="off" required />
                                    <textarea name="comentarios" placeholder="Comentarios" cols="30" rows="3" class="tx"></textarea>
                                    <br /><br />
                                    <label for="cv_file" class="btn btn-amarillo position-relative m15">
                                        Adjuntar documento
                                        <input type="file" name="cv_file" id="cv_file" accept=".jpg, .jpeg, .pdf" >
                                    </label>
                                    <p>Se admiten imagenes (.jpg, .jpeg) y PDFs (.pdf). Peso máximo del archivo: 5 mb</p>
                                    <button class="btn btn-blanco">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection