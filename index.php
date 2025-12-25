<?php
$password = 'pizza123';
$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify($password, $hash)) {
    echo 'Password is correct!';
} else {
    echo 'Incorrect password.';
}
?>
