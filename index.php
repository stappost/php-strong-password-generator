<?php
    $passLen = $_GET['length'];
    include __DIR__.'/partials/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Genera la tua password</h1>
    <form action="./index.php" methods="GET">
        <input type="number" placeholder='Lunghezza password da generare' name='length' id='length'>
    </form>
    <h2>Ecco la tua password</h2>
    <h3><?php echo generatePassword($passLen) ?? 'no'?></h3>
</body>
</html>