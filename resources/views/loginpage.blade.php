<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylesheets/desktop.css"> 
    @vite(['resources/css/desktop.css'])
</head>

<body>
    <div class="nav">
        <ul>
            <li class="Home"><img src="{{asset('images/LogoGta.png')}}" alt=""> </li>
            <li>Login</li>
            <li>Example</li>
            <li>Example</li>
        </ul>
    </div>

    <div class="login-container">
        <img src="images/LogoGta.png" alt="GTA logo" class="logo">
        <form class="login-form">
            <label for="Email">Enter Email:</label><br>
            <input type="email" id="Email" name="Email" class="email-password" required><br>
            <label for="Password">Enter Password:</label><br>
            <input type="password" id="Password" name="Password" class="email-password" required><br>
            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <footer>
        <ul>
            <li class="footer-email">admin@doncastergta.co.uk</li>
            <li><a href="PrivacyPolicy.html">Privacy Policy</a></li>
            <li><a href="TermsCond.html">Terms & Conditions</a></li>
            <li>+44(0)1302 832831</li>
            <li>©2025 by GTA group training association.</li>
        </ul>
    </footer>
</body>
</html>
