<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="overflow-hidden">
        <header>
            @include('includes.header')
        </header>
        @yield('content')
        <footer class="footer">
            @include('includes.footer')
        </footer>
    </body>
</html>
