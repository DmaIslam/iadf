@extends('master')

@section('title', 'Contact')

@section('content')

<!-- Page header -->
<section class="hero page-header">
    <div class="container">
        <p class="eyebrow mb-2">Let's talk</p>
        <h1 class="fw-bold">Contact {{ $member['name'] }}</h1>
        <p class="lead mb-0">Have a question or want to work together? Send me a message.</p>
    </div>
</section>

<div class="container stats-wrap">
    <div class="row g-4">

        <!-- Contact form (front-end only, no backend processing) -->
        <div class="col-lg-7">
            <div class="card p-4 p-md-5">
                <h4 class="card-title-line">Send a Message</h4>

                <div id="successMsg" class="alert alert-success d-none" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>Thank you! Your message has been received.
                </div>

                <form id="contactForm" class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold">Name</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control" id="name" name="name"
                                   placeholder="Enter your full name" required>
                            <div class="invalid-feedback">Please enter your name.</div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <div class="input-group has-validation">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="name@example.com" required>
                            <div class="invalid-feedback">Please enter a valid email address.</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="message" class="form-label fw-semibold">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5"
                                  placeholder="Write your message here..." required></textarea>
                        <div class="invalid-feedback">Please enter your message.</div>
                    </div>

                    <button type="submit" class="btn btn-gold btn-lg w-100">
                        <i class="bi bi-send me-1"></i>Send Message
                    </button>
                </form>
            </div>
        </div>

        <!-- Contact information -->
        <div class="col-lg-5">
            <div class="card p-4 mb-4">
                <h4 class="card-title-line">Get in Touch</h4>
                <div class="d-flex align-items-center mb-3">
                    <div class="contact-icon me-3"><i class="bi bi-envelope"></i></div>
                    <div><strong>Email</strong><br><span class="text-muted small">{{ $member['email'] }}</span></div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="contact-icon me-3"><i class="bi bi-telephone"></i></div>
                    <div><strong>Phone</strong><br><span class="text-muted small">{{ $member['phone'] }}</span></div>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <div class="contact-icon me-3"><i class="bi bi-geo-alt"></i></div>
                    <div><strong>Location</strong><br><span class="text-muted small">{{ $member['location'] }}</span></div>
                </div>
                <hr>
                <p class="fw-semibold mb-2">Find me online</p>
                <a href="{{ $member['social']['github'] }}" class="btn social-btn dark me-1" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="{{ $member['social']['linkedin'] }}" class="btn social-btn dark me-1" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="{{ $member['social']['instagram'] }}" class="btn social-btn dark" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>

            <div class="cta-banner text-center">
                <h5 class="text-white fw-bold">Available for opportunities</h5>
                <p class="small opacity-75 mb-0">Internships, projects and collaborations are welcome.</p>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    // Front-end validation only: the assignment does not require backend processing.
    const form = document.getElementById('contactForm');
    const successMsg = document.getElementById('successMsg');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        if (!form.checkValidity()) {
            event.stopPropagation();
            form.classList.add('was-validated');
            return;
        }
        successMsg.classList.remove('d-none');
        form.reset();
        form.classList.remove('was-validated');
    });
</script>
@endsection
