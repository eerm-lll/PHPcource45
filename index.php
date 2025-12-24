<form method="post">
    <input type="radio" name="credit_card" value="Visa"> Visa<br>
    <input type="radio" name="credit_card" value="MasterCard"> MasterCard<br>
    <input type="radio" name="credit_card" value="American Express"> American Express<br>
    <input type="submit" name="confirm" value="Confirm">
</form>

<?php
if (isset($_POST["confirm"])) {
    $credit_card = $_POST["credit_card"] ?? null;

    if ($credit_card != null) {
        echo "You selected {$credit_card}.";
    } else {
        echo "Please make a selection.";
    }
}
?>
