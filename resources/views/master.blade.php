<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Welcome') | {{ $member['name'] ?? 'Our Team' }}</title>

    <!-- Bootstrap 5, Bootstrap Icons and Google Fonts (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

    <!-- Custom stylesheet (public/css/custom.css) -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body>

    <!-- Shared navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top custom-navbar">
        <div class="container">
            @isset($member)
                <a class="navbar-brand" href="{{ route('home', $member['slug']) }}">{{ $member['name'] }}</a>
            @else
                <a class="navbar-brand" href="{{ route('main') }}">Our<span>Team</span></a>
            @endisset

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#mainNav" aria-controls="mainNav"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    @isset($member)
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                               href="{{ route('home', $member['slug']) }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                               href="{{ route('about', $member['slug']) }}">About Me</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                               href="{{ route('contact', $member['slug']) }}">Contact</a>
                        </li>
                    @endisset
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('main') ? 'active' : '' }}"
                           href="{{ route('main') }}"><i class="bi bi-people me-1"></i>All Members</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page-specific content is inserted here -->
    <main>
        @yield('content')
    </main>

    <!-- Shared footer -->
    <footer class="custom-footer pt-5 mt-5">
        <div class="container">
            <div class="row g-4 pb-4">
                <div class="col-md-6">
                    @isset($member)
                        <h5>{{ $member['name'] }}</h5>
                        <p class="small mb-0">{{ $member['role'] }}, {{ $member['university'] }}</p>
                    @else
                        <h5>Our Team</h5>
                        <p class="small mb-0">Group personal profile website built with Laravel and Bootstrap.</p>
                    @endisset
                </div>
                <div class="col-6 col-md-3">
                    <h5>Pages</h5>
                    <ul class="list-unstyled small">
                        <li><a href="{{ route('main') }}">All Members</a></li>
                        @isset($member)
                            <li><a href="{{ route('home', $member['slug']) }}">Home</a></li>
                            <li><a href="{{ route('about', $member['slug']) }}">About Me</a></li>
                            <li><a href="{{ route('contact', $member['slug']) }}">Contact</a></li>
                        @endisset
                    </ul>
                </div>
                <div class="col-6 col-md-3">
                    <h5>Contact</h5>
                    <ul class="list-unstyled small">
                        @isset($member)
                            <li><i class="bi bi-envelope me-2"></i>{{ $member['email'] }}</li>
                            <li><i class="bi bi-geo-alt me-2"></i>{{ $member['location'] }}</li>
                        @else
                            <li><i class="bi bi-geo-alt me-2"></i>UMPSA, Pahang, Malaysia</li>
                        @endisset
                    </ul>
                </div>
            </div>
            <div class="footer-bottom text-center py-3 small">
                &copy; {{ date('Y') }} {{ $member['name'] ?? 'Our Team' }}. Built with Laravel &amp; Bootstrap.
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')
</body>
</html>
