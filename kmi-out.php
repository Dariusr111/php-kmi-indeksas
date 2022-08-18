<?php 

$cm=$_POST['cm'];
$kg=$_POST['kg'];
$kmi=round($kg/pow(($cm/100),2),2);
$message='';

if ($kmi < 18.5) {
    $message='Per mažas svoris';
}
else if ($kmi < 25) {
    $message='Normalus svoris';
}
else if ($kmi <30) {
    $message='Viršsvoris';
}
else if ($kmi < 35) {
    $message='I laipsnio nutukimas';
}

else if ($kmi < 40) {
    $message='II laipsnio nutukimas';
}

else if ($kmi >= 40) {
    $message='III laipsnio nutukimas';
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano puslapis</title>
</head>

<body>
    <p>Jūsų KMI yra <?php echo $kmi; ?></p>
    <br>
    <p>Jūsų KMI įvertinimas: <?php echo $message; ?></p>
    <br>
    <div>
        <img src="https://sportuojantys.lt/wp-content/uploads/2021/09/kmi-600x309.png" alt="KMI ribos">
    </div>
    <div>
        <a href="/php/pask-1/kmi.php"> Atgal </a>
    </div>
</body>

</html>