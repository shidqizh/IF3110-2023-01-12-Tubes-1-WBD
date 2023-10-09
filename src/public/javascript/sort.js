const songList = document.getElementById('songList');
const sortSelect = document.getElementById('sort-song');

function sortByTitle() {
  const songs = Array.from(songList.getElementsByClassName('items'));
  
  songs.sort((a, b) => {
    const songTitleA = a.querySelector('h5').textContent.toLowerCase();
    const songTitleB = b.querySelector('h5').textContent.toLowerCase();
    
    if (songTitleA < songTitleB) {
      return -1;
    } else if (songTitleA > songTitleB) {
      return 1;
    } else {
      return 0;
    }
  });
  
  songs.forEach(song => songList.appendChild(song));
}

function sortByArtist() {
  const songs = Array.from(songList.getElementsByClassName('items'));
  
  songs.sort((a, b) => {
    const artistA = a.querySelector('.sub').textContent.toLowerCase();
    const artistB = b.querySelector('.sub').textContent.toLowerCase();
    
    if (artistA < artistB) {
      return -1;
    } else if (artistA > artistB) {
      return 1;
    } else {
      return 0;
    }
  });
  
  songs.forEach(song => songList.appendChild(song));
}

sortSelect.addEventListener('change', function() {
  const sortBy = sortSelect.value;
  
  if (sortBy === 'title') {
    sortByTitle();
  } else if (sortBy === 'artist') {
    sortByArtist();
  }
});