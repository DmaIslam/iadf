@extends('master')

@section('title', 'About Me')

@section('content')

<!-- Page header -->
<section class="hero page-header">
    <div class="container">
        <p class="eyebrow mb-2">Get to know me</p>
        <h1 class="fw-bold">About Me</h1>
        <p class="lead mb-0">My background, skills and the things I enjoy.</p>
    </div>
</section>

<div class="container stats-wrap">
    <div class="row g-4">

        <!-- Profile sidebar -->
        <div class="col-lg-4">
            <div class="card p-3">
                <img src="{{ asset('images/' . $member['photo']) }}" alt="Profile photo of {{ $member['name'] }}"
                     class="profile-photo-sm mb-3"
                     onerror="this.onerror=null;this.src='{{ asset('images/placeholder.svg') }}'">
                <h4 class="fw-bold mb-0">{{ $member['name'] }}</h4>
                <p class="text-muted">{{ $member['role'] }}</p>
                <ul class="list-group list-group-flush small mb-3">
                    <li class="list-group-item"><i class="bi bi-mortarboard me-2"></i>{{ $member['university'] }}</li>
                    <li class="list-group-item"><i class="bi bi-geo-alt me-2"></i>{{ $member['location'] }}</li>
                    <li class="list-group-item"><i class="bi bi-translate me-2"></i>{{ $member['languages'] }}</li>
                    <li class="list-group-item"><i class="bi bi-envelope me-2"></i>{{ $member['email'] }}</li>
                </ul>
                <div class="d-grid">
                    <a href="{{ route('contact', $member['slug']) }}" class="btn btn-navy">
                        <i class="bi bi-envelope me-1"></i>Contact Me
                    </a>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="col-lg-8">

            <!-- Biography -->
            <div class="card p-4 mb-4">
                <h4 class="card-title-line">Who Am I</h4>
                <p class="mb-0">{{ $member['bio'] }}</p>
            </div>

            <!-- Education -->
            <div class="card p-4 mb-4">
                <h4 class="card-title-line">Education</h4>
                <div class="timeline">
                    @foreach ($member['education'] as $edu)
                        <div class="timeline-item {{ $loop->last ? 'mb-0' : '' }}">
                            <span class="period">{{ $edu[0] }}</span>
                            <h6 class="fw-bold mb-0">{{ $edu[1] }}</h6>
                            <small class="text-muted">{{ $edu[2] }}</small>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Skills -->
            <div class="card p-4">
                <h4 class="card-title-line">Skills</h4>
                <div class="row g-4">
                    @foreach ($member['skills'] as $skill)
                        <div class="col-md-6">
                            <div class="d-flex justify-content-between skill-label">
                                <span>{{ $skill[0] }}</span><span>{{ $skill[1] }}%</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" style="width: {{ $skill[1] }}%"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    @foreach ($member['softSkills'] as $soft)
                        <span class="badge badge-soft">{{ $soft }}</span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hobbies -->
<section class="container pt-5 mt-4">
    <div class="section-heading">
        <div class="eyebrow">Outside of Class</div>
        <h2>Hobbies &amp; Interests</h2>
        <div class="divider"></div>
    </div>
    <div class="row g-4 text-center">
        @foreach ($member['hobbies'] as $hobby)
            <div class="col-6 col-md-3">
                <div class="card hover-card h-100 p-3">
                    <div class="icon-box mx-auto mb-3"><i class="bi {{ $hobby[0] }}"></i></div>
                    <h6 class="fw-bold mb-1">{{ $hobby[1] }}</h6>
                    <small class="text-muted">{{ $hobby[2] }}</small>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection
