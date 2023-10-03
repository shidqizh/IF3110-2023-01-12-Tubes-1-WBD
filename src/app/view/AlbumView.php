<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Album Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <h1>INI VIEW ALBUM</h1>
    <ul> 
        <?php foreach($data['albumList'] as $album) : ?>
            <li><?= $album['nama_album']; ?> </li> 
        <?php endforeach; ?>
    </ul>
</body>
</html>