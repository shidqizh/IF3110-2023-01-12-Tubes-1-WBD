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
                <i class="bi bi-person" onclick="profile(event)"></i>
            </div>
        </nav>
        <div class="for_you">
                <div class="h4">
                    <h4>For You</h4>
                    <div class="buttons">
                        <i class="bi"></i>
                        <i class="bi"></i>
                    </div>
                </div>
                <div class="lagu_for_you" id="songList">
                    <?php
                    $itemsPerPage = 2;
                    $start = ($data["page"] - 1) * $itemsPerPage;
                    $end = $start + $itemsPerPage;

                    
                    for ($i = $start; $i < $end && $i < count($data['songList']); $i++) {
                        $song = $data['songList'][$i];
                    ?>
                    <a class="items" href="<? BASEURL ?>/public/song/index/<?php echo $song['nama_lagu'] ?>">
                        <div class="img_for_you">
                            <img src="/public/images/1.jpg" alt="">
                        </div>
                        <h5>
                            <div class="judul">
                            <?php echo $song['nama_lagu'] ?>
                            </div>
                            <div class="sub">
                                <?php echo $song['artist'] ?>
                            </div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square" onclick="edit(event)"></i>
                            </div>
                                <div class="delete">
                                <i class="bi bi-trash-fill" onclick="delete_song(event)"></i>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
                </div>

        </div>      
        <div class="pagination">
            <?php
            $totalItems = count($data['songList']);
            $totalPages = ceil($totalItems / $itemsPerPage);

            for ($page = 1; $page <= $totalPages; $page++) {
                $isActive = ($page == $data["page"]) ? 'active' : '';
            ?>
            <a class="page <?php echo $isActive ?>" href="<? BASEURL ?>/public/home/index/<?php echo $page ?>">
                <?php echo $page ?>
            </a>
            <?php } ?>
        </div>
        <button type="button" data-target="#addSong" class="open_button">Add Song</button>

        <div class="overlay" id="overlay"></div>

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

                <form action="<? BASEURL ?>/public/home/add_song" method="post">
                    <div class="label">
                        <label for="nama_lagu">Song</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Song">
                        
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
                        <button class="close_button" id="add_btn">Edit</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup deleteSong" id="deleteSong">
            <div class="menu">
                <form action="<? BASEURL ?>/public/home/add_song" method="post">
                    <div class="label">
                        <label for="nama_lagu">Are you sure?</label>
                        
                    </div>
                
                    <div class="btn">
                        <button class="close_button" id="add_btn">Delete</button>
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
                <form action="<? BASEURL ?>/public/home/add_song" method="post">
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
</script>
</body>
</html>
