<?php 

$animes = [
    [
    "judul" => "One Piece",
    "genre" => ["Action, Adventure, Comedy"],
    "studio" => "Toei Animation",
    "tahun" => 1999,
    "rating" => 8.5,
    "cover" => "y1copy.jpg"
    ],
    [
    "judul" => "Naruto",
    "genre" => ["Action, Adventure, Comedy"],
    "studio" => "Toei Animation",
    "tahun" => 1999,
    "rating" => 8.5,
    "cover" => "y1copy.jpg"
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($animes as $anime) : ?>
        <ul>
            <li>
                <img src="img/<?= $anime["cover"]; ?>" alt="">
            </li>
            <li>Judul : <?= $anime["judul"]; ?></li>
            <?php foreach($anime["genre"] as $genre) : ?>
                <li>Genre : <a href=""><?= $genre; ?></a></li>
            <?php endforeach; ?>
            <li>Studio : <?= $anime["studio"]; ?></li>
            <li>Tahun : <?= $anime["tahun"]; ?></li>
            <li>Rating : <?= $anime["rating"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>