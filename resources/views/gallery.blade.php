@extends('layouts.app')

@section('content')
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

<style>
    body {
    background-color: #fafafa;
    background-size: cover;
}
    .hero-banner {
    position: relative;
    width: 100vw;
    height: 500px;
    margin-left: calc(-50vw + 50%);
    background-size: cover;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 50px;
    overflow: hidden;
}

.hero-banner .banner-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://static.wixstatic.com/media/d11927_b1e82ac20ee34d548d3ba84f02e8ed24~mv2.jpg') no-repeat center center;
    background-size: cover;
    background-position: center bottom;
    opacity: 0.7; /* 60% opacity */
    z-index: 1;
}

.hero-banner h1 {
    position: relative;
    z-index: 2; /* Keeps text above the background */
    font-family: 'Cinzel', serif;
    color: #FFD700;
    font-size: 60px;
    font-weight: 700;
    letter-spacing: 3px;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}



    .section-title {
        text-align: center;
        font-size: 40px;
        color: #00274C;
        font-weight: bold;
        margin-top: 60px;
    }

    .team-section {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        padding: 40px 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .team-section img {
        width: 100%;
        max-width: 500px;
        border-radius: 10px;
        margin: 20px;
    }

    .team-text {
        max-width: 600px;
        font-size: 18px;
        color: #333;
        padding: 20px;
    }

   .card-container {
    display: flex;
    flex-direction: column; /* stack cards vertically */
    align-items: center;    /* center cards horizontally */
    gap: 50px;              /* increased space between cards */
    padding: 20px;
}

.gallery-card {
    display: flex;
    flex-direction: row;
    background-color: #3788c7;
    color: white;
    border-radius: 8px;
    overflow: hidden;
    width: 1000px;    /* increased width */
    height: 300px;    /* keep consistent height */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}


.card-img {
    width: 50%;
    height: 100%;
    object-fit: cover;
}

.card-content {
    flex: 1;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 18px;
    font-family: 'Segoe UI', sans-serif;
    color: #fafafa;
    line-height: 1.6;
}


/* Responsive */
@media (max-width: 768px) {
    .gallery-card {
        flex-direction: column;
        width: 90vw;
        height: auto;
    }

    .card-img {
        width: 100%;
        height: 250px;
        border-radius: 12px 12px 0 0;
    }

    .card-content {
        padding: 20px;
        text-align: center;
    }
}




    .card-content .btn {
        margin-top: 10px;
        display: inline-block;
        background-color: #FFD700;
        color: #00274C;
        padding: 8px 16px;
        font-weight: bold;
        text-decoration: none;
        border-radius: 5px;
    }

    @media (max-width: 768px) {
        .gallery-card {
            flex-direction: column;
            text-align: center;
        }

        .card-img {
            border-radius: 12px 12px 0 0;
            width: 100%;
            height: auto;
        }

        .team-section {
            flex-direction: column;
        }
    }
</style>

<!-- Club Hero Section -->
<!-- Club Hero Section -->
<div class="hero-banner">
    <div class="banner-overlay"></div>
    <h1>OUR CLUB</h1>
</div>


<!-- Our Team Section -->

<div class="team-section">
    <img src="https://static.wixstatic.com/media/d11927_327cee66cfee4589bc33741e46c18d1f~mv2.jpg/v1/fill/w_648,h_300,al_c,q_80,usm_0.66_1.00_0.01,enc_avif,quality_auto/d11927_327cee66cfee4589bc33741e46c18d1f~mv2.jpg" alt="Team Photo">

    <div class="team-text">
        <p>Our team is a vibrant mix of passionate innovators, engineers, and thinkers who work together to design and build cutting-edge automotive technology. We focus on collaboration, learning, and pushing boundaries through hands-on projects that simulate real-world engineering experiences. Together, we build more than vehicles—we build the future.</p>
    </div>
</div>

<!-- Our Journey Section -->
<h2 class="section-title">OUR JOURNEY</h2>
<div class="card-container">
    @foreach ($images as $photo)
        <div class="gallery-card">
            <img src="{{ asset('storage/' . $photo->image_path) }}" alt="Gallery Image" class="card-img">
            <div class="card-content">
                <h2>{{ strtoupper($photo->title) }}</h2>
                <p>{{ $photo->description }}</p>
                <p style="font-size: 12px;">{{ $photo->created_at->format('F j, Y') }}</p>

            </div>
        </div>
    @endforeach
</div>
@endsection
