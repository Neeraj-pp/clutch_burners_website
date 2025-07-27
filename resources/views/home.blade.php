<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SUPRA | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;900&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            color: #fff;
        }
        .hero-section {
            position: relative;
            height: 100vh;
            background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?auto=format&fit=crop&w=1400&q=80') no-repeat center center/cover;
            animation: fadeBackground 20s infinite alternate;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        @keyframes fadeBackground {
            0% {
                background-position: center top;
            }
            100% {
                background-position: center bottom;
            }
        }

        .hero-text {
            z-index: 2;
            background: rgba(0, 0, 0, 0.6);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.6);
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
        }

        /* === Updated Navbar CSS === */
        .custom-navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #121212; /* very dark background */
            box-shadow: 0 2px 8px rgba(0,0,0,0.8);
            font-family: 'Poppins', sans-serif;
            padding: 1rem 2rem;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-brand {
            font-weight: 900;
            font-size: 1.8rem;
            color: #FFD700; /* gold color */
            letter-spacing: 2px;
            text-transform: uppercase;
            user-select: none;
            cursor: default;
        }

        .nav-links {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .nav-link {
            color: #ddd;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.3s ease;
            position: relative;
            padding: 0.2rem 0;
        }

        .nav-link:hover {
            color: #FFD700;
        }

        .btn-admin {
            background: #FFD700;
            color: #121212;
            font-weight: 700;
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            border: none;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            font-size: 0.9rem;
            white-space: nowrap;
        }

        .btn-admin:hover {
            background: #e6c200;
            color: #121212;
            text-decoration: none;
        }

        /* Responsive: stack nav links on small screens */
        @media (max-width: 576px) {
            .custom-navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .nav-links {
                width: 100%;
                justify-content: space-around;
                margin-top: 0.8rem;
            }
        }
        .hero-description {
    font-family: 'Roboto', sans-serif;
    font-weight: 800;
    font-size: 1.3rem;
    line-height: 1.7;
    color: #f0f0f0;
    text-align: justify;
    
    padding: 40px 30px;
 
}


    </style>
</head>
<body>

    <nav class="navbar custom-navbar px-4 py-3">
        <a class="navbar-brand" href="#">SUPRA</a>
        <div class="nav-links">
            <a href="{{ url('/gallery') }}" class="nav-link">Gallery</a>
            <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            <a href="{{ route('admin.login') }}" class="btn btn-admin">Admin Login</a>
        </div>
    </nav>

    <div class="hero-section">
        <div class="hero-text">
            <h1>Welcome to SUPRA Automobile Team</h1>
            <div class="mt-4 hero-description">
    {!! $content->content ?? '<p>No content added yet.</p>' !!}
</div>

        </div>
    </div>

</body>
</html>
