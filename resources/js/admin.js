const toggleButton = document.getElementById('toggle-btn');
const sidebar = document.getElementById('sidebar');

function toggleSidebar() {
  sidebar.classList.toggle('close');
  toggleButton.classList.toggle('rotate');
  
  closeAllSubMenus();  // Close any open submenus when the sidebar is toggled
}

function toggleSubMenu(button) {
  const subMenu = button.nextElementSibling;

  // If the submenu is not already shown, close all submenus
  if (!subMenu.classList.contains('show')) {
    closeAllSubMenus();
  }

  // Toggle the current submenu
  subMenu.classList.toggle('show');
  button.classList.toggle('rotate');
  
  // If the sidebar is closed, re-open it and rotate the toggle button back
  if (sidebar.classList.contains('close')) {
    sidebar.classList.remove('close');
    toggleButton.classList.remove('rotate');
  }
}

function closeAllSubMenus() {
  // Close all submenus and remove rotation from their respective buttons
  const subMenus = sidebar.querySelectorAll('.sub-menu');
  subMenus.forEach(subMenu => {
    subMenu.classList.remove('show');
    const button = subMenu.previousElementSibling;
    if (button && button.classList.contains('rotate')) {
      button.classList.remove('rotate');
    }
  });
}

// Attach event listeners to submenu buttons
const subMenuButtons = sidebar.querySelectorAll('.dropdown-btn');
subMenuButtons.forEach(button => {
  button.addEventListener('click', function() {
    toggleSubMenu(button);
  });
});

// Attach event listener to sidebar toggle button
toggleButton.addEventListener('click', function() {
  toggleSidebar();
});
