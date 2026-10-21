@extends('master')

@section('title', 'Our Team')

@section('content')

<!-- Page header -->
<section class="hero page-header">
    <div class="container">
        <p class="eyebrow mb-2">Integrated Application Development Framework</p>
        <h1 class="hero-title fw-bold">Meet Our Team</h1>
        <p class="lead mb-0">Choose a group member to view their personal profile.</p>
    </div>
</section>

<!-- One card per member -->
<section class="container stats-wrap">
    <div class="row g-4">
        @foreach ($members as $slug => $m)
            <div class="col-sm-6 col-lg-3">
                <div class="card hover-card member-card h-100 text-center">
                    <img src="{{ asset('images/' . $m['photo']) }}" alt="Photo of {{ $m['name'] }}"
                         class="member-photo"
                         onerror="this.onerror=null;this.src='{{ asset('images/placeholder.svg') }}'">
                    <div class="card-body">
                        <h5 class="fw-bold mb-1">{{ $m['name'] }}</h5>
                        <p class="text-muted small mb-3">{{ $m['role'] }}</p>
                        <a href="{{ route('home', $slug) }}" class="btn btn-navy btn-sm">
                            View Profile <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
