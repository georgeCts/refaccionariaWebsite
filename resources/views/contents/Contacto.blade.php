@section('title', 'Contacto')

@section('content')
    <section id="contact" class="contact">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-12">
                <h2>CONTÁCTANOS</h2>
            </div>
        </div>
        
        <div id="contact-app" class="row mt-5 justify-content-center" data-aos="fade-up">
            <div class="col-lg-6 col-sm-12">
                <form class="php-email-form" @submit.prevent="sendMessage">
                    <div class="form-row">
                        <div class="col-md-6 form-group">
                            <input type="text" name="name" v-model="name" class="form-control" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Ingresa al menos 4 caractéres" />
                            <div class="validate"></div>
                        </div>
                    
                        <div class="col-md-6 form-group">
                            <input type="email" class="form-control" name="email" v-model="email" id="email" placeholder="Email" data-rule="email" data-msg="Ingresa un email válido" />
                            <div class="validate"></div>
                        </div>
                    </div>
                
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" v-model="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Ingresa al menos 8 caractéres de asunto" />
                        <div class="validate"></div>
                    </div>
                
                    <div class="form-group">
                        <textarea class="form-control" name="message" v-model="message" rows="5" data-rule="required" data-msg="" placeholder="Mensaje"></textarea>
                        <div class="validate"></div>
                    </div>
                
                    <div class="mb-3">
                        <div class="loading" v-if="loading">Cargando</div>
                        <div class="error-message" v-if="error">@{{ errorMessage }}</div>
                        <div class="sent-message" v-if="success">Tu mensaje ha sido enviado. Gracias!</div>
                    </div>
                    
                    <div class="text-center">
                        <button type="submit">Enviar Mensaje</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-6 col-sm-12">
                <div class="info-wrap">
                    @foreach ($lstLocations as $item)
                        <div class="row mb-4">
                            <div class="col-lg-12 text-center">
                                <h3>{{ $item->name}}</h3>
                            </div>
                            <div class="col-lg-4 info">
                                <a target="_blank" href="@php echo 'https://www.google.com.mx/maps/@'.$item->latitude.','.$item->longitude.',19.55z' @endphp">
                                    <i class="icofont-google-map"></i>
                                </a>
                                <p>{{ $item->address }}</p>
                            </div>
        
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-phone"></i>
                                <p>{{ $item->phone }}</p>
                            </div>
        
                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="icofont-whatsapp"></i>
                                <p>{{$item->whatsapp1}}<br>{{$item->whatsapp2}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section><!-- End Contact Section -->

@endsection

@include('components.Navbar')
@include('components.Footer')
@include('components.Scripts')
@include('components.Stylesheets')

@extends('components.Main')