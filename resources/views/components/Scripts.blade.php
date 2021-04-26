@section('components.Scripts')
    <script type="text/javascript">
        const PATH = "index.html" + "/";
    </script>

    <script type="text/javascript" src="{{ asset('js/app-v=12245.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/productos.js') }}"></script>
    <script src="{{ asset('js/inicio-v=14785.js') }}"></script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5f715f77f0e7167d001442b2/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->

    @yield('scripts')
@endsection