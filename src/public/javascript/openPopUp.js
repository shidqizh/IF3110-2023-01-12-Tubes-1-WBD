
var closeButtons = document.querySelectorAll('.close_button');
closeButtons.forEach(function(closeButton) {
closeButton.addEventListener('click', function() {
    var overlay = document.querySelector('.overlay');
    var popup = closeButton.closest('.popup');

    overlay.style.display = 'none';
    popup.style.display = 'none';
});
});
    

function edit(event) {
    event.preventDefault();
    const editSongElement = document.getElementById('editSong');
    const overlayElement = document.getElementById('overlay');
    
    if (editSongElement.style.display === 'none' || editSongElement.style.display === '') {
        editSongElement.style.display = 'block';
        overlayElement.style.display = 'block';
    } else {
        editSongElement.style.display = 'none';
        overlayElement.style.display = 'none';
    }
}


function delete_song(event) {
    event.preventDefault();
    const editSongElement = document.getElementById('deleteSong');
    const overlayElement = document.getElementById('overlay');
    
    if (editSongElement.style.display === 'none' || editSongElement.style.display === '') {
        editSongElement.style.display = 'block';
        overlayElement.style.display = 'block';
    } else {
        editSongElement.style.display = 'none';
        overlayElement.style.display = 'none';
    }
}
































// function profileMenu() {
//     const addSongElement = document.getElementById('addSong');
//     const overlayElement = document.getElementById('overlay');
    
//     if (addSongElement.style.display === 'none' || addSongElement.style.display === '') {
//       addSongElement.style.display = 'block';
//       overlayElement.style.display = 'block';
//     } else {
//       addSongElement.style.display = 'none';
//       overlayElement.style.display = 'none';
//     }
//   }

//   var closeButtons = document.querySelectorAll('.addSong .close_button');
//   closeButtons.forEach(function(closeButton) {
//       closeButton.addEventListener('click', function() {
//           var overlay = document.querySelector('.overlay');
//           var popup = closeButton.closest('.popup');

//           overlay.style.display = 'none';
//           popup.style.display = 'none';
//       });
//   });
