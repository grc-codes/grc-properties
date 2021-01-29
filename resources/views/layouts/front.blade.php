<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags-head')
    </head>
    <body class='antialiased'>
        <div id='app-layout'>
            @include('includes.navbar')
            <div id='content-area'>
                @yield('content')
                @include('includes.footer')
            </div>
        </div>
    </body>
</html>