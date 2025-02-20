<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/login.css']) <!-- Link admin CSS -->
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
            <li><a href="home">Home</a></li>
            <li><a href="#">Apprenticeships</a></li>
            <li><a href="#">Employers</a></li>
            <li><a href="#">Training</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>
</header>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="container">
    <h1>Login</h1>
    <form action="{{ route('login.store') }}" method="POST">
        @csrf
        <label for="id">User ID</label>
        <input type="text" name="id" id="id" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Login</button>
    </form>
</div>


    <!-- Footer -->
    <footer>
        <p>© 2025 Group Training Association. All Rights Reserved.</p>
    </footer>

</body>
</html>