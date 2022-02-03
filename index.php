<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sitioHerencia</title>
</head>
<body>
    <?php
    require_once('./padre/Animal.php');
    require_once('./hija/Gato.php');
    require_once('./hija/Perro.php');
    $perro = new Perro();
    $gato = new Gato();
    
    $perro->comer();
    $perro->dormir();

    $gato->comer();
    $gato->dormir1();
    ?>
</body>
</html>