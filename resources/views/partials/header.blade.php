{{-- <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" id="navbar_header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div id="logo-header">
                <img src="/images/header_logo-removebg.png" alt="logo">
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header> --}}
<header>
    <nav id='hype-custom-nav'
        class="fixed-header container d-flex margin-x-auto rounded-4 align-items-center justify-content-between">
        <div class="d-flex p-1">
            <div class="img-container py-1">
                <img class="img-fluid" src="/images/header_logo-removebg.png" alt="logo">
            </div>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-row  align-items-center gap-5 text-white">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }} "
                            aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() == 'journeys.index' ? 'active' : '' }}"
                            aria-current="page" href="{{ route('journeys.index') }}">Journeys</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Page2</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="user-account gap-3 d-flex fs-3 align-self-stretch align-items-end">
            <div id='hype-nav-search-button' class="icon-container rounded-top-2" role="button">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div id='hype-nav-login-button' class="icon-container rounded-top-2" role="button">
                <i class="fa-solid fa-user"></i>
            </div>
            <div id='hype-nav-search-bar-input'
                class="search-bar-input bar-input active-color rounded-bottom-4 position-absolute container d-none">
                <form class="d-flex p-3" role="search">
                    <input class="form-control me-4 bg-dark-subtle" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-danger btn-mine text-white hover-size" type="submit">Search</button>
                </form>
            </div>
            <div id='hype-nav-login-bar-input'
                class="bar-input active-color rounded-bottom-4 position-absolute container d-flex p-0 d-none">
                <div class="login-container w-50 border-end border-dark border-2 p-3 m-1">
                    <form class="fs-6 d-flex flex-column">
                        <div class="mb-1">
                            <label for="InputLoginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="InputLoginEmail" placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <label for="InputLoginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="InputLoginPassword" placeholder="Password">
                        </div>
                        <div class="mb-0 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit"
                            class="btn btn-dark align-self-center text-white hover-size fs-5">Login</button>
                    </form>
                </div>
                <div class="singup-container w-50 p-3">
                    <form class="fs-6 d-flex flex-column h-100">
                        <div class="mb-1">
                            <label for="InputLoginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="InputLoginEmail" placeholder="Email">
                        </div>
                        <div class="mb-2">
                            <label for="InputLoginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="InputLoginPassword" placeholder="Password">
                        </div>
                        <button type="submit"
                            class="btn btn-dark align-self-center text-white hover-size fs-5 mt-auto">Sign
                            up</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</header>
