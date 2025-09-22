<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lottozahlen</title>
</head>
<body style="background-color: black; color: whitesmoke; font-family: 'Segoe UI'">

<h1>Lieblingslottozahlen</h1>

<div style="background-color: blue">

<?php

$lottozahlen = [23, 85,12, 6, 46, 89];
echo "<ol>";
foreach ($lottozahlen as $lottozahl){
    echo "<li>$lottozahl</li>";
}
echo "</ol>";
?>

</div>
</body>
</html>