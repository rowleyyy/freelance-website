<?php

include "db.php";


$email = filter_var(trim($_POST['email']));
$pass = md5(filter_var(trim($_POST['pass'])));


$check = $mysql->query("SELECT * FROM `users` WHERE `email` = '$email';");

$user = $check->fetch_assoc();

if(!$user){

    $mysql->query("INSERT INTO `users` (`email`, `pass`, `role`) 
    VALUES ('$email', '$pass', 3);");

    $user_id = $mysql->insert_id;
    setcookie('user_id', $user_id, time()+3600, "/");
    setcookie('role', 3, time() + 3600, '/');

    header("Location: /");
    exit();

} else{

    die ("Пользователь с такой почтой уже зарегистрирован. <a href='/pages/auth.php'> Если это вы, попробуйте войти в свой аккаунт. </a> ");
};





?>