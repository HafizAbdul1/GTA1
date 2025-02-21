<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA Apprenticeship Progress Tracker</title>

    <!-- Vite link to external CSS file -->
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



<section class="hero">
    <div class="hero-container">
        <!-- Left Side - Logo -->
        <div class="image-logo">
            <img src="../public/images/LogoGta.png" alt="GTA Logo">
        </div>

        <!-- Right Side - Text -->
        <div class="hero-content">
            <h1>Group Training Association</h1>
            <p> At Group Training Association, we connect ambitious individuals with leading businesses  
                through high-quality apprenticeships and workforce training. Our programmes provide  
                hands-on experience, industry knowledge, and mentorship to help individuals build  
                successful careers. Partnering with top employers, we ensure learners gain the skills  
                they need while businesses benefit from a highly trained workforce.
            </p>

            <!-- Login Button (Replaced Previous Button) -->
            <button class="login-btn" onclick="location.href='{{ route('login') }}'">Log In</button>
        </div>
    </div>
</section>




    <!-- Footer -->
    <footer>
        <p>© 2025 Group Training Association. All Rights Reserved.</p>
    </footer>

</body>
</html>