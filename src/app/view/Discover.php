<?php
session_start();
$data1 = $_SESSION['data1'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel ="stylesheet" type="text/css" href="../../public/css/Discover.css">
    <title>Discover</title>
</head>
<body>
    <header>
        <div class="lagu">
            <div class="for_you">
                <div class="h4">
                    <h4>For You</h4>
                    <div class="buttons">
                        <i class="bi bi-caret-left-fill"></i>
                        <i class="bi bi-caret-right-fill"></i>
                    </div>
                </div>
                <div class="lagu_for_you">
                    
                    
                    
                </div>
        </div>
    </header>
    <script>
    var data1 = <?php echo json_encode($_SESSION['data1']); ?>;
    console.log(data1);
    if (data1) {
        var lfy = document.querySelector('.lagu_for_you');

        const myObj = JSON.parse(data1);

        var songList = myObj.songList;

        songList.forEach(function(song) {
            var li = document.createElement("li");
            li.className = "items";

            var divImg = document.createElement("div");
            divImg.className = "img_for_you";
            var img = document.createElement("img");
            img.src = "../../public/images/test1.jpg";

            var h5 = document.createElement("h5");
            h5.className = "judul";
            var sub = document.createElement("div");
            sub.className = "sub";
            sub.textContent = song['nama_lagu'] + " - " + song['artist'];
            h5.appendChild(sub);
            
            li.appendChild(divImg);
            li.appendChild(h5);

            lfy.appendChild(li);
        });
    }
</script>

</body>
</html>
