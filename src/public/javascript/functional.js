function profileMenu() {
    const addSongElement = document.getElementById('addSong');
    const overlayElement = document.getElementById('overlay');
    
    if (addSongElement.style.display === 'none' || addSongElement.style.display === '') {
      addSongElement.style.display = 'block';
      overlayElement.style.display = 'block';
    } else {
      addSongElement.style.display = 'none';
      overlayElement.style.display = 'none';
    }
  }

  var closeButtons = document.querySelectorAll('.addSong .close_button');
  closeButtons.forEach(function(closeButton) {
      closeButton.addEventListener('click', function() {
          var overlay = document.querySelector('.overlay');
          var popup = closeButton.closest('.popup');

          overlay.style.display = 'none';
          popup.style.display = 'none';
      });
  });

// let subNav = document.getElementById('subNav');
// let editProf = document.getElementById('edit_profile_1');

// function toggleMenu(){
//     subNav.classList.toggle("open");
// }

// function openEditProfile(){
//     editProf.classList.toggle("open");
// }






// function openModalProfile(){
//     var modal = document.getElementById('profileModal');
//     var instance = new bootstrap.Modal(modal);
    
//     instance.show();

//     document.addEventListener('click', function(event) {
//         // Periksa apakah elemen yang diklik bukan bagian dari modal atau elemen trigger modal
//         if (!modal.contains(event.target) && event.target !== document.querySelector('.submenu-link') ) {
//           modalInstance.hide(); // Sembunyikan modal jika klik di luar modal
//         }
//       });
// }

// function openModalLogout(){
//     var modal = document.getElementById('logoutModal');
//     var instance = new bootstrap.Modal(modal);
    
//     instance.show();

//     document.addEventListener('click', function(event) {
//         // Periksa apakah elemen yang diklik bukan bagian dari modal atau elemen trigger modal
//         if (!modal.contains(event.target) && event.target !== document.querySelector('.submenu-link')) {
//           modalInstance.hide(); // Sembunyikan modal jika klik di luar modal
//         }
//       });
// }

// function openModalEdit(){
//     var modal = document.getElementById('editModal');
//     var instance = new bootstrap.Modal(modal);
    
//     instance.show();

//     document.addEventListener('click', function(event) {
//         // Periksa apakah elemen yang diklik bukan bagian dari modal atau elemen trigger modal
//         if (!modal.contains(event.target) && event.target !== document.querySelector('.submenu-link')) {
//           modalInstance.hide(); // Sembunyikan modal jika klik di luar modal
//         }
//       });
// }



// window.addEventListener('click', function() {
//     var modal = document.getElementById('exampleModal');
//     var modalInstance = bootstrap.Modal.getInstance(modal);
//     modalInstance.hide();
//   });


