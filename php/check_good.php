<?php

include "db.php";
$id = $_GET['id'];




$mysql->query("UPDATE `goods` SET `status` = 'На рассмотрении' WHERE `id` = '$id'");

$mysql->close();

header("Location: ../pages/account.php");

?>