<?php
     session_start();
     if(!$_SESSION['Login']){
         header('Location: /');
         exit();
     }
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
            <div class="messages">
                <?php
                    require_once('messages.php')
                ?>
            </div>
            <form action="script.php" method="POST" class="send-form">
                <textarea id='ar' cols="70" rows="3" name="Message"></textarea>
                <button type="submit">Отправить</button>
                <input type="hidden" name="User_1" value="<?php echo $_SESSION['Login'] ?>">
                <input type="hidden" name="User_2" value="<?php echo $_GET['User'] ?>">
            </form>
        </div>

    </div>
</body>
</html>
