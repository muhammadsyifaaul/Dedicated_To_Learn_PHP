<?php 

$datas = [
    ['jamal','psikologi',2022],
    ['julian','psikologi',2024]
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($datas as $data) : ?>
        <ul>
            <!-- <li>Nama : <?= $data[0]; ?></li>
            <li>Prodi : <?= $data[1]; ?></li>
            <li>Tahun Masuk : <?= $data[2]; ?></li> -->
            <?php foreach ($data as $value) : ?>
                <li><?= $value; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>