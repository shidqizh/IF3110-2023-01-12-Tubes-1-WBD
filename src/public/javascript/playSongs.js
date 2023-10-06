const music = new Audio('../../public/songs/Kata.mp3');

function autoplayMusic() {
    music.play();
    const playButton = document.querySelector('.bi-play-circle-fill');
    if (playButton) {
        playButton.classList.remove('bi-play-circle-fill');
        playButton.classList.add('bi-pause-btn-fill');
    }
}

// Memanggil fungsi autoplayMusic setelah halaman dimuat
document.addEventListener('DOMContentLoaded', () => {
    autoplayMusic();
});


function playSong(play_button){
    if(music.paused){
        music.play();
        play_button.classList.remove('bi-play-circle-fill');
        play_button.classList.add('bi-pause-btn-fill');
    }else {
        music.pause();
        play_button.classList.remove('bi-pause-btn-fill');
        play_button.classList.add('bi-play-circle-fill');
    }
    music.addEventListener('ended', function() {
        // Ketika musik selesai, ganti ikon tombol kembali ke play
        play_button.classList.remove('bi-pause-btn-fill');
        play_button.classList.add('bi-play-circle-fill');
    });
}

let start = document.getElementById('mulai');
let selesai = document.getElementById('selesai');
let seek = document.getElementById('seek');
let garis2 = document.getElementById('garis2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate', function(){
    let current = music.currentTime;
    let duration = music.duration;

    let minutes1 = Math.floor(duration / 60);
    let seconds1 = Math.floor(duration % 60);

    if(seconds1 < 10){
        seconds1 = `0${seconds1}`;
    }

    selesai.innerText = `${minutes1}:${seconds1}`;

    let minutes2 = Math.floor(current / 60);
    let seconds2 = Math.floor(current % 60);

    if(seconds2 < 10){
        seconds2 = `0${seconds2}`;
    }
    start.innerText = `${minutes2}:${seconds2}`;

    let jalan = parseInt(current / duration * 100);
    seek.value = jalan;
    
    let seekPosition = seek.value;
    garis2.style.width = `${seekPosition}%`;
    dot.style.left = `${seekPosition}%`;
});

seek.addEventListener('change', function(){
    music.currentTime = seek.value * music.duration / 100;
});


let icon_vol = document.getElementById('icon_vol');
let vol = document.getElementById('vol');
let garis_volume = document.getElementsByClassName('garis_volume')[0];
let dot_vol = document.getElementById('dot_vol');

vol.addEventListener('change', function() {
    if (vol.value == 0){
        icon_vol.classList.remove('bi-volume-up');
        icon_vol.classList.remove('bi-volume-down');
        icon_vol.classList.add('bi-volume-mute');
    }
    if (vol.value > 0 && vol.value < 50){
        icon_vol.classList.remove('bi-volume-mute');
        icon_vol.classList.remove('bi-volume-up');
        icon_vol.classList.add('bi-volume-down');
    }
    if (vol.value >= 50){
        icon_vol.classList.remove('bi-volume-mute');
        icon_vol.classList.remove('bi-volume-down');
        icon_vol.classList.add('bi-volume-up');
    }
    let vol1 = vol.value;
    garis_volume.style.width = `${vol1}%`;
    dot_vol.style.left = `${vol1}%`;
    music.volume = vol1 / 100;

});

let index = 0;
let poster_play =document.getElementById('poster_play');

Array


const daftar_lagu = [
    {
        id: '1',
        judul: ' December <br><div class="sub">Neck Deep</div>',
        poster:"../img/december.jpg",
    },
    {
        id: '2',
        judul: ' Off My Face <br><div class="sub">Justin Bieber</div>',
        poster:"../img/off my face.webp",
    },
    {
        id: '3',
        judul: ' A part Of Me <br><div class="sub">Neck Deep</div>',
        poster:"../img/apartofme.jpg",
    },
]

Array.from(document.getElementsByClassName('daftar_lagu')).forEach((e, i) => {
    e.getElementsByTagName('img')[0].src = daftar_lagu[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML = daftar_lagu[i].judul;
});



