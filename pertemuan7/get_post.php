<?php 

$animes = [
    [
    "judul" => "One Piece",
    "genre" => ["Action", "Adventure", "Comedy"],
    "studio" => "Toei Animation",
    "tahun" => 1999,
    "rating" => 8.5,
    "cover" => "y1copy.jpg"
    ],
    [
    "judul" => "Naruto",
    "genre" => ["Action", "Adventure", "Comedy"],
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
    <?php foreach ($animes as $anime) : ?>
        <ul>
            <li>
                <img src="img/<?= $anime["cover"] ?>" alt="">
            </li>
            <li>Judul :
                <a href="detail.php?id=<?= $anime["judul"] ?>">
                    <?= $anime["judul"] ?>
                </a>
            </li>
            <li>Genre :
                <?php foreach ($anime["genre"] as $genre) : ?>
                    <!-- <?php 
                    $genre = str_replace(" ", "%20", $genre);
                    var_dump($anime["genre"]);
                    var_dump($genre)
                     ?> -->
                    <a href="detail.php?genre=<?= $genre ?>">
                        <?= $genre ?>,
                    </a>
                <?php endforeach; ?>
            </li>
            <li>Studio :
                <a href="detail.php?id=<?= $anime["studio"] ?>">
                    <?= $anime["studio"] ?>
                </a>
            </li>
            <li>Tahun :
                <a href="detail.php?id=<?= $anime["tahun"] ?>">
                    <?= $anime["tahun"] ?>
                </a>
            </li>
            <li>Rating :
                <a href="detail.php?id=<?= $anime["rating"] ?>">
                    <?= $anime["rating"] ?>
                </a>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
