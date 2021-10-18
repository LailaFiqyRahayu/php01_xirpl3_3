<!DOCTYPE html>
<head>
    <title></title>
</head>
<body>
    <h2>Perulangan</h2>
    <?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("h:i:sa") . "<br>"; 
?>

<?php
for ($i = 1; $i < 7; $i++) {
    for ($j = $i; $j < 7; $j++) {
        echo " * ";
    }
    echo '<br />';
}
?>
</body>