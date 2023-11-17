<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="/public/css/Album.css">
    <title>Subs</title>
    
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
    <style>
    form label {
        color: white;
        overflow: auto;
    }
    </style>
    <div class="main" style="overflow: auto;">
        <form action="/public/subs/accept" method="POST">
            <h2 style="color: white;">Accept Subscription</h2>
            <label for="creator_id">Creator ID:</label>
            <input type="text" name="creator_id" id="creator_id"><br>
            <label for="subscriber_id">Subscriber ID:</label>
            <input type="text" name="subscriber_id" id="subscriber_id"><br>
            <input type="submit" value="Accept Subscription">
        </form>

        <form action="/public/subs/getAll" method="POST">
            <h2 style="color: white;">Get All Subscriptions</h2>
            <input type="hidden" name="api_key" value="PHP_API_KEY">
            <input type="submit" value="Get All Subscriptions">
            
        </form>

        <form action="/public/subs/getAllSubsByIds" method="POST">
            <h2 style="color: white;">Get Subscriptions by Subscriber ID</h2>
            <label for="subscriber_id">Subscriber ID:</label>
            <input type="text" name="subscriber_id" id="subscriber_id"><br>
            <input type="hidden" name="api_key" value="PHP_API_KEY">
            <input type="submit" value="Get Subscriptions by Subscriber ID">
        </form>

        <form action="/public/subs/reject" method="POST">
            <h2 style="color: white;">Reject Subscription</h2>
            <label for="creator_id">Creator ID:</label>
            <input type="text" name="creator_id" id="creator_id"><br>
            <label for="subscriber_id">Subscriber ID:</label>
            <input type="text" name="subscriber_id" id="subscriber_id"><br>
            <input type="submit" value="Reject Subscription">
        </form>

        <form action="/public/subs/insert" method="POST">
            <h2 style="color: white;">Insert Subscription</h2>
            <label for="creator_id">Creator ID:</label>
            <input type="text" name="creator_id" id="creator_id"><br>
            <label for="subscriber_id">Subscriber ID:</label>
            <input type="text" name="subscriber_id" id="subscriber_id"><br>
            <input type="submit" value="Insert Subscription">
        </form>

        <h2 style="color: white;">SOAP API Response:</h2>
        <h2 style = "color: white">
            <? var_dump($data)  ?>
        </h2>
    </div>
    
    <div class="play"></div>
    <script src="/public/javascript/functional.js"></script>
    <script src="/public/javascript/openPopUp.js"></script>
    <script src="/public/javascript/search.js"></script>
    <script src="/public/javascript/sort.js"></script>
    <script src="/public/javascript/logout.js"></script>
</body>
</html>
