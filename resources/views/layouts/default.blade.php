<!doctype html>
<html>
    <head>
        @include('includes.head')
    </head>
    <body class="overflow-hidden">
        <header>
            @include('includes.header')
        </header>
        <section id='home'>
            @yield('home')
        </section>
        <footer class="row">
            @include('includes.footer')
        </footer>
    </body>
</html>
