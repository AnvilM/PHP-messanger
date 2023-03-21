<?php
session_start();
if(!$_SESSION['Login']){
    header('Location: /');
    exit();
}

$User_1 = $_POST['User_1'];
$User_2 = $_POST['User_2'];
$Message = $_POST['Message'];
if(strlen($Message) > 500){
    header('Location: index.php?User='.$User_2.'');
    exit();
}
$date = time();
echo $User_1.'<br>';
echo $User_2.'<br>';
echo $Message.'<br>';
echo $date.'<br>';

$query = new mysqli('localhost', 'root', 'root', 'messenger');
$query->query("INSERT INTO `messages` (`id_1`, `id_2`, `Message`, `Date` ) VALUES ('$User_1', '$User_2', '$Message', '$date')");
$query->close();

header('Location: index.php?User='.$User_2.'');