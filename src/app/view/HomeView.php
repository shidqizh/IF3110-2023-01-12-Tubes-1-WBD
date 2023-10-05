<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Home.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Search_bar.css">
    <title>Home Page</title>
</head>
<body>
    <!-- <? print_r($_SESSION['data1']); ?> -->
    <header>
        <div class="menu">
            <h1>SoundVibes</h1>
            <div class = "side">
                <div class="collection">
                    <h4 class="active" id="collection_id"><span></span><i class="bi bi-music-note-list"></i>Collection</h4>
                </div>
                <div class="history">
                    <h4 class="" id="history_id"><span></span><i class="bi bi-music-note-list"></i></i>History</h4>
                </div>
                <div class="recommended">
                    <h4 class="" id="recommended_id"><span></span><i class="bi bi-music-note-list"></i></i>Recommended</h4>
                </div>
            </div>
            <div class="menu_lagu">
                <div class="dariplaylist" id="dariplaylist_id">
                    <li class="daftar_lagu">
                        
                        <img src = "../apartofme.jpg" alt="">
                        <h5>December <br>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <i class="bi playListPlay bi-play-fill" id="1"></i>  
                    </li>
                    <li class="daftar_lagu">
                        
                        <img src="../img/off my face.webp" alt="">
                        <h5>Off My Face <br>
                            <div class="sub">Justin Bieber</div>
                        </h5>
                        <i class="bi playListPlay bi-play-fill" id="2"></i>  
                    </li>
                    <li class="daftar_lagu">
                        
                        <img src="../img/apartofme.jpg" alt="">
                        <h5>A Part Of Me <br>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <i class="bi playListPlay bi-play-fill" id="3"></i>  
                    </li>
                </div>
                <div class="darihistory" id="darihistory_id">
                    <li class="daftar_lagu">
                        
                        <img src="../img/december.jpg" alt="">
                        <h5>December <br>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <i class="bi historytPlay bi-play-fill" id="1"></i>  
                    </li>
                    <li class="daftar_lagu">
                        
                        <img src="../img/apartofme.jpg" alt="">
                        <h5>A Part Of Me <br>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <i class="bi historytPlay bi-play-fill" id="2"></i>  
                    </li>
                    
                </div>

                <div class="darirecommended" id="darirecommended_id">
                    <li class="daftar_lagu">
                        
                        <img src="../img/december.jpg" alt="">
                        <h5>December <br>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <i class="bi historytPlay bi-play-fill" id="1"></i>  
                    </li>
                </div>
            
            </div>
        </div>
        <div class="lagu">
            <nav>
                <ul>
                    <li class="active" id="discover">Discover</li>
                    <li class="" id="album" >Album</li>
                    <li class="" id="artist">Artist</li>
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
                          
                        <a href="#" class="submenu-link" onclick="openEditProfile()">
                            <i class="bi bi-person"></i>
                            <p>Profile</p>
                            <span>></span>
                        </a>
                        <a href="#" class="submenu-link" onclick="openLogout()">
                            <i class="bi bi-box-arrow-right"></i>
                            <p>Logout</p>
                            <span>></span>
                        </a>
                    </div>
                </div>  
                <div class="edit_profile" id="edit_profile_1">
                    <div class="menu">
                        <div class="profile_pic">
                            <h2>Edit Profile</h2>
                        </div>
                        <hr>
                        <div class="label">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="John Doe">
                        </div>
                        <button>Close</button>
                    </div>
                </div>
            </nav>

            <!-- Button trigger modal -->
            <iframe  class="inactive" src="../../app/view/Album.php" frameborder="0" id="albumFrame" style="height:100%; width:100%"></iframe>
            <iframe  class="active" src="../../app/view/Discover.php" frameborder="0" id="discoverFrame" style="height:100%; width:100%"></iframe>
            <iframe  class="inactive" src="../../app/view/Artist.php" frameborder="0" id="artistFrame" style="height:100%; width:100%"></iframe>
              
        </div>

        <div class="play">
            <img src="../../public/images/december.jpg" alt="" id="poster_play">
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
    </header>
    <script src="../../public/javascript/functional.js"></script>
    <script src="../../public/javascript/playSongs.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
