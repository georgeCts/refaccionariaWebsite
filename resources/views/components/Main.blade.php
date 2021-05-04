<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{{$_PAGE_TITLE}} | @yield('title', '*** TITLE ***')</title>
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta property="og:url" content="" />
    <meta property="og:type" content="web" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />

    <link rel="shortcut icon" href="images/favicon/favicon.png" />

    @yield('components.Stylesheets')
</head>
<body>
    @yield('components.Header')

    @yield('content', '*** CONTENT ***')

    @yield('components.Prefooter')

    @yield('components.Footer')

    @yield('components.Modals')

    <!-- Messenger plugin de chat Code -->
    <div id="fb-root"></div>
    <script>
        window.fbAsyncInit = function() {
            FB.init({
                xfbml            : true,
                version          : 'v10.0'
            });
        };

        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/es_LA/sdk/xfbml.customerchat.js';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <!-- Your plugin de chat code -->
    <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="789700961128768">
    </div>

    <a href="https://api.whatsapp.com/send?phone=529993135534&text=Hola!%20%E2%9C%8B%F0%9F%8F%BBle%20contacto%20desde%20su%20sitio%20web%20Refaccionaria%20Madero%2C%20deseo%20recibir%20atenci%C3%B3n%20personalizada." class="floating-whatsapp" target="_blank"><img src="/images/78-icono-whatsapp.png" /></a>

    @yield('components.Scripts')
</body>
</html>