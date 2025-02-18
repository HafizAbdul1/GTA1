<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <th>Meeting Date</th>
                <th>Meeting With</th>
                <th>Meeting Information</th>
            </tr>
            <tr>
                <td>22/02/25</td>
                <td>John Smith</td>
                <td>Discuss progress</td>
            </tr>
            <tr>
                <td>25/02/25</td>
                <td>Ian Thorpe</td>
                <td>Attendance checkup</td>
            </tr>
        </table>
    </section>
</body>
</html>