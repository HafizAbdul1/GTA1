<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GTA Apprenticeship Progress Tracker</title>

    
    @vite(['resources/css/app.css'])
</head>
<body>e
    <header>
        <h1>GTA Apprenticeship Progress Tracker</h1>
    </header>
    
    <div class="container">
        <img src="{{ asset('images/LogoGta.png') }}" alt="GTA logo" class="Logo">
        <p>This is a robust application created in order to store and track apprenticeship progression.</p>
        
        <button onclick="location.href='{{ route('apprenticesection.apprentice') }}'">Log In</button>

        <img src="{{ asset('images/LogosExtra.png') }}" alt="Extra logos of GTA" class="ExtraLogos">
    </div>
    
    <footer>
        <p>admin@doncastergta.co.uk</p>
        <p><a href="#">Privacy Policy</a> || <a href="#">Terms & Conditions</a></p>
        <p>+44 (0)1302 832831</p>
        <p>&copy; 2025 by GTA Group Training Association</p>
</footer>
</body>
</html>
