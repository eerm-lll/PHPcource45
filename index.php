<form method="post">
    <label>Enter a country:</label><br>
    <input type="text" name="country"><br>
    <input type="submit" value="Submit">
</form>

<?php
$capitals = array(
    "USA" => "Washington D.C.",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST["country"];
    $capital = $capitals[$country] ?? "Capital not found.";
    echo "The capital of {$country} is {$capital}.";
}
?>
