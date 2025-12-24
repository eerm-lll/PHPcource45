<form method="post">
    <input type="text" name="radius">
    <input type="submit">
</form>

<?php
if ($_POST) {
    $r = $_POST["radius"];
    echo round(2 * pi() * $r, 2) . "<br>";
    echo round(pi() * pow($r, 2), 2) . "<br>";
    echo round((4/3) * pi() * pow($r, 3), 2);
}
?>

