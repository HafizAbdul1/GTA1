<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentor Apprentices</title>

    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="stylesheets/app.css">
</head>
<body>
<div class="sidebar">
        <h2>Mentor Portal</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="MentorMeetings.blade.php">Meetings</a></li>
            <li><a href="MentorApprentices.blade.php">Apprentices</a></li>
            <li><a href="#">Documents</a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>

    <section class="table">
        <table>
            <tr>
                <th>Apprentice ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <tr>
                <td>00000001</td>
                <td>John</td>
                <td>Smith</td>
            </tr>
            <tr>
                <td>00000002</td>
                <td>Ian</td>
                <td>Thorpe</td>
            </tr>
        </table>
    </section>
</body>
</html>