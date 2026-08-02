<?php

include "db.php";

$name = filter_var(trim($_POST['name']));
$surname = (filter_var(trim($_POST['surname'])));
$about = (filter_var(trim($_POST['about'])));
$spec = (filter_var(trim($_POST['spec'])));
$pic = (filter_var(trim($_POST['pic'])));
$worker_id = (int)$_COOKIE['worker_id'];
$skills = isset($_POST["skills"]) ? $_POST["skills"] : [];

$filename = $_FILES["pic"]["name"];
$tempname = $_FILES["pic"]["tmp_name"];
$folder = "../img/" . $filename;
$skills_str = implode(", ", $skills);


    $mysql->query(" UPDATE `profiles` SET `about` = '$about', `spec` = '$spec', `pic` = '$filename', `skills` = '$skills_str' WHERE `worker_id` = '$worker_id'");

    move_uploaded_file($tempname, $folder);



    header("Location: /pages/account.php");
    
    exit();



?>
