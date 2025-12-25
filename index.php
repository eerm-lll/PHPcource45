<?php
// cookie 1
setcookie('favoritefood', 'pizza', time() + 86400); // cookie на 24 часа

if (isset($_COOKIE['favoritefood'])) {
    echo 'Buy some ' . $_COOKIE['favoritefood'] . '!';
}

// удалить cookie
setcookie('favoritefood', '', time() - 3600);
?>
