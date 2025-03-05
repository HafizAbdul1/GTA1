<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Apprenticeship</title>
    @vite(['resources/css/apprenticeship.css'])
    @vite(['resources/css/sidemenu.css'])  
    @vite(['resources/js/sidemenu.js']) 
</head>
<body>

<nav id="sidebar">

    <ul>
      <li>
        <button onclick=toggleSidebar() id="toggle-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z"/></svg>
        </button>
      </li>
      <li>
        <a href="{{ route('adminsection.admin') }}">
          <img src="../../public/images/icons/home.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Dashboard</span>
        </a>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <img src="../../public/images/icons/apprentice.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Apprenticeships</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="{{ route('adminsection.view-apprenticeship') }}">View Apprenticeships</a></li>
            <li class="active"><a href="{{ route('adminsection.add-apprenticeship') }}">Add Apprenticeship</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <img src="../../public/images/icons/apprentice.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Apprentices</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="{{ route('adminsection.view-apprentice') }}">View Apprentices</a></li>
            <li><a href="{{ route('adminsection.add-apprentice') }}">Add Apprentice</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <img src="../../public/images/icons/employer.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Employers</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="{{ route('adminsection.view-employer') }}">View Employers</a></li>
            <li><a href="{{ route('adminsection.add-employer') }}">Add Employer</a></li>
          </div>
        </ul>
      </li>
      <li>
        <button onclick=toggleSubMenu(this) class="dropdown-btn">
        <img src="../../public/images/icons/tutor.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Trainers</span>
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-361q-8 0-15-2.5t-13-8.5L268-556q-11-11-11-28t11-28q11-11 28-11t28 11l156 156 156-156q11-11 28-11t28 11q11 11 11 28t-11 28L508-372q-6 6-13 8.5t-15 2.5Z"/></svg>
        </button>
        <ul class="sub-menu">
          <div>
            <li><a href="{{ route('adminsection.view-trainer') }}">View Trainers</a></li>
            <li><a href="{{ route('adminsection.add-trainer') }}">Add Trainer</a></li>
          </div>
        </ul>
      </li>
      <li>
        <a href="{{ route('adminsection.reports') }}">
        <img src="../../public/images/icons/report.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Reports</span>
        </a>
      </li>
      <li>
        <a href="{{ route('adminsection.settings') }}">
        <img src="../../public/images/icons/settings.png" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e8eaed"><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-240v-32q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v32q0 33-23.5 56.5T720-160H240q-33 0-56.5-23.5T160-240Zm80 0h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z">
          <span>Settings</span>
        </a>
      </li>
      <li>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <img src="../../public/images/icons/logout.png" height="24px" width="24px" fill="#e8eaed">
            <span>Log out</span>
        </a>
        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
            @csrf
        </form>
    </li>
    </ul>
    <img src="../../public/images/LogoGta.png" alt="coding2go logo" class="logo">

  </nav>



<!-- ================================================= Add Apprenticeship Form ================================================= -->



<div class="main-content">
    <header>
      <h1>Add Apprenticeship</h1>
    </header>

    <form action="{{ route('adminsection.store-apprenticeship') }}" method="POST">
      @csrf

      <label for="apprenticeship_name">Apprenticeship Name:</label>
      <input type="text" id="apprenticeship_name" name="apprenticeship_name" required>

      <label for="years">Duration (Years):</label>
      <input type="number" id="years" name="years" min="1" required>

      <h2>Sections</h2>
      <table id="sectionsTable">
        <thead>
          <tr>
            <th>Section Name</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Rows for sections will be added dynamically here -->
        </tbody>
      </table>

      <div class="button-container">
        <button type="button" class="small-btn left-btn" onclick="addSectionRow()">Add New Section</button>
        <button type="submit" class="small-btn right-btn">Create Apprenticeship</button>
      </div>
    </form>
  </div>

  <script>
// Function to add a new section
function addSectionRow() {
  let table = document.getElementById('sectionsTable').getElementsByTagName('tbody')[0];
  let newRow = table.insertRow();

  newRow.innerHTML = `
    <td>
      <input type="text" name="sections[section_name][]" required>
      <table class="groupsTable" style="display: none;">
        <thead>
          <tr>
            <th>Group Name</th>
            <th>Milestone</th>
            <th>Year</th>
            <th>Individual Weighting</th>
            <th>Progressive Weighting</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <!-- Groups will be added here -->
        </tbody>
      </table>
      <button type="button" class="small-btn add" onclick="addGroupRow(this)">Add New Group</button>
    </td>
    <td>
      <button type="button" class="small-btn remove" onclick="removeSectionRow(this)">Remove Section</button>
    </td>
  `;
}

// Function to remove a section
function removeSectionRow(button) {
  button.closest('tr').remove();
}

// Function to add a new group under a section
function addGroupRow(sectionButton) {
  let sectionRow = sectionButton.closest('tr');
  let groupTable = sectionRow.querySelector('.groupsTable');
  let groupTableBody = groupTable.querySelector('tbody');

  // Show the group header when adding the first group
  groupTable.style.display = "table";

  let newGroupRow = groupTableBody.insertRow();
  newGroupRow.innerHTML = `
    <td><input type="text" name="groups[group_name][]" required></td>
    <td><input type="text" name="groups[milestone][]"></td>
    <td><input type="number" name="groups[year][]" min="1"></td>
    <td><input type="number" name="groups[individual_weighting][]" min="0"></td>
    <td><input type="number" name="groups[progressive_weighting][]" min="0"></td>
    <td class="actions">
      <button type="button" class="remove" onclick="removeGroupRow(this)">Remove Group</button>
      <button type="button" class="add" onclick="addTaskRow(this)">Add New Task</button>
    </td>
    <td>
      <table class="tasksTable" style="display: none;">
        <thead>
          <tr>
            <th>Task Name</th>
            <th>Description</th>
            <th>Due Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Tasks will be added here -->
        </tbody>
      </table>
    </td>
  `;
}

// Function to remove a group
function removeGroupRow(button) {
  let sectionRow = button.closest('tr').closest('tbody').closest('.groupsTable');
  button.closest('tr').remove();

  // Hide the group table if no groups are left
  if (sectionRow.querySelector('tbody').childElementCount === 0) {
    sectionRow.style.display = "none";
  }
}

// Function to add a new task under a group
function addTaskRow(groupButton) {
  let groupRow = groupButton.closest('tr');
  let taskTable = groupRow.querySelector('.tasksTable');
  let taskTableBody = taskTable.querySelector('tbody');

  // Show the task header when adding the first task
  taskTable.style.display = "table";

  let newTaskRow = taskTableBody.insertRow();
  newTaskRow.innerHTML = `
    <td><input type="text" name="tasks[task_name][]" required></td>
    <td><input type="text" name="tasks[description][]"></td>
    <td><input type="date" name="tasks[due_date][]"></td>
    <td><button type="button" class="remove" onclick="removeTaskRow(this)">Remove Task</button></td>
  `;
}

// Function to remove a task
function removeTaskRow(button) {
  let groupRow = button.closest('tr').closest('tbody').closest('.tasksTable');
  button.closest('tr').remove();

  // Hide the task table if no tasks are left
  if (groupRow.querySelector('tbody').childElementCount === 0) {
    groupRow.style.display = "none";
  }
}

  </script>

</body>
</html>
