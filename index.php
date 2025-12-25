<?php
include 'database.php';
$sql = "SELECT * FROM users WHERE user='SpongeBob'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo 'ID ' . $row['id'] . '<br>';
    echo 'Username ' . $row['user'] . '<br>';
} else {
    echo 'No user found.';
}
mysqli_close($conn);
?>
