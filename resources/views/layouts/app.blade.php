<!DOCTYPE html>
<html lang="id">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8f9fa;
        }
        .navbar {
            background: #cfe2ff;
            padding: 15px;
            position: fixed; 
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }
        .footer {
            background: #cfe2ff;
            padding: 20px;
            text-align: center;
            margin-top: 50px;
        }
        .hero-section {
            position: relative;
            text-align: center;
        }
        .hero-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Holtwood One SC', serif;
            font-weight: bold;
            font-size: 32px;
            display: inline-block;
            background: linear-gradient(to bottom, white 80%, black 100%);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
            white-space: nowrap; 
        }
        .hero-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(80%);
            object-fit: cover;
        }
    </style>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand fw-bold text-primary" href="{{ route('home') }}" style="font-size: 24px;">
            TaksirRumah
        </a>
        <a href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" alt="TaksirRumah Logo" width="70">
        </a>
    </div>
</nav>


    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-start">
                <img src="{{ asset('images/logo.png') }}" alt="TaksirRumah Logo" width="100">
            </div>
            <div class="col-md-4 text-center">
                <p class="mb-0">Copyright © 2025 TaksirRumah</p>
            </div>
            <div class="col-md-4 text-end">
                <p class="fw-bold mb-2">Contact Us</p> 
                <a href="#"><img src="{{ asset('images/email.png') }}" alt="Email" width="24"></a>
                <a href="#"><img src="{{ asset('images/whatsapp.png') }}" alt="WhatsApp" width="24"></a>
                <a href="#"><img src="{{ asset('images/social.png') }}" alt="Instagram" width="24"></a>
            </div>
        </div>
    </div>
</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
