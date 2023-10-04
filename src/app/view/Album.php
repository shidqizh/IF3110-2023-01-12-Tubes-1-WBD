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
    <header>
        <div class="lagu">
            <div class="daftar_album">
                <h4>Daftar Album</h4>
                <div class="item_album_wrap">
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            <?php foreach($data['albumList'] as $album) : ?>
                                <li><?= $album['nama_album']; ?> </li> 
                            <?php endforeach; ?>
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
                            <div class="delete">
                                <i class="bi bi-trash-fill"></i>
                            </div>
                            <div class="more">
                                <i class="bi bi-three-dots"></i>
                            </div>
                        </div>
                    </li>
                    <li class="item_album">
                        <img src="../img/december.jpg" alt="" id="">
                        <h5 class="judul">
                            December
                            <div class="sub">Neck Deep</div>
                        </h5>
                        <div class="icon">
                            <div class="add">
                                <i class="bi bi-pencil-square"></i>                            </div>
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
        </div>
    </header>
</body>
</html>
