<?php



session_start();
setcookie('autho', true, time() - 20, '/');
session_destroy();
header('Location: ../View/login.php');





?>