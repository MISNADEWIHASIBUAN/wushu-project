@php
$routeActive = Route::currentRouteName();
@endphp

<nav class="navbar navbar-expand-lg p-3 fs-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/') }}img/Logo 8thWJWC-B 1.png" alt="" style="height: 40px;">
            <img src="{{ asset('/') }}img/image 2.png" alt="" style="height: 40px;">
            <img src="{{ asset('/') }}img/image 3.png" alt="" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto text-uppercase">
                <li class="nav-item">
                    <a class="nav-link {{ $routeActive == 'home' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ $routeActive == 'about' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        About
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/about/{{ Str::lower('8thWJWC') }}">ABOUT 8<sup class="text-lowercase">th</sup>WJWC</a></li>
                        <li><a class="dropdown-item" href="/about/{{ Str::lower('IWUF') }}">ABOUT IWUF</a></li>
                        <li><a class="dropdown-item" href="/about/{{ Str::lower('TANGERANG') }}">ABOUT TANGERANG</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $routeActive == 'news' || $routeActive == 'news-detail' ? 'active' : '' }}"
                        href="/news">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ $routeActive == 'galeries' || $routeActive == 'galeries-detail' ? 'active' : '' }}"
                        href="/galeries">Gallery</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle  {{ $routeActive == 'competition' ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Competition
                    </a>
                    <ul class="dropdown-menu text-uppercase">
                        <li><a class="dropdown-item" href="/competition/numbers">Competition NUMBER</a></li>
                        <li><a class="dropdown-item" href="/competition/schedules">SCHEDULE & RESULT</a></li>
                        <li><a class="dropdown-item" href="/competition/medals">MEDALS</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Download</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
