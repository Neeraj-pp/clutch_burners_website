@extends('layouts.app')

@section('content')
<style>
    body {
    background-color: #fafafa;
    background-size: cover;
    font-family: 'Segoe UI', sans-serif;
}


    .contact-section {
    background-color: #3788c7; /* darkened with some transparency */
    padding: 60px 20px;
    color: white;
    border-radius: 12px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    max-width: 800px;
    margin: 60px auto;
    
}


    .contact-section h2 {
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 20px;
    }

    .info-block {
        background-color: #e89613;
        padding: 20px;
        border-radius: 8px;
        white-space: pre-line;
        font-size: 1.1rem;
        line-height: 1.7;
        margin-bottom: 30px;
        
    }

    .form-control, .btn {
        border-radius: 8px;
    }

    .btn-primary {
        background-color: #f39c12;
        border: none;
    }

    .btn-primary:hover {
        background-color: #e67e22;
    }
</style>

<div class="container">
    <div class="contact-section text-center">
        <h2>📬 Contact Us</h2>

        <!-- Preserved dynamic content with improved styling -->
        <div class="info-block text-start">
            {!! $content->content ?? 'Contact info will be updated soon.' !!}
        </div>

        <!-- Contact form (optional, can be removed if not needed) -->
        <form method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="mb-3 text-start">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="mb-3 text-start">
                <label for="message" class="form-label">Message</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button class="btn btn-primary px-4">Send</button>
            </div>
        </form>
    </div>
</div>
@endsection
