<?php
session_start();

session_destroy();

header("location: ../front/login.php");

exit();
?>
