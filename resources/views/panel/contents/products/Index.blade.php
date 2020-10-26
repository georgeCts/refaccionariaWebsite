@section('title', 'Productos')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
        @if(Session::has('success_message'))
            <div class="alert alert-success col-md-12 col-sm-12 alert-dismissible fade show" role="alert">
                <strong>{{ Session::get('success_title' )}}!</strong> {{ Session::get('success_message' )}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 text-right mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#panel-modal-product-app">
                Importar Productos
            </button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Productos</h4>
                    <p class="card-description">Lista de productos que serán mostrados en la web</p>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>SKU</th>
                                    <th>Descripción</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($lstProducts as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->part_number }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <a href="/panel/productos/producto-editar/{{ $item->id }}" class="btn btn-sm btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="panel-modal-product-app" data-keyboard="false" tabindex="-1" aria-labelledby="importModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="importModalLabel">Importar productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="file" id="import-product" name="file" @change="onFilePicked" required />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary" @click="saveImport">Importar</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('panel.components.Navbar')
@include('panel.components.Sidebar')
@include('panel.components.Footer')
@include('panel.components.Scripts')
@include('panel.components.Stylesheets')

@extends('panel.components.Main')