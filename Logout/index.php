<?php

session_start();
if(!$_SESSION['Login']){
    header('Location: /');
    exit();
}
     

unset($_SESSION['Login']);
header("Location: /");