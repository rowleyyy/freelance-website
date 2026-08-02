<?php

include "db.php";
$id = $_GET['id'];
$worker_id = $_COOKIE['worker_id'];

echo $worker_id;

$mysql->query("UPDATE `goods` SET `status` = 'В работе', `worker_id` = '$worker_id' WHERE `id` = '$id'");

$mysql->close();

header("Location: ../pages/goods.php");

?>