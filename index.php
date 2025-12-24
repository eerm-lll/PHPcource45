<form action="index.php" method="post">
    <input type="text" name="username">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo $_POST["username"];
}
?>

