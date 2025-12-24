<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="text" name="email" placeholder="Email"><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($username)) {
        echo "Username is required.<br>";
    }

    if ($email === false) {
        echo "Invalid email format.";
    }
}
?>
