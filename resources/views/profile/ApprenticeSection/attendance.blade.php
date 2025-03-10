<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentice Dashboard</title>

    <!-- Link to external CSS file -->
    @vite(['resources/css/app.css']) <!-- Laravel Vite integration -->

</head>
<body>

    <!-- Sidebar Section -->
    <div class="sidebar">
        <h2>Apprentice Portal</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Progress</a></li>
            <li><a href="#">Meetings</a></li>
            <li><a href="#">Attendance</a></li>
            <li><a href="#">Documents</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content Section -->
    <div class="content">
        <header>
            <h1>Welcome, Apprentice</h1>
            <!-- Logout Button with logout-btn class -->
            <button class="logout-btn" onclick="location.href='{{ route('home') }}'">Logout</button>
        </header>

        <!-- Stats Section -->
        <section class="stats">
            <div class="card">
                <h3>KSB Progress</h3>
                <p>70% Completed</p>
            </div>
            <div class="card">
                <h3>Meetings</h3>
                <p>Next Meeting: 20th Feb</p>
            </div>
            <div class="card">
                <h3>Attendance</h3>
                <p>95% Present</p>
            </div>
        </section>

        <!-- Document Upload Section -->
        <section class="upload">
            <h2>Upload Documents</h2>
            <input type="file">
            <button>Upload</button>
        </section>
    </div>

</body>
</html>
