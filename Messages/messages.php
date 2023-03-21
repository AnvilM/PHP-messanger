<?php
session_start();
if(!$_SESSION['Login']){
    header('Location: /');
    exit();
}

$User_1 = $_SESSION['Login'];
$User_2 = $_GET['User'];

$query = new mysqli('localhost', 'root', 'root', 'messenger');
$resp = $query->query("SELECT * FROM `messages` WHERE (`id_1` = '$User_1' AND `id_2` = '$User_2') OR (`id_1` = '$User_2' AND `id_2` = '$User_1')  ORDER BY `Date` ASC");
$fetch_resp = $resp->fetch_all();
for ($i=0;$i<count($fetch_resp);$i++){
    echo '
    <div class="message">
        <div class="name">'.$fetch_resp[$i][0].':</div>
        <div class="text">'.$fetch_resp[$i][2].'</div>
        <div class="date">'.date('d.m G:i', $fetch_resp[$i][3]).'</div>
    </div>';
}