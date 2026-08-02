<?php 

include "db.php";

$user_id = $_COOKIE['user_id'];
$title = filter_var(trim($_POST['title']));
$req = (filter_var(trim($_POST['req'])));
$adds = (filter_var(trim($_POST['adds'])));
$pic = (filter_var(trim($_POST['pic'])));
$category = (filter_var(trim($_POST['category'])));


$result = $mysql->query("INSERT INTO `goods` (`user_id`, `worker_id`, `name`, `req`, `adds`, `pic`, `status`, `category`) VALUES ('$user_id', 0, '$title', '$req',
'$adds', '$pic', 'В ожидании', '$category')");
if (!$result) {
    die("Ошибка: " . $mysql->error);
}; 
$mysql->close();


header("Location: ../pages/goods.php");

?>