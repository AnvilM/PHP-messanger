<?php
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900;1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/Assets/Css/scene.css">
</head>
<body>
    <div class="scene">
        <div class="wrapper">
            <?php
                echo 'Имя - '.$_SESSION['Login'].'<br>';
            ?>
            <a class="button" href="Login/index.php">Войти</a>
            <a class="button" href="Signup/index.php">Регистрация</a>
            <a class="button" href="List/index.php">Список пользователей</a>
            <a class="button" href="Logout/index.php">Выйти</a>
        </div>
    </div>
</body>
</html>
