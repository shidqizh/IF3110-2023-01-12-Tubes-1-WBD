const song = document.getElementById('song');
const album = document.getElementById('album');
const artist= document.getElementById('artist');


song.addEventListener('click', function(){
    song.classList.add('active');
    album.classList.remove('active');
    artist.classList.remove('active');
});

album.addEventListener('click', function(){
    album.classList.add('active');
    song.classList.remove('active');
    artist.classList.remove('active');
});

artist.addEventListener('click', function(){
    artist.classList.add('active');
    album.classList.remove('active');
    song.classList.remove('active');
});






function setLabelToMatchTitle() {
    // Ambil judul dari kelas judul di halaman "Discover"
    const discoverTitle = document.querySelector('.judul').innerText;
  
    // Setel nilai label pada kelas song sesuai dengan judul dari halaman "Discover"
    const songLabel = document.querySelector('.label');
    songLabel.innerText = discoverTitle;
  }
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


