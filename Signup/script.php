<?php
session_start();
$Data = [
    'Login' => $_POST['Login'],
    'Pass_1' => $_POST['Password_1'],
    'Pass_2' => $_POST['Password_2']
];
if($Data['Pass_1'] !== $Data['Pass_2']){
    header('Location: index.php');
    exit();
}
if(strlen($Data['Pass_1']) < 8){
    header('Location: index.php');
    exit();
}
if(strlen($Data['Login']) > 16 || strlen($Data['Login']) < 3){
    header('Location: index.php');
    exit();
}
foreach($Data as $i){
    if($i==""){
        header('Location: index.php');
        exit();
    }
}


$Login = $Data['Login'];
$Password= hash('sha256', $Data['Password_1']);

$query = new mysqli('localhost', 'root', 'root', 'messenger');
$resp = $query->query("SELECT * FROM `users` WHERE `Login` = '$Login' ");
if($resp->num_rows >= 1){
    header('Location: /');
    exit();
}
$query->query("INSERT INTO `users` (`Login`, `Password`) VALUES ('$Login', '$Password')");
$query->close();

$_SESSION['Login'] = $Login;

    header('Location: /');
    exit();