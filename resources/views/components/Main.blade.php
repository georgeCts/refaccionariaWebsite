<!DOCTYPE html>
<html lang="es">
<head>
    <title>{{$_PAGE_TITLE}} | @yield('title', '*** TITLE ***')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @yield('components.Stylesheets')
</head>

<body style="background-color: cornflowerblue">
    @yield('components.Navbar')

    @yield('content', '*** CONTENT ***')
        
    @yield('components.Footer')

    @yield('components.Scripts')
</body>
</html>