<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags-head')
    </head>
    <body class='antialiased'>
        @include('includes.manager-navbar')
        <div id='manager-layout'>
            @include('includes.manager-sidemenu')
            <div id='manager-content'>
                @yield('content')
                @include('includes.manager-footer')
            </div>
        </div>
    </body>
</html>