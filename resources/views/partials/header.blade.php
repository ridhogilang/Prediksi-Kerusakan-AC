<header class="wrapper bg-light">
    <nav class="navbar navbar-expand-lg fancy navbar-light navbar-bg-light caret-none">
        <div class="container">
            <div
                class="navbar-collapse-wrapper bg-white d-flex flex-row flex-nowrap w-100 justify-content-between align-items-center">
                <div class="navbar-brand w-100">
                    <a href="/">
                    </a>
                </div>
                <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                    <div class="offcanvas-header d-lg-none">
                        <a href="./index.html"><img src="./assets/img/logo-light.png"
                                srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="/tutorial">Tutorial</a></li>
                            <li class="nav-item"><a class="nav-link" href="/kerusakan">Jenis Kerusakan</a></li>
                            <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        </ul>

                    </div>
                </div>
                <!-- /.offcanvas-body -->
                <!-- /.navbar-collapse -->
                <div class="navbar-other w-100 d-flex ms-auto">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">
                        {{-- <li class="nav-item dropdown language-select text-uppercase">
                            <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                            </ul>
                        </li> --}}
                        @guest
                            <li class="nav-item d-none d-md-block">
                                <a href="/login" class="btn btn-sm btn-gradient gradient-7 rounded-pill">Login</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Hello,
                                    {{ auth()->user()->name }}</a>
                                <ul class="dropdown-menu">
                                    @if (Auth::user()->role_id == 1)
                                        <li class="nav-item"><a class="dropdown-item" href="/datatraining">Dashboard
                                                Admin</a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                            class="dropdown-item">
                                            Log Out
                                        </a>

                                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>

                            </li>
                        @endguest
                        <li class="nav-item d-lg-none">
                            <button class="hamburger offcanvas-nav-btn"><span></span></button>
                        </li>
                    </ul>
                    <!-- /.navbar-nav -->
                </div>
                <!-- /.navbar-other -->
            </div>
            <!-- /.navbar-collapse-wrapper -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- /.navbar -->

    <!-- /.navbar -->
</header>
