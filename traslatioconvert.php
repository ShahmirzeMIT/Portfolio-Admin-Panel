<?php
include('db.php');
$sql='SELECT * FROM `translation`';
$result=mysqli_query($conn,$sql);
while ($translation=$result->fetch_assoc()) {
	$translations[]=$translation;
}

$encoded_data=json_encode($translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('translation.json',$encoded_data);

?>

