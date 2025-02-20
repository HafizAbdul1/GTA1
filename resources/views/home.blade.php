<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA Apprenticeship Progress Tracker</title>

    @vite(['resources/css/home.css'])
</head>

<body>

    <!-- Header Section -->
<header>
    <nav>
        <div class="logo">
            <img src="../public/images/LogoGta.png" alt="GTA Logo"> <!-- Replace with your logo -->
        </div>
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Apprenticeships</a></li>
            <li><a href="#">Employers</a></li>
            <li><a href="#">Training</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

    <!-- Main Content Section -->
<!-- Main Content Section -->
<!-- Main Content Section -->
<main>
    <div class="container">
        <div class="intro">
            <img src="{{ asset('images/LogoGta.png') }}" alt="GTA logo" class="Logo">
            <p>This is a robust application created in order to store and track apprenticeship progression. It helps
                both apprentices and employers monitor the learning journey and development.</p>
            <!-- Button to log in -->
            <button class="login-btn" onclick="location.href='{{ route('login') }}'">Login</button>
        </div>
        <!-- Extra Logos -->
        <div class="extra-logos">
            <img src="{{ asset('images/LogosExtra.png') }}" alt="Extra logos of GTA" class="ExtraLogos">
        </div>
    </div>
</main>

<!-- Footer Section -->
<footer>
    <div class="footer-container">
        <p>Contact Us: admin@doncastergta.co.uk</p>
        <p><a href="#">Privacy Policy</a> || <a href="#">Terms & Conditions</a></p>
        <p>Phone: +44 (0)1302 832831</p>
        <p>&copy; 2025 by GTA Group Training Association</p>
    </div>
</footer>

</body>
</html>