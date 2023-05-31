<?php
include('db.php');
$sql='SELECT * FROM `portfolioimg`';
$result=mysqli_query($conn,$sql);
while ($translation=mysqli_fetch_assoc($result)) {
	$translations[]=$translation;
}

// print_r($translations);
$encoded_data=json_encode($translations, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
$json_format ="{ \"data\" : $encoded_data }" ;
file_put_contents('./build/assets/json/pImage.json', $json_format);

?>

