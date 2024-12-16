<!-- <?php 
// echo date("l, d-m-Y");

// function salam($waktu = "Datang", $nama = "Admin") {  //parameter bisa diisi defaultnya
//     return "Selamat $waktu, $nama!";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>// <?= salam("Pagi", "Rizky"); ?></h1>
</body>
</htm -->

<?php 
function salam($nama = "Admin") {
    date_default_timezone_set("Asia/Jakarta"); // Set timezone jika diperlukan
    $jam = date("H");

    if ($jam >= 5 && $jam < 12) {
        $waktu = "Pagi";
    } elseif ($jam >= 12 && $jam < 15) {
        $waktu = "Siang";
    } elseif ($jam >= 15 && $jam < 18) {
        $waktu = "Sore";
    } else {
        $waktu = "Malam";
    }

    return "Selamat $waktu, $nama!";
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
    <h1><?= salam("Rizky"); ?></h1>
</body>
</html>
