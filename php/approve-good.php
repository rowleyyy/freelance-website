<?php

include "db.php";
$id = $_GET['id'];




$mysql->query("UPDATE `goods` SET `status` = 'Завершено' WHERE `id` = '$id'");

$mysql->close();

header("Location: /");

?>