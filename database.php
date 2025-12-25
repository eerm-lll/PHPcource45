<?php
$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'businessdb';

try {
    $conn = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    echo 'You are connected.';
} catch (mysqli_sql_exception) {
    echo 'Could not connect.';
}
?>

