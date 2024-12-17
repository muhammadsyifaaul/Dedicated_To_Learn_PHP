<?php

if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // echo "Username: " . $username . "<br>";
    // echo "Password: " . $password . "<br>";
    if($username == "admin" && $password == "123") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php if(isset($error)) : ?>
        <p style="color: red;">Username atau Password Salah</p>
    <?php endif; ?>

    <form method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>
</body>
</html>