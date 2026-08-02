<?php

include "db.php";
$id = $_GET['id'];

$mysql->query("DELETE FROM `goods` WHERE `id` = '$id'");

$mysql->close();


header("Location: ../pages/admin.php");

?>