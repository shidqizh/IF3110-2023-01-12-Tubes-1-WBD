<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Song.css">
    <title>Song Page</title>
</head>
<body>  
    <div class="main">
        <nav>
            <ul>
                <a href="<? BASEURL ?>/public/home/index" class="active" id="songs">Songs</a>
                <a href="<? BASEURL ?>/public/album/index" class="" id="album" >Album</a>
                <a href="<? BASEURL ?>/public/artist/index" class="" id="artist">Artist</a>
            </ul>
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
            <div class="profile" id="subNav">
                <div class="sub_menu">
                    <div class="profile_pic">
                        <h2>John Doe</h2>
                    </div>
                    <hr>
                        
                    <a href="#" class="submenu-link" onclick="openModalProfile()">
                        <i class="bi bi-person"></i>
                        <p>Profile</p>
                        <span>></span>
                    </a>
                    <a href="#" class="submenu-link" onclick="openModalLogout()">
                        <i class="bi bi-box-arrow-right"></i>
                        <p>Logout</p>
                        <span>></span>
                    </a>
                </div>
            </div>
        </nav>
        <div class="lagu">
            <!-- <div class="poster" id="sebelum">
                <img src="../../public/images/1.jpg" alt="" id="poster">
                <label for="" class="label">December
                    <div class="sub">Neck Deep</div>
                </label>
            </div> -->
            <div class="poster" id="sekarang">
                <img src="../../public/images/1.jpg" alt="" id="poster">
                <label for="" class="label">
                    <?php echo $data['songList'][0]['nama_lagu'] ?>
                    <div class="sub">Neck Deep</div>
                </label>
            </div>
            <!-- <div class="poster" id="sesudah">
                <img src="../../public/images/1.jpg" alt="" id="poster">
                <label for="" class="label">December
                    <div class="sub">Neck Deep</div>
                </label>
            </div> -->
        </div>
    </div>
    <div class="play">
        <img src="../../public/images/1.jpg" alt="" id="poster_play">
        <h5 class="judul">
            December
            <div class="sub">Neck Deep</div>
        </h5>
        <div class="pemutar">
            <div class="icon">
                <i class="bi bi-skip-start-fill"></i>
                <i class="bi bi-play-circle-fill" onclick="playSong(this)"></i>
                <i class="bi bi-skip-end-fill"></i>
            </div>
            <div class="playback">
                <span id="mulai">0:00</span>
                <div class="garis">
                    <input type="range" id="seek" min="0" max="100">
                    <div class="garis2" id="garis2"></div>
                    <div class="dot" id="dot"></div>
                </div>
                <span id="selesai">3:00</span>
            </div>
        </div>
        <div class="vol">
            <i class="bi bi-volume-up" id="icon_vol"></i>
            <input type="range" min="0" max="100" id="vol">
            <div class="garis_volume"></div>
            <div class="dot_volume" id="dot_vol"></div>
        </div>
    </div>
    <script src="../../public/javascript/functional.js"></script>
    <script src="../../public/javascript/playSongs.js"></script>
</body>
</html>
