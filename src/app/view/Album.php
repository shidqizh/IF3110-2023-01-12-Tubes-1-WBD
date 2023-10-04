<?php
session_start();
$data1 = $_SESSION['data1']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Album.css">
    <title>Album</title>
</head>
<body>
    <header>
        <div class="lagu">
            <div class="daftar_album">
                <div class="h4">
                    <h4>Daftar Album</h4>
                </div>
                
                <div class="overlay" id="overlay"></div>

                <div class="popup addAlbum" id="addAlbum">
                    <div class="menu">
                        <div class="profile_pic">
                            <h2>Add Album</h2>
                        </div>
                        <hr>

                        <div class="label">
                            <label for="album">Album</label>
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <div class="input">
                            <input type="text" name="album" id="album" placeholder="Album">
                            <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>

                        <div class="label">
                            <label for="artist">Artist</label>
                        </div>
                        <div class="input">
                            <input type="text" name="artist" id="artist" placeholder="Artist">
                        </div>

                        <div class="label">
                            <label for="durasi">Durasi</label>
                        </div>
                        <div class="input">
                            <input type="text" name="durasi" id="durasi" placeholder="Durasi">
                        </div>

                        <div class="label">
                            <label for="genre">Genre</label>
                        </div>
                        <div class="input">
                            <input type="text" name="genre" id="genre" placeholder="Genre">
                        </div>
                        <div class="label">
                            <label for="poster">Poster</label>
                        </div>
                        <div class="input">
                            <input type="file" name="poster" id="poster" placeholder="Poster" accept=".jpg">
                        </div>
                        <button class="close_button">Add</button>
                    </div>
                </div>

                <div class="popup addSong" id="addSong">
                    <div class="menu">
                        <div class="profile_pic">
                            <h2>Add Song</h2>
                        </div>
                        <hr>

                        <div class="label">
                            <label for="album">Album</label>
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <div class="input">
                            <input type="text" name="album" id="album" placeholder="Song">
                            <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>

                        <div class="label">
                            <label for="artist">Artist</label>
                        </div>
                        <div class="input">
                            <input type="text" name="artist" id="artist" placeholder="Artist">
                        </div>

                        <div class="label">
                            <label for="durasi">Durasi</label>
                        </div>
                        <div class="input">
                            <input type="text" name="durasi" id="durasi" placeholder="Durasi">
                        </div>

                        <div class="label">
                            <label for="genre">Genre</label>
                        </div>
                        <div class="input">
                            <input type="text" name="genre" id="genre" placeholder="Genre">
                        </div>
                        <div class="label">
                            <label for="song">Song</label>
                        </div>
                        <div class="input">
                            <input type="file" name="song" id="song" placeholder="song" accept=".mp3">
                        </div>
                        <button class="close_button">Add</button>
                    </div>
                </div>

                <div class="popup editAlbum" id="editAlbum">
                    <div class="menu">
                        <div class="profile_pic">
                            <h2>Edit Album</h2>
                        </div>
                        <hr>

                        <div class="label">
                            <label for="album">Album</label>
                            <label for="tanggal">Tanggal</label>
                        </div>
                        <div class="input">
                            <input type="text" name="album" id="album" placeholder="Album">
                            <input type="date" name="tanggal" id="tanggal" placeholder="Tanggal">
                        </div>

                        <div class="label">
                            <label for="artist">Artist</label>
                        </div>
                        <div class="input">
                            <input type="text" name="artist" id="artist" placeholder="Artist">
                        </div>

                        <div class="label">
                            <label for="durasi">Durasi</label>
                        </div>
                        <div class="input">
                            <input type="text" name="durasi" id="durasi" placeholder="Durasi">
                        </div>

                        <div class="label">
                            <label for="genre">Genre</label>
                        </div>
                        <div class="input">
                            <input type="text" name="genre" id="genre" placeholder="Genre">
                        </div>
                        <div class="label">
                            <label for="poster">Poster</label>
                        </div>
                        <div class="input">
                            <input type="file" name="poster" id="poster" placeholder="Poster" accept=".jpg">
                        </div>
                        <button class="close_button">Add</button>
                    </div>
                </div>

                <div class="popup deleteSong" id="deleteSong">
                    <div class="menu">
                        <h5>Are you sure want to delete this song?</h5>
                        <button class="close_button">Delete</button>
                    </div>
                </div>


                
                <button type="button" data-target="#addAlbum" class="open_button">Add Album</button>
                <button type="button" data-target="#addSong" class="open_button">Add Song</button>

                <script>
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

                        var closeButtons = document.querySelectorAll('.addSong .close_button');
                        closeButtons.forEach(function(closeButton) {
                            closeButton.addEventListener('click', function() {
                                var overlay = document.querySelector('.overlay');
                                var popup = closeButton.closest('.popup');

                                overlay.style.display = 'none';
                                popup.style.display = 'none';
                            });
                        });
                    });
                </script>
                
                <div class="item_album_wrap">
                    <ul id="albumList">
                        
                    </ul>
                </div>
            </div>
        </div>
        
    </header>
    <script>
    var data1 = <?php echo json_encode($_SESSION['data1']); ?>;
    console.log(data1);
    if (data1) {
        var ul = document.getElementById("albumList");

        const myObj = JSON.parse(data1);

        var albumList = myObj.albumList;

        albumList.forEach(function(album) {
            var li = document.createElement("li");
            li.className = "item_album";

            

            var h5 = document.createElement("h5");
            h5.className = "judul";
            var sub = document.createElement("div");
            sub.className = "sub";
            sub.textContent = album['nama_album'] + " - " + album['artist'];
            h5.appendChild(sub);

            var divIcon = document.createElement("div");
            divIcon.className = "icon";

            var divAdd = document.createElement("div");
            divAdd.className = "add";
            var iconAdd = document.createElement("i");
            iconAdd.className = "bi bi-pencil-square";
            divAdd.appendChild(iconAdd);
            iconAdd.addEventListener("click", function() {
                var popup = document.getElementById("editAlbum");
                var backgroundOverlay = document.getElementById("overlay");
                popup.style.display = "block"; // Tampilkan popup
                backgroundOverlay.style.display = "block";
            });

            var divDelete = document.createElement("div");
            divDelete.className = "delete";
            var iconDelete = document.createElement("i");
            iconDelete.className = "bi bi-trash-fill";
            divDelete.appendChild(iconDelete);
            divDelete.addEventListener("click", function() {
    // Mengambil elemen popup
            var popup_del = document.getElementById("deleteSong");
            var backgroundOverlay_del = document.getElementById("overlay");
            
            // Menampilkan popup
            popup_del.style.display = "block"; // Tampilkan popup
            backgroundOverlay_del.style.display = "block";
            });

            var divMore = document.createElement("div");
            divMore.className = "more";
            var iconMore = document.createElement("i");
            iconMore.className = "bi bi-three-dots";
            divMore.appendChild(iconMore);

            divIcon.appendChild(divAdd);
            divIcon.appendChild(divDelete);
            divIcon.appendChild(divMore);

            li.appendChild(h5);
            li.appendChild(divIcon);

            ul.appendChild(li);
        });
    }
</script>

</body>
</html>
