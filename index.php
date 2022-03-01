<?php
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/



$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$name_access = false;
$mail_access = false;
$age_access = false;



if (mb_strlen($name) > 3) {
    $name_access = true;
}
if (strpos($mail, '.') && strpos($mail, '@')) {
    $mail_access = true;
}
if (is_numeric($age)) {
    $age_access = true;
}

$message = 'Accesso negato';
if ($name_access && $mail_access && $age_access) $message = 'Accesso riuscito';
var_dump($name, $mail, $age);
var_dump($name_access, $mail_access, $age_access);
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