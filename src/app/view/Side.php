<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="/public/css/Side.css">
    <title>Side Page</title>
</head>
<body>
    <div class="side">
        <h1>SoundVibes</h1>
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
        <div class="logout">
            <button type="button" data-target="#logout" class="logout_button">Logout</button>
        </div>
    </div>   
    
    <script src="/public/javascript/logout.js"></script>
    <script src="/public/javascript/functional.js"></script>
</body>
</html>
