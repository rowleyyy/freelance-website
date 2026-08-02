<?php

include "db.php";


$email = filter_var(trim($_POST['email']));
$pass = md5(filter_var(trim($_POST['pass'])));



$result = $mysql->query("SELECT * FROM  `users` WHERE `email` = '$email' AND `pass` = '$pass'");

$user = $result->fetch_assoc();
if (!$user) {
    die('Ошибка: Неверный логин или пароль. <a href="/pages/auth.php">Попробовать еще раз</a>');
}

setcookie('user_id', $user['id'], time() + 3600, '/');
setcookie('role', $user['role'], time() + 3600, '/');

$mysql->close();

header('Location: /');



?>