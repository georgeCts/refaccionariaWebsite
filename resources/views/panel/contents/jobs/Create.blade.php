@section('title', 'Bolsa de trabajo')

@section('content')
    @if(Session::has('error_message'))
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4 class="alert-heading">{{ Session::get('error_title' )}}</h4>
                    <p>{{ Session::get('error_message' )}}</p>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif

    {!! Form::open(['route' => 'new-job', 'method' => 'POST', 'files' => true]) !!}
        <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Crear Empleo</h4>
                        <p class="card-description">Información General</p>
                        
                        <div class="form-group">
                            <label for="txtTitle">Título</label>
                            <input type="text" class="form-control" id="txtTitle" name="txtTitle" placeholder="Título del empleo" required />
                        </div>
                    
                        <div class="form-group">
                            <label for="txtSlug">URL Amigable</label>
                            <input type="text" class="form-control" id="txtSlug" name="txtSlug" placeholder="esto-es-un-ejemplo" required/>
                        </div>

                        <div class="form-group">
                            <label for="txtBody">Contenido</label>
                            <textarea class="form-control" id="txtBody" name="txtBody" rows="5"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success mr-2">Guardar</button>
                        <a href="/panel/bolsa-de-trabajo" role="button" class="btn btn-light">Cancelar</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex align-items-stretch grid-margin">
                <div class="row flex-grow">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Imagen de la Publicación</h4>
                                <p class="card-description">La imagen deben ser (960 x 750)</p>
                                <div class="form-group">
                                    <label>Imágen</label>
                                    <input type="file" name="image" class="form-control" />
                                </div>

                                <hr />

                                <h4 class="card-title">Estatus</h4>
                                <p class="card-description">Selecciona el estatus que tendrá el empleo al ser creado.</p>

                                <div class="form-group">
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus1" value="PUBLISHED" checked> Publicado
                                        </label>
                                    </div>
                                    <div class="form-radio">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" name="rdEstatus" id="rdEstatus2" value="DRAFT"> Borrador
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    {{--<script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>--}}
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=o3myw93jxyb8rtmkdckvyptqgdkxf69orqm77h57frjjt5v0"></script>
    <script src="{{ asset('assets/vendors/jquery-stringtoslug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#txtTitle, #txtSlug").stringToSlug({
                callback: function(text) {
                    $("#txtSlug").val(text);
                }
            })

            tinymce.init({
                selector: '#txtBody',
                theme: 'modern',
                height: 400,
                plugins: [
		            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
		            'searchreplace wordcount visualblocks visualchars code fullscreen',
		            'insertdatetime media nonbreaking save table contextmenu directionality',
		            'emoticons template paste textcolor colorpicker textpattern imagetools'
		        ],
		        toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		        toolbar2: 'print preview media | forecolor backcolor emoticons',
		        image_advtab: true
            });
        });        
    </script>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')