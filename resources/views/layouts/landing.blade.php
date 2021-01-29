<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags-head')
    </head>
    <body class='antialiased'>
        <div id='app-layout'>
            @include('includes.navbar')
            <div id='hero' class='container-fluid p-0'>
                <div class='container d-flex justify-content-center align-items-center h-100'>
                    <h2 class='text-center'>GRC Properties</h2>
                </div>
            </div>
        </div>
        @yield('content')
        @include('includes.footer')
    </body>
</html>