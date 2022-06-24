<?php 
    $myText = "Se c'è una possibilità che varie cose vadano male, quella che causa il danno maggiore sarà la prima a farlo. Dietro ogni soluzione ci sarà sempre una catena di problematiche conseguenze.";

    $name = $_GET['name'];
    $textReplaced = str_ireplace($name, '***', $myText);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="name">Parola da censurare</label>
        <input type="text" name="name" id="name">
        <button>Censura parola</button>
    </form>

    <h1>Testo originale:</h1>
    <p><?= $myText; ?></p>
    <h2>Lunghezza stringa originale:</h2>
    <p><?= (strlen($myText));?> </p>

    <h1>Testo censurato</h1>
    <p><?= $textReplaced; ?></p>
    <h2>Lunghezza stringa censurata:</h2>
    <p><?=(strlen($textReplaced)); ?> </p>
</body>
</html>