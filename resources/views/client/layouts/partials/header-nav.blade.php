<nav class="navbar navbar-expand-lg navbar-light bg-white py-3" style="height: 100px !important">
    <div class="container">
        <a class="navbar-brand" href="/">
            <div class="d-flex justify-content-center">
                <div class="d-inline-flex p-0 pe-2 bd-highlight" style="height:50px;">
                    <img style="height:50px;" class="light-mode-item"
                        src="https://rovegl.com/uploads/images/1690631381_9726443.png" alt="logo">
                </div>
            </div>
        </a>
        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </span>
        </button>
        <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
            <style>
                #navigation a.active {
                    color: #065ff3 !important;
                }
            </style>
            <ul class="navbar-nav navbar-nav-hover mx-auto">
                <li class="nav-item dropdown dropdown-hover mx-0 mx-sm-2">
                    <a class=" nav-link d-flex justify-content-between cursor-pointer align-items-center ps-0 ps-sm-2"
                        style="color:#344767;" href="{{ route('client.about-us') }}">
                        About Us </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-0 mx-sm-2">
                    <a class=" nav-link d-flex justify-content-between cursor-pointer align-items-center ps-0 ps-sm-2"
                        style="color:#344767;" href="{{ route('client.for-client') }}">
                        For Client </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-0 mx-sm-2">
                    <a class=" nav-link d-flex justify-content-between cursor-pointer align-items-center ps-0 ps-sm-2"
                        style="color:#344767;" href="{{ route('client.for-creator') }}">
                        For Creator </a>
                </li>
                <li class="nav-item dropdown dropdown-hover mx-0 mx-sm-2">
                    <a class=" nav-link d-flex justify-content-between cursor-pointer align-items-center ps-0 ps-sm-2"
                        style="color:#344767;" href="{{ route('client.contact-us') }}">
                        Contact Us </a>
                </li>
                <li class="nav-item d-lg-none d-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 mx-auto mt-4">
                                <div class="dropdown px-auto mx-auto">
                                    <button
                                        class="btn bg-white btn-secondary dropdown-toggle text-dark d-flex justify-content-center align-items-center"
                                        type="button" id="languageDropdown" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <span class="flag-icon flag-icon-gb me-1"></span> English </button>
                                    <ul class="dropdown-menu position-absolute" id="list_lang2"
                                        aria-labelledby="languageDropdown">
                                        <li><a class="dropdown-item" href="javascript:;" data-lang="1"><span
                                                    class="flag-icon flag-icon-gb"></span> English</a></li>
                                        <li><a class="dropdown-item" href="javascript:;" data-lang="2"><span
                                                    class="flag-icon flag-icon-vn"></span> Vietnam</a></li>
                                    </ul>
                                </div>
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                                        @else
                                            <a href="{{ route('login') }}"
                                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                in</a>

                                            @if (Route::has('register'))
                                                <a href="{{ route('register') }}"
                                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav d-lg-block d-none">
                <li class="nav-item">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="dropdown">
                                    <button class="btn bg-white btn-secondary dropdown-toggle text-dark" type="button"
                                        id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <span class="flag-icon flag-icon-gb"></span> English </button>
                                    <ul class="dropdown-menu" id="list_lang1" aria-labelledby="languageDropdown">
                                        <li><a class="dropdown-item" href="javascript:;" data-lang="1"><span
                                                    class="flag-icon flag-icon-gb"></span> English</a></li>
                                        <li><a class="dropdown-item" href="javascript:;" data-lang="2"><span
                                                    class="flag-icon flag-icon-vn"></span> Vietnam</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                            in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    </div>
</nav>
