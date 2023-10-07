document.addEventListener('DOMContentLoaded', function() {
    const logoutButton = document.querySelector('.logout_button'); // Seleksi tombol logout
    const logoutPopup = document.getElementById('logout'); // Seleksi popup logout

    logoutButton.addEventListener('click', function() {
      logoutPopup.style.display = 'block'; // Tampilkan popup logout
    });

    var closeButtons = document.querySelectorAll('.logout .close_button');
    closeButtons.forEach(function(closeButton) {
        closeButton.addEventListener('click', function() {
            var overlay = document.querySelector('.overlay');
            var popup = closeButton.closest('.popup');

            overlay.style.display = 'none';
            popup.style.display = 'none';
        });
    });
});

