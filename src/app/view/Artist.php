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
        </div>
        <div class="search_bar">
            <form action="#">

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
        <div class="daftar_artist">
            <h4>Daftar Artist</h4>
            <div class="item_artist_wrap" id="songList">
                <?php foreach ($data['items'] as $item) : ?>
                <a class="item_artist">
                    <img src="<?php echo $item['image_path'] ?>" alt="" id="">
                    <h5 class="judul">
                        <?php echo $item['artist'] ?>
                    </h5>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="pagination">
            <?php if($data['page'] - 1 > 0) : ?>
                <a href="<? BASEURL ?>/public/artist/index/<?php echo $data['page'] - 1 ?>" class="prev <?php echo ($data['page'] == 1) ? 'disabled' : '' ?>"><</a>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $data['totalPages']; $i++) : ?>
                <a href="<? BASEURL ?>/public/artist/index/<?php echo $i ?>" class="<?php echo ($data['page'] == $i) ? 'active' : '' ?>"><?php echo $i ?></a>
            <?php endfor; ?>
            <?php if($data['page'] + 1 < $data['totalPages']) : ?>
                <a href="<? BASEURL ?>/public/artist/index/<?php echo $data['page'] + 1 ?>" class="next">></a>
            <?php endif; ?>
            
        </div>  


        

        <div class="overlay" id="overlay"></div>

        <div class="popup addArtist" id="addArtist">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Add Artist</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/artist/add_artist" method="post">

                    <div class="label">
                        <label for="artist">Artist</label>
                    </div>
                    <div class="input">
                        <input type="text" name="artist" id="artist" placeholder="Artist">
                    </div>

                    <div class="label">
                        <label for="country">Country</label>
                    </div>
                    <div class="input">
                        <input type="text" name="country" id="country" placeholder="Country">
                    </div>

                    <div class="label">
                        <label for="tipe">Type</label>
                    </div>
                    <div class="input">
                        <input type="text" name="tipe" id="tipe" placeholder="Type">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Add</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup editArtist" id="editArtist">
            <div class="menu">
                <div class="profile_pic">
                    <h2>Edit Artist</h2>
                </div>
                <hr>

                <form action="<? BASEURL ?>/public/home/edit_artist" method="post">
                    <div class="label">
                        <label for="nama_lagu">Album Name</label>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="nama_lagu" id="nama_lagu" placeholder="Album Name">
                        
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
                        <label for="country">country</label>
                    </div>
                    <div class="input">
                        <input type="text" name="country" id="country" placeholder="country">
                    </div>

                    <div class="label">
                        <label for="durasi_lagu">Duration</label>
                    </div>
                    <div class="input">
                        <input type="number" name="durasi_lagu" id="durasi_lagu" placeholder="Duration">
                    </div>
                    
                    <div class="label">
                        <label for="image_path">Poster</label>
                    </div>
                    <div class="input">
                        <input type="file" name="image_path" id="image_path" placeholder="image_path" accept=".jpg">
                    </div>

                    <div class="btn">
                        <button class="close_button" id="add_btn">Edit</button>
                    </div>
                </form> 
                <button class="close_button" id="close_btn">Close</button>
            </div>
        </div>

        <div class="popup deleteArtist" id="deleteArtist">
            <div class="menu">
                
                
                
                <form action="<? BASEURL ?>/public/artist/remove_artist/<?php echo $artist['artist'] ?>" method="post">
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

                <form action="#" method="post">
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
                <button class="close_button" id="close_btn" >Close</button>
            </div>
        </div>     
    </div>
    <div class="play">
    
    </div>
    <script src="/public/javascript/openPopUp.js"></script>
    <script src="/public/javascript/functional.js"></script>
    <script src="/public/javascript/logout.js"></script>
    <script src="/public/javascript/search.js"></script>
    <script src="/public/javascript/sort.js"></script>
                    

</body>
</html>
