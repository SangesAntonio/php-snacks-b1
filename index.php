<?php
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/



$name = $_GET ? $_GET['name'] : '';
$mail = $_GET ? $_GET['mail'] : '';
$age = $_GET ? $_GET['age'] : '';

$nameAccess = false;
$mailAccess = false;
$ageAccess = false;
if (strlen($name) > 3) {
    $nameAccess = true;
}
if (is_numeric($mail) && str_contains($mail, '.') && str_contains($mail, '@')) {
    $mailAccess = true;
}
if (is_numeric($age)) {
    $ageAccess = true;
}

var_dump($name, $mail, $age);
var_dump($nameAccess, $mailAccess, $ageAccess);
$message = 'Accesso negato';
if ($nameAccess && $mailAccess && $ageAccess) $message = 'Accesso riuscito';
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
    <h1><?php echo $message ?></h1>

</body>

</html>