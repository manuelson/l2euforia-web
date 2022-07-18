<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="overflow-hidden">
        <header>
            @include('includes.header')
        </header>
        @include('includes.banner')
        @yield('content')

        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>
