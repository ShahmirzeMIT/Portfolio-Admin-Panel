
<?php
$jsonData = file_get_contents('translation.json');
header('Content-Type: application/json');

echo $jsonData;
?>