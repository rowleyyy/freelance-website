<?php

include "db.php";

$name = filter_var(trim($_POST['name']));
$surname = (filter_var(trim($_POST['surname'])));
$age = (filter_var(trim($_POST['age'])));
$about = (filter_var(trim($_POST['about'])));
$spec = (filter_var(trim($_POST['spec'])));
$pic = (filter_var(trim($_POST['pic'])));
$worker_id = (int)$_COOKIE['worker_id'];
$skills = isset($_POST["skills"]) ? $_POST["skills"] : [];


$filename = $_FILES["pic"]["name"];
$tempname = $_FILES["pic"]["tmp_name"];
$folder = "../img/" . $filename;
$skills_str = implode(", ", $skills);



echo $name;
echo $surname;
echo $age;
echo $about;
echo $spec;
echo $pic;
echo $skills_str;

    $mysql->query("INSERT INTO `profiles` (`worker_id`, `name`, `surname`, `age`, `about`, `spec`, `skills`, `pic`) 
    VALUES ('$worker_id', '$name', '$surname', '$age', '$about', '$spec', '$skills_str', '$filename')");
        echo "Профиль создан!";

    setcookie("user_id", $user_id, time()-3600, "/");

    move_uploaded_file($tempname, $folder);

    header("Location: /pages/auth.php");
    
    exit();



?>
