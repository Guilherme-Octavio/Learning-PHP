<?php
session_start();
unset($_SESSION['id']);

header('Location: http://localhost/phpBase-3TIA/HTTP/login.php');
exit;
?>