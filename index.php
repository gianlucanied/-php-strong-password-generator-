<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore PWS</title>

</head>
<body>
    <form>
        <h1>Indica di quanti caratteri creare la tua Password</h1>
        <input type="number" name="password_lunghezza" placeholder="Enter a number" min="8" max="16">
        <button type="submit">Genera</button>
    </form>

    <?php
    require_once __DIR__ . "/functions.php";
    ?>

</body>
</html>
