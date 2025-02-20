<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentice Dashboard</title>
    @vite(['resources/css/admin.css', 'resources/js/admin.js']) 
</head>
<body>

<nav id="sidebar">
    <ul>
      <li>
        <button onclick="toggleSidebar()" id="toggle-btn">
          <img src="{{ asset('images/icons/menu.svg') }}" height="24px" width="24px" alt="Menu">
        </button>
      </li>
      <li>
        <button onclick="toggleSubMenu(this)" class="dropdown-btn">
          <img src="{{ asset('images/icons/apprentice.png') }}" height="24px" width="24px" alt="Apprentice">
          <span>Progress Tracker</span>
        </button>
        <ul class="sub-menu">
          <li><a href="#">KSB</a></li>
          <li><a href="#">View Documents</a></li>
        </ul>
      </li>
      <li>
        <button onclick="toggleSubMenu(this)" class="dropdown-btn">
          <img src="{{ asset('images/icons/employer.png') }}" height="24px" width="24px" alt="Employers">
          <span>Employers</span>
        </button>
        <ul class="sub-menu">
          <li><a href="#">Add New Employer</a></li>
          <li><a href="#">View Employer</a></li>
        </ul>
      </li>
      <li>
        <button onclick="toggleSubMenu(this)" class="dropdown-btn">
          <img src="{{ asset('images/icons/tutor.png') }}" height="24px" width="24px" alt="Mentors">
          <span>Mentors</span>
        </button>
        <ul class="sub-menu">
          <li><a href="#">Add New Mentor</a></li>
          <li><a href="#">View Mentor</a></li>
        </ul>
      </li>
      <li>
        <a href="calendar.html">
          <img src="{{ asset('images/icons/report.png') }}" height="24px" width="24px" alt="Reports">
          <span>Reports</span>
        </a>
      </li>
      <li>
        <a href="profile.html">
          <img src="{{ asset('images/icons/settings.png') }}" height="24px" width="24px" alt="Settings">
          <span>Settings</span>
        </a>
      </li>
      <li>
        <a href="{{ route('login') }}">
          <img src="{{ asset('images/icons/logout.png') }}" height="24px" width="24px" alt="Logout">
          <span>Log out</span>
        </a>
      </li>
    </ul>
    <img src="{{ asset('images/LogoGta.png') }}" alt="Logo" class="logo">
</nav>

<div class="main-content">
    <header>
        <h1>Welcome Back</h1>
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
