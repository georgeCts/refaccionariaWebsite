@section('title', 'Inicio')

@section('content')
    <section id="home" class="video-hero js-fullheight" style="height: 700px; background-image: url(images/bg-tarahumara.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
        <div class="overlay js-fullheight"></div>
        <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=67WuBLHBd8g',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:18, opacity:1, quality:'default'}"></a>

        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-10 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Apoyemos <strong>Juntos</strong> A Nuestros Hermanos</h1>
                    <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary btn-outline-white px-4 py-3">Apoyar</a></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-bible-study">
        <div class="container-wrap">
            <div class="col-md-12 wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 d-md-flex">
                            <div class="one-forth ftco-animate">
                                <h3>Próxima Ayuda</h3>
                                <p>Este es el tiempo que tenemos para recolectar toda la ayuda posible.</p>
                            </div>

                            <div class="one-half d-md-flex align-items-md-center ftco-animate">
                                <div class="countdown-wrap">
                                    <p class="countdown d-flex">
                                        <span id="days"></span>
                                        <span id="hours"></span>
                                        <span id="minutes"></span>
                                        <span id="seconds"></span>
                                    </p>
                                </div>
                                <div class="button">
                                    <p><a href="#" class="btn btn-primary p-3">¿Cómo ayudar?</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section-2">
        <div class="container-fluid">
            <div class="section-2-blocks-wrapper d-flex row no-gutters">
                <div class="img col-md-6 ftco-animate" style="background-image: url('images/about.jpg');">
                    <a href="https://www.youtube.com/watch?v=ZoLtkmgOUkE" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
                </div>
                <div class="text col-md-6 ftco-animate">
                    <div class="text-inner align-self-start">
                        <h3>¿Qué es Still Hope?</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Nuestra Misión</span>
                    <h2 class="mb-4">Ayuda a Comunidades</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3">
                                <span class="align-self-center flaticon-planet-earth"></span>
                            </div>
                        </div>

                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Alimentos</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-maternity"></span></div></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Colchas</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-pray"></span></div></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Proyecto Sustentable</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center"><div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-podcast"></span></div></div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Otros</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NEWSLETTER --}}
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Suscribete a nuestro boletín</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-6">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group">
                                        <span class="icon icon-paper-plane"></span>
                                        <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EQUIPO --}}
    <section class="ftco-section testimony-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Lee, Inspirate y Manos a la obra!</span>
                    <h2 class="mb-4">Nuestro Equipo</h2>
                    <p>Breve información de las personas que se encuentran detrás de Still Hope México, personas que junto contigo hacen un cambio y mejoramiento de estilo de vivir de la gente tarahumara.</p>
                </div>
            </div>

            <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel ftco-owl">
                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/sandra.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center"><i class="icon-quote-left"></i></span>
                                </div>

                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Sandra Rubio</p>
                                    <span class="position">Fundadora</span>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center"><i class="icon-quote-left"></i></span>
                                </div>

                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Voluntario</span>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center"><i class="icon-quote-left"></i></span>
                                </div>

                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Voluntario</span>
                                </div>
                            </div>
                        </div>

                        <div class="item text-center">
                            <div class="testimony-wrap p-4 pb-5">
                                <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                                    <span class="quote d-flex align-items-center justify-content-center"><i class="icon-quote-left"></i></span>
                                </div>

                                <div class="text">
                                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                    <p class="name">Dennis Green</p>
                                    <span class="position">Voluntario</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CONTADORES --}}
    <section class="ftco-section ftco-counter" id="section-counter">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Nuestros Logros</h2>
                    <p>Te compartimos los logros que hemos obtenido gracias a tu ayuda</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="100">0</strong>
                            <span>Personas Beneficiadas</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="50">0</strong>
                            <span>Ayuda Recibida</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                        <div class="text">
                            <strong class="number" data-number="210">0</strong>
                            <span>Insumos &amp; Donaciones</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- EVENTOS --}}
    <section class="ftco-section-2 bg-light">
        <div class="container-fluid">
            <div class="row no-gutters d-flex">
                <div class="col-md-6 img d-flex justify-content-end align-items-center" style="background-image: url(images/event.jpg);">
                    <div class="col-md-7 heading-section text-sm-center text-md-right heading-section-white ftco-animate mr-md-5 mt-md-5">
                        <h2>Nuestros Últimos Eventos</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Ver Eventos</a></p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="event-wrap">
                        <div class="event-entry d-flex ftco-animate">
                            <div class="meta mr-4">
                                <p>
                                    <span>07</span>
                                    <span>Aug 2018</span>
                                </p>
                            </div>
                            <div class="text">
                                <h3 class="mb-2"><a href="events.html">Saturday's Bible Reading</a></h3>
                                <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                                <a href="events.html" class="img" style="background-image: url(images/event-1.jpg);"></a>
                            </div>
                        </div>

                        <div class="event-entry d-flex ftco-animate">
                            <div class="meta mr-4">
                                <p>
                                    <span>07</span>
                                    <span>Aug 2018</span>
                                </p>
                            </div>
                            <div class="text">
                                <h3 class="mb-2"><a href="events.html">Wednesday Gospel Singing</a></h3>
                                <p class="mb-4"><span>9:00am at 456 NC USA</span></p>
                                <a href="events.html" class="img" style="background-image: url(images/event-2.jpg);"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- BLOG --}}
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Blog</span>
                    <h2>Publicaciones Recientes</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');"></a>
                        <div class="text p-4 d-block">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="100">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');"></a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ftco-animate">
                    <div class="blog-entry" data-aos-delay="200">
                        <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');"></a>
                        <div class="text p-4">
                            <div class="meta mb-3">
                                <div><a href="#">July 12, 2018</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                            </div>
                            <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')