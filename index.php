<form method="post">
    <input type="text" name="country">
    <input type="submit">
</form>

<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "India" => "New Delhi"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"];
    $capital = $capitals[$country];
    echo "The capital of {$country} is {$capital}.";
}
?>
