<header class="wrapper bg-soft-primary shadow-lg">
    <nav class="navbar navbar-expand-lg classic navbar-light navbar-bg-light">
        <div class="container flex-lg-row flex-nowrap align-items-center">
            <div class="navbar-brand w-100">
                <a href="{{route('home')}}">
                    <h2>SHOHRUZ.UZ</h2>
                </a>
            </div>
            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                <div class="offcanvas-header d-lg-none">
                    <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="{{route('posts',['id'=>2])}}">Post page</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link 2</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link 3</a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown dropdown-submenu dropend"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                                <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Action</a></li>
                                        <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="dropdown-item" href="#">Another Action</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>

            <div class="navbar-other ms-lg-4">
                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <li class="nav-item d-none d-md-block">
                        <a href="#" class="btn btn-sm btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#modal-signin">Sign In</a>
                    </li>
                    <li class="nav-item d-lg-none">
                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="modal-signin" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content text-center">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <h2 class="mb-3 text-start">Welcome Back</h2>
                    <p class="lead mb-6 text-start">Fill your email and password to sign in.</p>
                    <form class="text-start mb-3">
                        <div class="form-floating mb-4">
                            <input type="email" class="form-control" placeholder="Email" id="loginEmail">
                            <label for="loginEmail">Email</label>
                        </div>
                        <div class="form-floating password-field mb-4">
                            <input type="password" class="form-control" placeholder="Password" id="loginPassword">
                            <span class="password-toggle"><i class="uil uil-eye"></i></span>
                            <label for="loginPassword">Password</label>
                        </div>
                        <a class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign In</a>
                    </form>
                    <p class="mb-1"><a href="#" class="hover">Forgot Password?</a></p>
                    <p class="mb-0">Don't have an account? <a href="#" data-bs-target="#modal-signup" data-bs-toggle="modal" data-bs-dismiss="modal" class="hover">Sign up</a></p>
                    <div class="divider-icon my-4">or</div>
                    <nav class="nav social justify-content-center text-center">
                        <a href="#" class="btn btn-circle btn-sm btn-google"><i class="uil uil-google"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i class="uil uil-facebook-f"></i></a>
                        <a href="#" class="btn btn-circle btn-sm btn-twitter"><i class="uil uil-twitter"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>