<?php

include "db.php";


$email = filter_var(trim($_POST['email']));
$pass = md5(filter_var(trim($_POST['pass'])));


$check = $mysql->query("SELECT * FROM `workers` WHERE `email` = '$email';");

$user = $check->fetch_assoc();

if(!$user){

    $mysql->query("INSERT INTO `workers` (`email`, `pass`, `role`, `status`) 
    VALUES ('$email', '$pass', 1, 'pending');");

    $worker_id = $mysql->insert_id;
    setcookie('worker_id', $worker_id, time()+3600, "/");

    header("Location: /pages/regafter.php");
    exit();

} else{

    die ("Пользователь с такой почтой уже зарегистрирован. <a href='/pages/auth.php'> Если это вы, попробуйте войти в свой аккаунт. </a> ");
};





?>