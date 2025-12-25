<?php
$action_file = htmlspecialchars($_SERVER['PHP_SELF']);
echo '<form action="' . $action_file . '" method="post">';
?>
<!-- форма -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo 'Form submitted via POST.';
}
?>
>
