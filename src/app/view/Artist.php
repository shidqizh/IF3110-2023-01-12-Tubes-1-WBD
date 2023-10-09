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
                        <select name="filter-country" id="filter-country" class= "dropdown">
                            <option selected>country</option>
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
                <a class="item_artist" href="<? BASEURL ?>/public/song/index/<?php echo $artist['artist'] ?>">
                    <img src="../../public/images/1.jpg" alt="" id="">
                    <h5 class="judul">
                    <?= $artist['artist'] ?>
                    </h5>
                    <div class="icon">
                        <div class="add">
                            <i class="bi bi-pencil-square" onclick="editArtist(event)"></i>
                        </div>
                        <div class="delete">
                            <i class="bi bi-trash-fill" onclick="delete_artist(event)"></i>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

            <button type="button" data-target="#addArtist" class="open_button">Add Artist</button>

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
                            <label for="artist">Artist</label>
                        </div>
                        <div class="input">
                            <input type="text" name="artist" id="artist" placeholder="Artist" value="<? echo $artist['artist'] ?>">
                        </div>

                        <div class="label">
                            <label for="country">country</label>
                        </div>
                        <div class="input">
                            <input type="text" name="country" id="country" placeholder="country" value="<? echo $artist['country'] ?>">
                        </div>

                        <div class="label">
                            <label for="tipe">Type</label>
                        </div>
                        <div class="input">
                            <input type="text" name="tipe" id="tipe" placeholder="Type" value="<? echo $artist['tipe'] ?>">
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
                    
                    <form action="<? BASEURL ?>/public/artist/remove_artist/<?= $artist['artist'] ?>" method="post">
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
