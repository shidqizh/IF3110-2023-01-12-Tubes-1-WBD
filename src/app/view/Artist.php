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
    <link rel ="stylesheet" type="text/css" href="../../public/css/Artist.css">
    <title>Artist</title>
</head>
<body>
    <header>
        <div class="lagu">
            <div class="artist">
                <div class="h4">
                    <h4>Artist</h4>
                </div>
                <style>
                    .overlay {
                        display: none;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: rgba(0, 0, 0, 0.5);
                        z-index: 9999;
                    }
                    .popup {
                        display: none;
                        position: fixed;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 5px;
                        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                        z-index: 10000;
                    }
                </style>

                <div class="overlay"></div>

                <div class="popup edit_profile" id="edit_profile_1">
                    <div class="menu">
                        <div class="profile_pic">
                            <h2>Edit Profile</h2>
                        </div>
                        <hr>
                        <div class="label">
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" placeholder="John Doe">
                        </div>
                        <button class="close_button">Close</button>
                    </div>
                </div>

                <button type="button" data-target="#edit_profile_1" class="open_button">Tambah Album</button>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var openButtons = document.querySelectorAll('button[data-target]');
                        openButtons.forEach(function(openButton) {
                            openButton.addEventListener('click', function() {
                                var target = openButton.getAttribute('data-target');
                                var overlay = document.querySelector('.overlay');
                                var popup = document.querySelector(target);

                                overlay.style.display = 'block';
                                popup.style.display = 'block';
                            });
                        });

                        var closeButtons = document.querySelectorAll('.edit_profile .close_button');
                        closeButtons.forEach(function(closeButton) {
                            closeButton.addEventListener('click', function() {
                                var overlay = document.querySelector('.overlay');
                                var popup = closeButton.closest('.popup');

                                overlay.style.display = 'none';
                                popup.style.display = 'none';
                            });
                        });
                    });
                </script>

                <div class="item_artist_wrap">
                    <ul id="artistList">
                        
                    </ul>
                </div>
        </div>
    </header>
    <script>
    var data1 = <?php echo json_encode($_SESSION['data1']); ?>;
    console.log(data1);
    if (data1) {
        var ul = document.getElementById("artistList");

        const myObj = JSON.parse(data1);

        var artistList = myObj.artistList;

        artistList.forEach(function(album) {
            var li = document.createElement("li");
            li.className = "item_artist";

            var h5 = document.createElement("h5");
            h5.className = "judul";
            var sub = document.createElement("div");
            sub.className = "sub";
            sub.textContent = album['artist'];
            h5.appendChild(sub);

            var divIcon = document.createElement("div");
            divIcon.className = "icon";

            var divAdd = document.createElement("div");
            divAdd.className = "add";
            var iconAdd = document.createElement("i");
            iconAdd.className = "bi bi-pencil-square";
            divAdd.appendChild(iconAdd);

            var divDelete = document.createElement("div");
            divDelete.className = "delete";
            var iconDelete = document.createElement("i");
            iconDelete.className = "bi bi-trash-fill";
            divDelete.appendChild(iconDelete);

            var divMore = document.createElement("div");
            divMore.className = "more";
            var iconMore = document.createElement("i");
            iconMore.className = "bi bi-three-dots";
            divMore.appendChild(iconMore);

            divIcon.appendChild(divAdd);
            divIcon.appendChild(divDelete);
            divIcon.appendChild(divMore);

            li.appendChild(h5);
            li.appendChild(divIcon);

            ul.appendChild(li);
        });
    }
</script>
</body>
</html>
