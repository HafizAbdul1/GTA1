<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apprentice Progress</title>

    <!-- Link to external CSS file -->
    @vite(['resources/css/app.css']) <!-- Laravel Vite integration -->

</head>
<body>

    <!-- Sidebar Section -->
    <div class="sidebar">
        <h2>Apprentice Portal</h2>
        <ul>
            <li><a href="attendance.blade.php">Dashboard</a></li>
            <li><a href="progress.blade.php">Progress</a></li>
            <li><a href="meetings.blade.php">Meetings</a></li>
            <li><a href="attendance.blade.php">Attendance</a></li>
            <li><a href="documents.blade.php">Documents</a></li>
            <li><a href="settings.blade.php">Settings</a></li>
        </ul>
    </div>

    <!-- Main Content Section -->
    <div class="content">
        <header>
            <h1>Apprentice Progress: {{ $apprentice->name }}</h1>
            <!-- Return Button with logout-btn class -->
            <button class="logout-btn" onclick="location.href='{{ route('home') }}'">Return</button>
        </header>

        <!-- Apprentice Details Section -->
        <section class="stats">
            <div class="card">
                <h3>OTJ Target Hours Overall</h3>
                <p>{{ $apprentice->otj_target_hours_overall }}</p>
            </div>
            <div class="card">
                <h3>Attendance</h3>
                <p>{{ $apprentice->attendance }}%</p>
            </div>
            <div class="card">
                <h3>Tutor</h3>
                <p>{{ $apprentice->tutor }}</p>
            </div>
            <div class="card">
                <h3>OTJ Hours Completed to Date</h3>
                <p>{{ $apprentice->otj_hours_completed }}</p>
            </div>
            <div class="card">
                <h3>Employer</h3>
                <p>{{ $apprentice->employer }}</p>
            </div>
            <div class="card">
                <h3>Progress RAG</h3>
                <p class="text-danger">{{ $apprentice->progress_rag }}</p>
            </div>
        </section>

        <!-- Course Progress Section -->
        <section class="course-progress">
            <h2>Course Progress</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Content</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($apprentice->course_progress as $content)
                        <tr>
                            <td>{{ $content->name }}</td>
                            <td>{{ $content->completed ? 'Completed' : 'In Progress' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>

        <!-- Footer Section -->
        <footer>
            <p>Contact Tutor: <a href="mailto:admin@doncastergta.co.uk">admin@doncastergta.co.uk</a></p>
        </footer>
    </div>

</body>
</html>
