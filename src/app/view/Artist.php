<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Artist.css">

    <title>Artist</title>
</head>
<body>
<div class="side">
        <?php require_once 'Side.php' ?>
    </div>
    <div class="main">
        <nav>
            <div class="search_bar">
                <form action="" method="get">
                <div class="search-sort">
                    <div class="search-box">
                        <i class="bi bi-search"></i>
                        <button type="submit"><img src="../../../public/img/search.svg" alt=""></button>
                        <input id="searchInput" type="text" name = "song_title" placeholder="Search...">
                    </div>
                    <div class="sort">
                        <select name="sort-song" id="sort-song" class= "dropdown">
                            <option selected>Sort by</option>
                            <option value="titla">Song Tite</option>
                            <option value="artist">Artist Name</option>
                        </select>
                        <button type="button" id="custom-dropdown">
                            <img src="../../../public/img/dropdown_button.svg" alt="">
                        </button>
                        <button type="submit">
                            <img src="../../../public/img/sort.svg" alt="">
                        </button>
                    </div>
                    <div class = "filter">
                        <select name="filter-genre" id="filter-genre" class= "dropdown">
                            <option selected>Genre</option>
                            <option value="Pop">Pop</option>
                            <option value="RnB">RnB</option>
                            <option value="Dangdut">Dangdut</option>
                            <option value="Country">Country</option>
                        </select>
                        <button type="button" id="custom-dropdown">
                            <img src="../../../public/img/dropdown_button.svg" alt="">
                        </button>
                    </div>
                    <div class = "filter">
                        <select name="filter-artist" id="filter-artist" class= "dropdown">
                            <option selected>Artist</option>
                            <option value="Taylor Swift">Taylor Swift</option>
                            <option value="Adam Levine">Adam Levine</option>
                        </select>
                        <button type="button" id="custom-dropdown">
                            <img src="../../../public/img/dropdown_button.svg" alt="">
                        </button>
                    </div>
                </div>
            </form>
            </div>
            <div class="user">
                <i class="bi bi-person" onclick="toggleMenu()"></i>
            </div>
        </nav>
        <div class="daftar_artist">
            <h4>Daftar Artist</h4>
            <div class="item_artist_wrap" id="songList">
                <?php foreach ($data['artistList'] as $artist) : ?>
                <a class="item_artist" href="<? BASEURL ?>/public/song/index">
                    <img src="../../public/images/1.jpg" alt="" id="">
                    <h5 class="judul">
                    <?= $artist['artist'] ?>
                    </h5>
                    <div class="icon">
                        <div class="add">
                            <i class="bi bi-pencil-square"></i>
                        </div>
                        <div class="delete">
                            <i class="bi bi-trash-fill"></i>
                        </div>
                        <div class="more">
                            <i class="bi bi-three-dots"></i>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>     
    </div>
    <div class="play">
    
    </div>
    <script src="../../public/javascript/functional.js"></script>
    <script>
            const searchInput = document.getElementById('searchInput');
    const songList = document.getElementById('songList');

    // Fungsi untuk memfilter daftar lagu berdasarkan input pencarian
    function filterSongs(searchTerm) {
        // Mengubah daftar lagu menjadi array
        const songs = Array.from(songList.getElementsByClassName('item_artist'));

        // Iterasi melalui setiap lagu dan menyembunyikan/menampilkan sesuai pencarian
        songs.forEach(song => {
            const songTitle = song.querySelector('.judul').textContent.toLowerCase();

            if (songTitle.includes(searchTerm.toLowerCase())) {
                song.style.display = 'block';
            } else {
                song.style.display = 'none';
            }
        });
    }

    // Tambahkan penangan acara untuk saat formulir pencarian diserahkan
    searchInput.addEventListener('input', function (event) {
        event.preventDefault(); // Mencegah pengiriman formulir

        const searchTerm = searchInput.value;
        filterSongs(searchTerm);
    });

    </script>
                    

</body>
</html>
