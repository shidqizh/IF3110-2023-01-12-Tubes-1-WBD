<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="<? BASEURL ?>/public/css/Song.css">
    <link rel ="stylesheet" type="text/css" href="<? BASEURL ?>/public/css/ResponsivitasSong.css">
    <title>Song Page</title>
</head>
<body>  
    <div class="main">
        <?php $pathImage = $data['namaLagu']['image_path'] ?>
        <nav>
            <ul>
                <a href="<? BASEURL ?>/public/home/index" class="active" id="songs">Songs</a>
                <a href="<? BASEURL ?>/public/album/index" class="" id="album" >Album</a>
                <a href="<? BASEURL ?>/public/artist/index" class="" id="artist">Artist</a>
            </ul>
        </nav>
        <div class="lagu">
            <div class="poster" id="sekarang">
                <img src="<?php echo $pathImage; ?>" alt="" id="poster">
                <label for="" class="label">
                    <?php echo $data['namaLagu']['nama_lagu'] ?>
                    <div class="sub">
                        <?php echo $data['namaLagu']['artist'] ?>
                    </div>
                </label>
            </div>
        </div>
    </div>
    <div class="play">
        <?php $pathAudio = $data['namaLagu']['audio_path'] ?>

        <img src="<?php echo $pathImage; ?>" alt="" id="poster_play">
        <h5 class="judul">
            <?php echo $data['namaLagu']['nama_lagu'] ?>
            <div class="sub">
                <?php echo $data['namaLagu']['artist'] ?>
            </div>
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
    <audio id="music" src="<?php echo $pathAudio; ?>"></audio>
    <script src="<? BASEURL ?>/public/javascript/functional.js"></script>
    <script src="<? BASEURL ?>/public/javascript/playSongs.js"></script>
</body>
</html>
