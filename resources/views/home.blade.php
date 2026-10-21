@extends('master')

@section('title', 'Home')

@section('content')

<!-- Hero section -->
<section class="hero">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7 order-2 order-lg-1 text-center text-lg-start">
                <p class="eyebrow mb-2">{{ $member['role'] }}</p>
                <h1 class="hero-title fw-bold mb-3">Hi, I'm {{ $member['name'] }}.</h1>
                <p class="lead mb-4">{{ $member['tagline'] }}</p>
                <a href="{{ route('about', $member['slug']) }}" class="btn btn-gold btn-lg me-2 mb-2">
                    <i class="bi bi-person-lines-fill me-1"></i>About Me
                </a>
                <a href="{{ route('contact', $member['slug']) }}" class="btn btn-outline-gold btn-lg mb-2">
                    <i class="bi bi-send me-1"></i>Contact Me
                </a>
                <div class="mt-3">
                    <a href="{{ $member['social']['github'] }}" class="btn social-btn me-1" aria-label="GitHub"><i class="bi bi-github"></i></a>
                    <a href="{{ $member['social']['linkedin'] }}" class="btn social-btn me-1" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="{{ $member['social']['instagram'] }}" class="btn social-btn" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center">
                <div class="photo-frame">
                    <img src="{{ asset('images/' . $member['photo']) }}" alt="Profile photo of {{ $member['name'] }}"
                         class="profile-photo"
                         onerror="this.onerror=null;this.src='{{ asset('images/placeholder.svg') }}'">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats band -->
<section class="container stats-wrap">
    <div class="card">
        <div class="card-body py-4">
            <div class="row text-center g-3">
                @foreach ($member['stats'] as $stat)
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-number">{{ $stat[0] }}</div>
                        <small class="text-muted">{{ $stat[1] }}</small>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- What I do -->
<section class="container py-5 mt-4">
    <div class="section-heading">
        <div class="eyebrow">What I Do</div>
        <h2>Skills I Bring</h2>
        <div class="divider"></div>
    </div>
    <div class="row g-4">
        @foreach ($member['highlights'] as $item)
            <div class="col-md-4">
                <div class="card hover-card h-100 p-3 text-center">
                    <div class="card-body">
                        <div class="icon-box mb-3"><i class="bi {{ $item[0] }}"></i></div>
                        <h5 class="fw-bold">{{ $item[1] }}</h5>
                        <p class="text-muted mb-0">{{ $item[2] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<!-- Call to action -->
<section class="container pb-4">
    <div class="cta-banner text-center">
        <h3 class="fw-bold mb-2">Want to know more about me?</h3>
        <p class="mb-4 opacity-75">Read about my background and skills, or send me a message.</p>
        <a href="{{ route('about', $member['slug']) }}" class="btn btn-gold me-2">About Me</a>
        <a href="{{ route('contact', $member['slug']) }}" class="btn btn-outline-gold">Contact</a>
    </div>
</section>

@endsection
