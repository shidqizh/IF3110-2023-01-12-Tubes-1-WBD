<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="/public/css/Discover.css">
    <title>Discover</title>
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <a href="<? BASEURL ?>/public/home/index/1">
                <img src="../../../public/images/logo.png" alt="">
            </a>
        </div>
        <div class="menu">
            <div class="Songs">
                <a class="<?php echo ($_SERVER['REQUEST_URI'] === '/public/home/index') ? 'active' : ''; ?>" href="<? BASEURL ?>/public/home/index" id="song"><span></span><i class="bi bi-music-note-list"></i>Songs</a>
            </div>
            <div class="Album">
                <a class="<?php echo ($_SERVER['REQUEST_URI'] === '/public/album/index') ? 'active' : ''; ?>" href="<? BASEURL ?>/public/album/index" id="album"><span></span><i class="bi bi-music-note-list"></i>Album</a>
            </div>
            <div class="Artist">
                <a class="<?php echo ($_SERVER['REQUEST_URI'] === '/public/artist/index') ? 'active' : ''; ?>" href="<? BASEURL ?>/public/artist/index" id="artist"><span></span><i class="bi bi-music-note-list"></i>Artist</a>
            </div>
            <div class="subs">
                <a class="<?php echo ($_SERVER['REQUEST_URI'] === '/public/subs/index') ? 'active' : ''; ?>" href="<? BASEURL ?>/public/subs/index" id="subs"><span></span><i class="bi bi-music-note-list"></i>Subs</a>
            </div>
        </div>
        <div class="search_bar">
            <form action="#" method="get">

            <div class="search-sort">
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <button type="submit"><img src="../../../public/img/search.svg" alt=""></button>
                    <input id="searchInput" type="text" name = "song_title" placeholder="Search...">
                </div>
                <div class = "filter">
                    <select name="filter-genre" id="filter-genre" class= "dropdown">
                        <option selected>Genre</option>
                        
                        </select>
                    <button type="button" id="custom-dropdown">
                        <img src="../../../public/img/dropdown_button.svg" alt="">
                    </button>
                </div>
                <div class = "filter">
                    <select name="filter-artist" id="filter-artist" class="dropdown">
                        <option selected>Artist</option>
                    
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
    </div>
    <div class="main">
        <div class="for_you">
            <div class="h4">
                <h4>For You</h4>
            </div>
            <div class="lagu_for_you" id="songList">
                <?php foreach($data['items'] as $item) : ?>
                <a class="items" >
                    <div class="wrap">
                        <img src="<?php echo $item['image_path'] ?>" alt="" id="">
                        <h5>
                            <div class="judul">
                                <?php echo $item['nama_lagu'] ?>
                            </div>
                            <div class="sub">
                            <?php echo $item['artist'] ?>
                            </div>
                        </h5>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>      
        <div class="pagination">
            <?php if($data['page'] - 1 > 0) : ?>
                <a href="<? BASEURL ?>/public/home/index/<?php echo $data['page'] - 1 ?>" class="prev <?php echo ($data['page'] == 1) ? 'disabled' : '' ?>"><</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $data['totalPages']; $i++) : ?>
                <a href="<? BASEURL ?>/public/home/index/<?php echo $i ?>" class="<?php echo ($data['page'] == $i) ? 'active' : '' ?>"><?php echo $i ?></a>
            <?php endfor; ?>
            <?php if($data['page'] + 1 < $data['totalPages']) : ?>
                <a href="<? BASEURL ?>/public/home/index/<?php echo $data['page'] + 1 ?>" class="next">></a>
            <?php endif; ?>
            
        </div>  

        <div class="overlay" id="overl ay"></div>

        <div class="popup addSong" id="addSong">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Add Song</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/home/add_song" method="post">
                    <div class="label">
                        <label for="nama_lagu">Title</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Title">
                        
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
                        <label for="durasi_lagu">Duration</label>
                    </div>
                    <div class="input">
                        <input type="number" name="durasi_lagu" id="durasi_lagu" placeholder="Duration">
                    </div>
                    
                    <div class="label">
                        <label for="audio_path">Song</label>
                    </div>
                    <div class="input">
                        <input type="file" name="audio_path" id="audio_path" placeholder="audio_path" accept=".mp3">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Add</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup editSong" id="editSong">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Edit Song</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/home/edit_song/<? echo $song['id_song']; ?>" method="post" data-id=<? echo $song['id_song']; ?>>
                    
                    <div class="label">
                        <label for="nama_lagu">Song</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Song" value="<? echo $song['nama_lagu'] ?>">
                        
                    </div>

                    <div class="label">
                        <label for="artist">Artist</label>
                    </div>
                    <div class="input">
                        <input type="text" name="artist" id="artist" placeholder="Artist" value="<? echo $song['artist'] ?>">
                    </div>

                    <div class="label">
                        <label for="tanggal_terbit">Date</label>
                    </div>
                    <div class="input">
                        <input type="date" name="tanggal_terbit" id="tanggal_terbit" placeholder="Date" value="<? echo $song['tanggal_terbit'] ?>">
                    </div>

                    <div class="label">
                        <label for="genre">Genre</label>
                    </div>
                    <div class="input">
                        <input type="text" name="genre" id="genre" placeholder="Genre" value="<? echo $song['genre'] ?>">
                    </div>

                    <div class="label">
                        <label for="durasi_lagu">Duration</label>
                    </div>
                    <div class="input">
                        <input type="number" name="durasi_lagu" id="durasi_lagu" placeholder="Duration" value="<? echo $song['durasi_lagu'] ?>">
                    </div>
                    
                    <div class="label">
                        <label for="audio_path">Song</label>
                    </div>
                    <div class="input">
                        <input type="file" name="audio_path" id="audio_path" placeholder="audio_path" accept=".mp3" value="<? echo $song['audio_path'] ?>">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Edit</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup deleteSong" id="deleteSong">
            <div class="menu">
                <form action="<? BASEURL ?>/public/home/remove_song/<?php echo $song['id_song'] ?>" method="post">
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
                        <button class="close_button" id="add_btn" name="logout">Logout</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>
    </div>

    <script src="/public/javascript/functional.js"></script>
    <script src="/public/javascript/openPopUp.js"></script>
    <script src="/public/javascript/search.js"></script>
    <script src="/public/javascript/sort.js"></script>
    <script src="/public/javascript/logout.js"></script>

</script>
</body>
</html>
