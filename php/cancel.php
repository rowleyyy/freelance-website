<?php

include "db.php";
$user_id = $_GET['id'];

$mysql->query("DELETE FROM `workers` WHERE `id` = '$user_id'");
$mysql->query("DELETE FROM `profiles` WHERE `user_id` = '$user_id'");

$mysql->close();


header("Location: ../pages/admin.php");

?>