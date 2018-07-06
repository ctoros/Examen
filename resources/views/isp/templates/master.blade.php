@include('isp.templates.partials.header')

    <body class="fixed-nav sticky-footer bg-dark" id="page-top">

        @include('isp.templates.partials.navbar')

        @yield('content')

    </body>

@include('isp.templates.partials.footer')