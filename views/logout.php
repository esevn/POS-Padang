<?php

require_once __DIR__ . "/../Model/model.php";
require_once __DIR__ . "/../Model/User.php";

$user = new User();
$user->logout();

header("Location: login.php");
exit;

?>