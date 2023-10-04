const collection = document.getElementById('collection_id');
const history = document.getElementById('history_id');
const recommended = document.getElementById('recommended_id');

const dariPlaylist = document.getElementById('dariplaylist_id');
const dariHistory = document.getElementById('darihistory_id');
const dariRecommended = document.getElementById('darirecommended_id');

collection.addEventListener('click', function(){
    collection.classList.add('active');
    history.classList.remove('active');
    recommended.classList.remove('active');

    dariPlaylist.style.position = "absolute";
    dariPlaylist.style.transform = "translateY(0px)";

    dariHistory.style.position = "absolute";
    dariHistory.style.transform = "translateY(400px)";

    dariRecommended.style.position = "absolute";
    dariRecommended.style.transform = "translateY(800px)";
});

history.addEventListener('click', function(){
    history.classList.add('active');
    collection.classList.remove('active');
    recommended.classList.remove('active');

    dariPlaylist.style.position = "absolute";
    dariPlaylist.style.transform = "translateY(400px)";

    dariHistory.style.position = "absolute";
    dariHistory.style.transform = "translateY(0px)";

    dariRecommended.style.position = "absolute";
    dariRecommended.style.transform = "translateY(800px)";
});

recommended.addEventListener('click', function(){
    recommended.classList.add('active');
    history.classList.remove('active');
    collection.classList.remove('active');

    dariPlaylist.style.position = "absolute";
    dariPlaylist.style.transform = "translateY(400px)";

    dariHistory.style.position = "absolute";
    dariHistory.style.transform = "translateY(400px)";

    dariRecommended.style.position = "absolute";
    dariRecommended.style.transform = "translateY(0px)";
});



let subNav = document.getElementById('subNav');
let editProf = document.getElementById('edit_profile_1');

function toggleMenu(){
    subNav.classList.toggle("open");
}

function openEditProfile(){
    editProf.classList.toggle("open");
}


const discoverFrame = document.getElementById('discoverFrame');
const albumFrame = document.getElementById('albumFrame');
const artistFrame = document.getElementById('artistFrame');

const discoverBtn = document.getElementById('discover');
const albumBtn = document.getElementById('album');
const artistBtn = document.getElementById('artist');

discoverBtn.addEventListener('click', function(){
    discoverFrame.classList.add('active');
    discoverFrame.classList.remove('inactive');
    albumFrame.classList.remove("active");
    albumFrame.classList.add("inactive");
    artistFrame.classList.remove("active");
    artistFrame.classList.add("inactive");
    discoverBtn.classList.add("active");
    albumBtn.classList.remove("active");
    artistBtn.classList.remove("active");
});

albumBtn.addEventListener("click", function () {
    albumFrame.classList.add("active");
    albumFrame.classList.remove("inactive");
    discoverFrame.classList.remove("active");
    discoverFrame.classList.add("inactive");
    artistFrame.classList.remove("active");
    artistFrame.classList.add("inactive");
    albumBtn.classList.add("active");
    discoverBtn.classList.remove("active");
    artistBtn.classList.remove("active");
});

artistBtn.addEventListener("click", function () {
    artistFrame.classList.add("active");
    artistFrame.classList.remove("inactive");
    discoverFrame.classList.remove("active");
    discoverFrame.classList.add("inactive");
    albumFrame.classList.remove("active");
    albumFrame.classList.add("inactive");
    artistBtn.classList.add("active");
    discoverBtn.classList.remove("active");
    albumBtn.classList.remove("active");
});




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


