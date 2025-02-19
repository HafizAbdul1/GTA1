<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/admin.css']) <!-- Vite CSS link -->
</head>
<body>
    <div class="sidebar">
        <h2>GTA Admin</h2>
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Apprenticeships</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <header>
            <h1>Dashboard</h1>
        </header>
        
        <section class="cards">
            <div class="card">
                <h3>Total Apprentices</h3>
                <p>120</p>
            </div>
            <div class="card">
                <h3>Employers</h3>
                <p>45</p>
            </div>
            <div class="card">
                <h3>New Applications</h3>
                <p>12</p>
            </div>
        </section>

        <section class="recent">
            <h2>Recent Applications</h2>
            <table>
                <tr>
                    <th>Name</th>
                    <th>Apprenticeship</th>
                    <th>Status</th>
                </tr>
                <tr>
                    <td>John Doe</td>
                    <td>Software Developer</td>
                    <td>Pending</td>
                </tr>
                <tr>
                    <td>Jane Smith</td>
                    <td>Marketing Assistant</td>
                    <td>Approved</td>
                </tr>
            </table>
        </section>
    </div>
</body>
</html>
