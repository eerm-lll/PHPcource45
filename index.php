<form method="post">
    <input type="text" name="number">
    <input type="submit">
</form>

<?php
if ($_POST) {
    for ($i = 1; $i <= $_POST["number"]; $i++) {
        echo $i . "<br>";
    }
}
?>
