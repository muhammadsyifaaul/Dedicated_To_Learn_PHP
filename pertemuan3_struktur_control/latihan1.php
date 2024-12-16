

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <?php for ($i = 1; $i <= 5; $i++) : ?>
        <tr>
            <?php for ($j = 1; $j <= 5; $j++) : ?>
                <td style="background-color: <?= ($j % 2 == 0) ? 'purple' : 'aqua'; ?>; color: white;">
                    <?= "$i,$j"; ?>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>


</body>
</html>