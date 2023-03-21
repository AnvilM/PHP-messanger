<?php
session_start();
$Login = $_SESSION['Login'];

$query = new mysqli('localhost', 'root', 'root', 'messenger');
$resp = $query->query("SELECT * FROM `users` WHERE `Login` != '$Login'");
$fetch_resp = $resp->fetch_all();
for ($i=0;$i<count($fetch_resp);$i++){
    echo '
        <form action="script.php" method="POST">
            <button>
                <div class="name">'.$fetch_resp[$i][1].'</div>
                <div class="write">Написать</div>
            </button>
            <input type="hidden" name="name" value="'.$fetch_resp[$i][1].'">
        </form>
    ';
    
}