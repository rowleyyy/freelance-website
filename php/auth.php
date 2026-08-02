<?php

include "db.php";


$email = filter_var(trim($_POST['email']));
$pass = md5(filter_var(trim($_POST['pass'])));



$result = $mysql->query("SELECT `id`, `pass`, `status`, `role` FROM  `workers` WHERE `email` = '$email' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if (!$user) {
    die('Ошибка: Неверный логин или пароль. <a href="/pages/auth.php">Попробовать еще раз</a>');
}

if($user['status'] == 'approved'){
    setcookie("worker_id", $user['id'], time()+3600, "/");
    setcookie("role", $user['role'], time()+3600, "/");
    header("Location: /");
    exit();
}
elseif($user['status'] == 'pending'){
    echo "Ваша заявка на рассмотрении. <a href='../index.php'>Вернуться на главную страницу.</a>";
}else{
    echo "Ваша заявка отклонена. <a href='../index.php'>Вернуться на главную страницу.</a>";
}


?>