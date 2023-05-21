<?php
include('db.php');
$sql='SELECT * FROM `portfolioimg`';
$result=mysqli_query($conn,$sql);
while ($translation=$result->fetch_assoc()) {
	$translations[]=$translation;
}

$encoded_data=json_encode($translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
file_put_contents('pImage.json',$encoded_data);
?>

