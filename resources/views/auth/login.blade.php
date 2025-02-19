<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- External Stylesheets -->
    <link rel="stylesheet" href="{{ asset('stylesheets/desktop.css') }}">
    @vite('resources/css/desktop.css') <!-- Ensure Vite is properly configured -->
</head>

<body>

    <div class="nav">
        <ul>
            <li class="Home"><img src="{{ asset('images/LogoGta.png') }}" alt="Logo"></li>
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('example.route') }}">Example</a></li>
            <li><a href="{{ route('example.route') }}">Example</a></li>
        </ul>
    </div>

    <div class="login-container">
        <form class="login-form" method="POST" action="{{ route('login.store') }}">
            @csrf
            <div>
                <label for="id">Enter ID:</label><br>
                <input type="text" id="id" name="id" class="id-password" required><br>
            </div>

            <div>
                <label for="password">Enter Password:</label><br>
                <input type="password" id="password" name="password" class="id-password" required><br>
            </div>

            @if($errors->any())
                <div class="error-messages">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <footer>
        <ul>
            <li class="footer-email">admin@doncastergta.co.uk</li>
            <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
            <li><a href="TermsCond.html">Terms & Conditions</a></li>
            <li>+44(0)1302 832831</li>
            <li>©2025 by GTA Group Training Association.</li>
        </ul>
    </footer>

</body>
</html>
