<?php 

$conn = new mysqli('localhost', 'root', '', 'phpdasar');

$result = mysqli_query($conn, "SELECT * FROM animes");

// // var_dump($result);
// $animes = mysqli_fetch_row($result); //mengembalikan array numerik
// var_dump($animes);
$animes = mysqli_fetch_assoc($result); //mengembalikan array asosiatif
var_dump($animes);
var_dump($animes['title']);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Data Anime</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Aksi</th>
                <th>Judul</th>
                <th>Genre</th>
                <th>Studio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <a href="">Edit</a> |
                    <a href="">Hapus</a>
                </td>
                <td>One Piece</td>
                <td>Action, Adventure, Comedy</td>
                <td>Toei Animation</td>
            </tr>
        </tbody>
    </table>
</body>
</html>