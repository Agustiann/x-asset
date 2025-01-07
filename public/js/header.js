
function toggleLogoutMenu() {
    var logoutMenu = document.getElementById('logout-menu');
    
    if (logoutMenu.style.display === 'block') {
        logoutMenu.style.display = 'none';
    } else {
        logoutMenu.style.display = 'block';
    }
}

window.addEventListener('click', function(event) {
    var logoutMenu = document.getElementById('logout-menu');
    var username = document.querySelector('.username');
    
    if (!logoutMenu.contains(event.target) && event.target !== username) {
        logoutMenu.style.display = 'none';
    }
});
