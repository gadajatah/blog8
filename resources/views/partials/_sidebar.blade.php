<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading">Main</div>
                <!-- Sidenav Accordion (Dashboard)-->
                <a class="nav-link collapsed" href="{{ route('dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Dashboard
                </a>
                <!-- Sidenav Heading (App Views)-->
                <div class="sidenav-menu-heading">Menu</div>
                <!-- Sidenav Accordion (Pages)-->
                <a class="nav-link collapsed" href="{{ route('series.index') }}">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Series
                </a>
                <!-- Sidenav Accordion (Flows)-->
                <a class="nav-link collapsed" href="javascript:void(0);">
                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Post
                </a>

                <a class="nav-link collapsed" href="javascript:void(0);">
                    <div class="nav-link-icon"><i data-feather="repeat"></i></div>
                    Blog
                </a>
                <!-- Sidenav Heading (UI Toolkit)-->
            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>