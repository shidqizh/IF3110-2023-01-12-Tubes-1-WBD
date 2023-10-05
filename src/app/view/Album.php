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
                        <input type="text" name = "song_title" placeholder="Search...">
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
        <div class="daftar_album">
            <h4>Daftar Album</h4>
            <div class="item_album_wrap">
                <li class="item_album">
                    <img src="../../public/images/1.jpg" alt="" id="">
                    <h5 class="judul">
                        December
                        <div class="sub">Neck Deep</div>
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
                </li>
            </div>
        </div>    
        <button type="button" data-target="#addSong" class="open_button">Add Song</button>

        <div class="overlay" id="overlay"></div>

            <div class="popup addSong" id="addSong">
                <div class="menu">
                    <div class="profile_pic">
                        <h2>Add Song</h2>
                    </div>
                    <hr>

                    <form action="#" method="">
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
                            <label for="poster">Song</label>
                        </div>
                        <div class="input">
                            <input type="file" name="poster" id="poster" placeholder="Poster" accept=".mp3">
                        </div>
                        <div class="btn">
                            <button class="close_button" id="close_btn">Close</button>
                            <button class="close_button" id="add_btn">Add</button>
                        </div>
                    </form> 
                </div>
            </div> 
    </div>
    <div class="play">
    
    </div>
    <script src="../../public/javascript/openPopUp.js"></script>

</body>
</html>
