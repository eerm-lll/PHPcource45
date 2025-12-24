<form method="post">
    <input type="checkbox" name="foods[]" value="Pizza"> Pizza<br>
    <input type="checkbox" name="foods[]" value="Hamburger"> Hamburger<br>
    <input type="checkbox" name="foods[]" value="Taco"> Taco<br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST["submit"])) {
    if (isset($_POST["foods"])) {
        foreach ($_POST["foods"] as $food) {
            echo "You like {$food}<br>";
        }
    } else {
        echo "No food selected.";
    }
}
?>
