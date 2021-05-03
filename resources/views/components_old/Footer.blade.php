@section('components.Footer')
    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Madero Refaccionarias</h3>
                        <p>
                            Calle 31 No.168-E por 14 y 100
                            Francisco I. Madero<br>
                            97240 Mérida, Yuc.<br><br>
                            <strong>Teléfono:</strong> (999) 912 01 00<br>
                            <strong>Email:</strong> ventas@maderorefaccionarias.com.mx<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Otros Links</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="/bolsa-trabajo">Bolsa de trabajo</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Sucursales</h4>
                        <ul>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.google.com.mx/maps/place/MADERO+%7C+Refaccionaria+Circuito+Poniente/@20.9647038,-89.6492583,17z/data=!4m12!1m6!3m5!1s0x8f5673ba2e2b5c79:0x2f95f68deb8b1cb0!2sMADERO+%7C+Refaccionaria+Circuito+Poniente!8m2!3d20.9646161!4d-89.649319!3m4!1s0x8f5673ba2e2b5c79:0x2f95f68deb8b1cb0!8m2!3d20.9646161!4d-89.649319">Sucursal Matriz</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.google.com.mx/maps/place/Madero+Refaccionarias/@20.938576,-89.5651907,17z/data=!4m8!1m2!2m1!1srefaccionaria+madero!3m4!1s0x8f5673a620a199ed:0x4b132413e43be801!8m2!3d20.9387297!4d-89.5651968">Sucursal Kanasin</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.google.com.mx/maps/place/REFACCIONARIAS+MADERO+SUC+CENTRO/@20.9498403,-89.6406455,12.89z/data=!4m8!1m2!2m1!1srefaccionaria+madero!3m4!1s0x8f5673d285eaec51:0x914b0cc0a2253c30!8m2!3d20.9528491!4d-89.6340203">Sucursal Centro</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a target="_blank" href="https://www.google.com.mx/maps/place/Refaccionarias+Madero/@20.995025,-89.5801843,17.57z/data=!4m8!1m2!2m1!1srefaccionaria+madero!3m4!1s0x8f5670d2f3670671:0x55be44b68146e176!8m2!3d20.9951851!4d-89.5794184">Sucursal Macro</a></li>
                        </ul>
                    </div>

                    <div id="subscribe-app" class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Únete a nuestro boletín de noticias</h4>
                        <form @submit.prevent="subscribe">
                            <input type="email" v-model="email">
                            <input type="submit" value="Suscríbete" />
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">
            <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                    &copy; Copyright <strong><span>Madero Refaccionarias</span></strong>. All Rights Reserved
                </div>
            </div>

            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
                <a href="https://www.facebook.com/RefaccionariasMadero" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
@endsection