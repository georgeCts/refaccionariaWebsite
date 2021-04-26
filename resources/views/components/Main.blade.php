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

    @yield('components.Scripts')
</body>
</html>