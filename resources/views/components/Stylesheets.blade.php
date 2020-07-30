@section('components.Stylesheets')
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />

    {{--<link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}" />--}}

    @yield('stylesheets')
@endsection