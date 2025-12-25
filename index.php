<?php
session_start();
$_SESSION['username'] = 'SpongeBob';
echo 'Welcome ' . $_SESSION['username'];
session_destroy();
?>
