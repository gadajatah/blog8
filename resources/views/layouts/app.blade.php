<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>
    <body class="nav-fixed">
        {{-- Navbar --}}
        @include('partials._navbar')
        {{-- End Navbar --}}
        <div id="layoutSidenav">
            {{-- Sidebar --}}
            @include('partials._sidebar')
            {{-- End Sidebar --}}
            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>
                <footer class="footer-admin mt-auto footer-light">
                    @include('partials._footer')
                </footer>
            </div>
        </div>
        @include('partials._script')
    </body>
</html>
