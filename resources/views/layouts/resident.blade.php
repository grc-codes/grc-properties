<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags-head')
    </head>
    <body class='antialiased'>
        <div id='resident-layout'>
            @include('includes.resident-navbar')
            <div id='content-area'>
                @yield('content')
                @include('includes.resident-footer')
            </div>
        </div>
    </body>
</html>