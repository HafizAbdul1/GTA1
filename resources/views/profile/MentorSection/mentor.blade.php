<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Portal</title>
    <link rel="stylesheet" href="../../../css/app.css">
</head>
<body>
    <div class="sidebar">
        <h2>Mentor Portal</h2>
        <ul>
            <li><a href="Mentor.blade.php">Dashboard</a></li>
            <li><a href="MentorMeetings.blade.php">Meetings</a></li>
            <li><a href="MentorApprentices.blade.php">Apprentices</a></li>
            <li><a href="MentorDocuments.blade.php">Documents</a></li>
            <li><a href="MentorSettings.blade.php">Settings</a></li>
        </ul>
    </div>

    <section class="stats">
        <div class="card">
            <h3>Meetings</h3>
            <p>Next meeting: 19th September</p>
        </div>
    </section>

    <div class="content">
        <header>
            <h1>Welcome, Mentor</h1>
            <button onclick="location.href='{{ route('home') }}'">Logout</button>
        </header>

        <section class="upload">
            <h2>Upload Documents</h2>
            <input type="file">
            <button>Upload</button>
        </section>
    </div>

</body>
</html>