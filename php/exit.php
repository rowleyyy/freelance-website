<?php

include "db.php";

setcookie('user_id', $user['id'], time() -3600, '/');
setcookie('role', $user['role'], time() -3600, '/');
setcookie('worker_id', $user['id'], time() -3600, '/');


header("Location: /");

?>