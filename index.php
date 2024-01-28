<?php
    if(isset($_GET['length'])){
        // CARATTERI
        $allChar = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890?!.,/[]{}&@#';
        // LUNGHEZZA DESIDERATA 
        $passLen = $_GET['length'];
        // PASSWORD DA RESTITURE 
        $password = [];
        // CICLO 
        while(count($password) < $passLen){
            $password[] = $allChar[rand(0, strlen($allChar))];
        }
        $password = implode($password);
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
    <h1>Genera la tua password</h1>
    <form action="./index.php" methods="GET">
        <input type="number" placeholder='Lunghezza password da generare' name='length' id='length'>
    </form>
    <h2>Ecco la tua password</h2>
    <h3><?php echo $password ?? 'no'?></h3>
</body>
</html>