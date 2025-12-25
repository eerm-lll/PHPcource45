<!DOCTYPE html>
<html>
<head>
    <title>FakeBook Register</title>
</head>
<body>
    <h2>Welcome to FakeBook</h2>
    
    <!-- ФОРМА РЕГИСТРАЦИИ -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br><br>
        
        <label>Password:</label><br>
        <input type="password" name="password"><br><br>
        
        <input type="submit" name="submit" value="Register">
    </form>

<?php
// ОБРАБОТКА ФОРМЫ
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'database.php';
    
    // ФИЛЬТРАЦИЯ ДАННЫХ
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // ВАЛИДАЦИЯ
    if (empty($username)) {
        echo '<p style="color:red;">Please enter a username.</p>';
    } elseif (empty($password)) {
        echo '<p style="color:red;">Please enter a password.</p>';
    } else {
        // ХЭШ ПАРОЛЯ
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        // SQL ЗАПРОС
        $sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";
        
        try {
            mysqli_query($conn, $sql);
            echo '<p style="color:green;">You are now registered!</p>';
        } catch (mysqli_sql_exception $e) {
            echo '<p style="color:red;">That username is taken.</p>';
        }
        mysqli_close($conn);
    }
}
?>
</body>
</html>
