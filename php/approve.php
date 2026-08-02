<?php

include "db.php";
$user_id = $_GET['id'];

$mysql->query("UPDATE `workers` SET `status` = 'approved' WHERE `id` = '$user_id'");

$mysql->close();

header("Location: ../pages/admin.php");

?>