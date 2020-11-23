@section('components.Sidebar')
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item nav-profile">
                <div class="nav-link">
                    <div class="user-wrapper">
                        <div class="profile-image">
                            <img src="{{ asset('images/faces/avatar.jpg') }}" alt="profile image" />
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">{{ ucfirst(Auth::user()->name) }} {{ ucfirst(Auth::user()->last_name) }}</p>
                            <div>
                                <small class="designation text-muted">Administrador</small>
                                <span class="status-indicator online"></span>
                            </div>
                        </div>
                    </div>
                    <a href="{{URL::to('logout-panel')}}" class="btn btn-danger btn-block">Cerrar sesión <i class="mdi mdi-exit-to-app"></i></a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{URL::to('panel')}}">
                    <i class="menu-icon mdi mdi-television"></i>
                    <span class="menu-title">Panel</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module0" aria-expanded="false" aria-controls="module0">
                    <i class="menu-icon mdi mdi-image"></i>
                    <span class="menu-title">Sliders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module0">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/sliders') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/sliders/slider-crear') }}">Nuevo slider</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module1" aria-expanded="false" aria-controls="module1">
                    <i class="menu-icon mdi mdi-cards"></i>
                    <span class="menu-title">Promociones/Ofertas</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module1">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/promociones') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/promociones/promocion-crear') }}">Nueva promoción/oferta</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module2" aria-expanded="false" aria-controls="module2">
                    <i class="menu-icon mdi mdi-basket"></i>
                    <span class="menu-title">Productos</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module2">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/productos') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/productos/producto-crear') }}">Nuevo producto</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module3" aria-expanded="false" aria-controls="module3">
                    <i class="menu-icon mdi mdi-emoticon-excited"></i>
                    <span class="menu-title">Expert Tips</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module3">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/tips') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/tips/tip-crear') }}">Nuevo tip</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module4" aria-expanded="false" aria-controls="module4">
                    <i class="menu-icon mdi mdi-map-marker"></i>
                    <span class="menu-title">Sucursales</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module4">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/sucursales') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/sucursales/sucursal-crear') }}">Nueva sucursal</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module5" aria-expanded="false" aria-controls="module5">
                    <i class="menu-icon mdi mdi-briefcase"></i>
                    <span class="menu-title">Bolsa de Trabajo</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module5">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/bolsa-trabajo') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/bolsa-trabajo/trabajo-crear') }}">Nuevo trabajo</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module6" aria-expanded="false" aria-controls="module5">
                    <i class="menu-icon mdi mdi-watermark"></i>
                    <span class="menu-title">Marcas de Prestigio</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module6">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/marcas-prestigio') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/marcas-prestigio/prestigio-crear') }}">Nueva marca</a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#module7" aria-expanded="false" aria-controls="module5">
                    <i class="menu-icon mdi mdi-watermark"></i>
                    <span class="menu-title">Catálogos de Marcas</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="collapse" id="module7">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{URL::to('panel/brands') }}">Lista</a>
                            <a class="nav-link" href="{{URL::to('panel/brands/brand-crear') }}">Nueva marca</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
    <!-- partial -->
@endsection