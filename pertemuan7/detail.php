<?php
if(!isset($_GET["genre"] ) || !isset($_GET["judul"])) {
    header("Location: get_post.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $_GET["genre"] ?></h1>
</body>
</html>