<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{$_PAGE_TITLE}} | @yield('title', '*** TITLE ***')</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    @yield('components.Stylesheets')
</head>

<body>
    @yield('components.Navbar')

    @yield('content', '*** CONTENT ***')

    @yield('components.PreFooter')

    @yield('components.Footer')

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <a href="#" class="floating-whatsapp"><img src="/images/78-icono-whatsapp.png" /></a>

    @yield('components.Scripts')
</body>
</html>