<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    @vite(['resources/css/admin.css']) 
    @vite(['resources/js/sidemenu.js']) 
</head>
<body>

<nav id="sidebar">
    <ul>
        <!-- Sidebar content -->
    </ul>
    <img src="../../public/images/LogoGta.png" alt="coding2go logo" class="logo">
</nav>

<div class="main-content">
    <div class="content">
        <header>
            <h1>Welcome, {{ Auth::user()->first_name }}</h1>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>
            </form>
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
</div>

</body>
</html>
