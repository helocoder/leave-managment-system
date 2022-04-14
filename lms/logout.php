<?php
ob_start();
session_start();
session_destroy();

header("Location: ../Login Sysem/login.php");
exit();
ob_flush();

?>
