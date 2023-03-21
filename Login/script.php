<?php
session_start();
$Data = [
    'Login' => $_POST['Login'],
    'Pass_1' => $_POST['Password_1'],
];





$Login = $Data['Login'];
$Password= hash('sha256', $Data['Password_1']);

$query = new mysqli('localhost', 'root', 'root', 'messenger');
$resp = $query->query("SELECT * FROM `users` WHERE `Login` = '$Login' AND `Password` = '$Password'");
$query->close();

if($resp->num_rows >= 1){
    $_SESSION['Login'] = $Login;
    header('Location: /');
    exit();
}
else{
    header('Location: /');
    exit();
}


