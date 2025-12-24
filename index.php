<form method="post">
    <input type="text" name="username">
    <input type="submit" name="login" value="Login">
</form>

<?php
if (isset($_POST["login"])) {
    $username = $_POST["username"];

    if (empty($username)) {
        echo "Username is missing.";
    } else {
        echo "Hello {$username}";
    }
}
?>
