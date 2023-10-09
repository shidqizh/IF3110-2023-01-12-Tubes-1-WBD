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
    const discoverTitle = document.querySelector('.judul').innerText;
  
    const songLabel = document.querySelector('.label');
    songLabel.innerText = discoverTitle;
  }


