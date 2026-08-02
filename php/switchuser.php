<?php

include "db.php";

setcookie('email', $user['email'], time() -3600, '/');
setcookie('id', $user['id'], time() -3600, '/');
setcookie('role', $user['role'], time() -3600, '/');
setcookie('worker_id', $user_id, time() -3600, '/');

header("Location: /pages/authuser.php");

?>