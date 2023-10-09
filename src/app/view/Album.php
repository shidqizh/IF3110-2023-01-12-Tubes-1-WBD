<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="/public/css/Album.css">

    <title>Album</title>
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
                    <div class = "filter">
                        <select name="filter-genre" id="filter-genre" class= "dropdown">
                            <option selected>Genre</option>
                                <?php
                                $genres = array(); // Membuat array kosong untuk mengumpulkan nama-nama artis

                                // Loop melalui data untuk mengumpulkan nama-nama artis unik
                                for ($i = 0; $i < count($data['itemList']); $i++) {
                                    $song = $data['itemList'][$i];
                                    $genre = $song['genre'];

                                    // Tambahkan nama artis ke dalam array jika belum ada
                                    if (!in_array($genre, $genres)) {
                                        $genres[] = $genre;
                                        // Buat option dengan nama artis sebagai nilai dan teks
                                        echo '<option value="' . $genre . '">' . $genre . '</option>';
                                    }
                                }
                                ?>
                            </select>
                        <button type="button" id="custom-dropdown">
                            <img src="../../../public/img/dropdown_button.svg" alt="">
                        </button>
                    </div>
                    <div class = "filter">
                        <select name="filter-artist" id="filter-artist" class="dropdown">
                            <option selected>Artist</option>
                            <?php
                            $artists = array(); // Membuat array kosong untuk mengumpulkan nama-nama artis

                            // Loop melalui data untuk mengumpulkan nama-nama artis unik
                            for ($i = 0; $i < count($data['itemList']); $i++) {
                                $song = $data['itemList'][$i];
                                $artist = $song['artist'];

                                // Tambahkan nama artis ke dalam array jika belum ada
                                if (!in_array($artist, $artists)) {
                                    $artists[] = $artist;
                                    // Buat option dengan nama artis sebagai nilai dan teks
                                    echo '<option value="' . $artist . '">' . $artist . '</option>';
                                }
                            }
                            ?>
                        </select>
                        <button type="button" id="custom-dropdown">
                            <img src="../../../public/img/dropdown_button.svg" alt="">
                        </button>
                    </div>
                </div>
            </form>
            </div>
            <div class="user">
                <i class="bi bi-person" onclick="profile(event)"></i>
            </div>
        </nav>
        <div class="daftar_album">
            <h4>Daftar Album</h4>
            <div class="item_album_wrap" id="songList">
                <?php foreach($data['albumList'] as $album) : ?>
                <a class="item_album" >
                    <div class="wrap">
                        <img src="<?php echo $album['image_path'] ?>" alt="" id="">
                        <h5>
                            <div class="judul">
                                <?php echo $album['nama_album'] ?>
                            </div>
                            <div class="sub">
                            <?php echo $album['artist'] ?>
                            </div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <?php
                                    $isAdmin = $_SESSION['is_admin'] ?? false; // Mengambil status admin dari session

                                    // Tampilkan tombol "Add Song" hanya jika pengguna adalah admin
                                    if ($isAdmin) {
                                        echo '<i class="bi bi-pencil-square" onclick="editAlbum(event)"></i>';
                                    }
                                ?>
                            </div>
                            <div class="delete">
                                <?php
                                    if ($isAdmin) {
                                        echo '<i class="bi bi-trash-fill" onclick="delete_album(event)"></i>';
                                    }
                                    ?>
                            </div>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>    

        <?php
            $isAdmin = $_SESSION['is_admin'] ?? false; 

            if ($isAdmin) {
                echo '<button type="button" data-target="#addAlbum" class="open_button">Add Album</button>';
            }
        ?>

        <div class="overlay" id="overlay"></div>

        <div class="popup addAlbum" id="addAlbum">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Add Album</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/album/add_album" method="post">
                    <div class="label">
                        <label for="nama_album">Album Name</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_album" id="nama_album" placeholder="Album Name">
                        
                    </div>

                    <div class="label">
                        <label for="artist">Artist</label>
                    </div>
                    <div class="input">
                        <input type="text" name="artist" id="artist" placeholder="Artist">
                    </div>

                    <div class="label">
                        <label for="tanggal_terbit">Date</label>
                    </div>
                    <div class="input">
                        <input type="date" name="tanggal_terbit" id="tanggal_terbit" placeholder="Date">
                    </div>

                    <div class="label">
                        <label for="genre">Genre</label>
                    </div>
                    <div class="input">
                        <input type="text" name="genre" id="genre" placeholder="Genre">
                    </div>

                    <div class="label">
                        <label for="durasi_album">Duration</label>
                    </div>
                    <div class="input">
                        <input type="number" name="durasi_album" id="durasi_album" placeholder="Duration">
                    </div>
                    
                    <div class="label">
                        <label for="image_path">Poster</label>
                    </div>
                    <div class="input">
                        <input type="file" name="image_path" id="image_path" placeholder="image_path" accept=".jpg">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Add</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup editAlbum" id="editAlbum">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Edit Album</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/home/edit_album" method="post">
                    <div class="label">
                        <label for="nama_lagu">Album Name</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Album Name" value="<? echo $album['nama_album'] ?>">
                        
                    </div>

                    <div class="label">
                        <label for="artist">Artist</label>
                    </div>
                    <div class="input">
                        <input type="text" name="artist" id="artist" placeholder="Artist" value="<? echo $album['artist'] ?>">
                    </div>

                    <div class="label">
                        <label for="tanggal_terbit">Date</label>
                    </div>
                    <div class="input">
                        <input type="date" name="tanggal_terbit" id="tanggal_terbit" placeholder="Date" value="<? echo $album['tanggal_terbit'] ?>">
                    </div>

                    <div class="label">
                        <label for="genre">Genre</label>
                    </div>
                    <div class="input">
                        <input type="text" name="genre" id="genre" placeholder="Genre" value="<? echo $album['genre'] ?>">
                    </div>

                    <div class="label">
                        <label for="durasi_lagu">Duration</label>
                    </div>
                    <div class="input">
                        <input type="number" name="durasi_lagu" id="durasi_lagu" placeholder="Duration" value="<? echo $album['durasi_album'] ?>">
                    </div>
                    
                    <div class="label">
                        <label for="image_path">Poster</label>
                    </div>
                    <div class="input">
                        <input type="file" name="image_path" id="image_path" placeholder="image_path" accept=".jpg" value="<? echo $album['image_path'] ?>">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Edit</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup deleteAlbum" id="deleteAlbum">
            <div class="menu">
                
                <form action="<? BASEURL ?>/public/album/remove_album/<?php echo $album['id_album'] ?>" method="post">
                    <div class="label">
                        <label for="nama_lagu">Are you sure?</label>
                        
                    </div>
                
                    <div class="btn">
                        <button class="close_button" id="add_btn" type="submit">Delete</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div> 

        <div class="popup editProfile" id="editProfile">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Edit Profile</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/home/add_song" method="post">
                    <div class="label">
                        <label for="nama_lagu">Email</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Email">
                        
                    </div>

                    <div class="label">
                        <label for="artist">Username</label>
                    </div>
                    <div class="input">
                        <input type="text" name="artist" id="artist" placeholder="Username">
                    </div>

                    <div class="label">
                        <label for="tanggal_terbit">Password</label>
                    </div>
                    <div class="input">
                        <input type="text" name="tanggal_terbit" id="tanggal_terbit" placeholder="Password">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Edit</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup logout" id="logout">
            <div class="menu">
                <form action="<? BASEURL ?>/public/login" method="post">
                    <div class="label">
                        <label for="nama_lagu">Are you sure?</label>
                        
                    </div>
                
                    <div class="btn">
                        <button class="close_button" id="add_btn">Logout</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>
    </div>
    <div class="play">
    
    </div>
    <script src="/public/javascript/functional.js"></script>
    <script src="/public/javascript/openPopUp.js"></script>
    <script src="/public/javascript/search.js"></script>
    <script src="/public/javascript/sort.js"></script>
    <script src="/public/javascript/logout.js"></script>

</body>
</html>
