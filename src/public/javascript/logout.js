document.addEventListener('DOMContentLoaded', function() {
    var openButtons = document.querySelectorAll('button[data-target]');
    openButtons.forEach(function(openButton) {
        openButton.addEventListener('click', function() {
            var target = openButton.getAttribute('data-target');
            var overlay = document.querySelector('.overlay');
            var popup = document.querySelector(target);

            overlay.style.display = 'block';
            popup.style.display = 'block';
        });
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