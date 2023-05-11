<?php
include('../db.php');
$sentId=$_GET['id'];
$sql='SELECT * FROM `portfolioimg` WHERE `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
			$id=$row['id'];
			$src=$row['src'];
			$menuId=$row['menuId'];
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="../style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<form class="wd30" method="post" enctype="multipart/form-data">

  <div class="mb-3">
	<img src="../image/<?=$src?>" alt="<?=$src?>" class="rounded mx-auto d-block" style="width:300px; height:300px;object-fit: contain;margin: 0 auto !important;">
	<input type="hidden" name="src" value="<?=$src?>">
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" id="formFile" name="file" accept="image/png, image/jpeg , image/jpg">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">MenuId</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="menuId"  value="<?=$menuId?>">
  </div>
<input type="hidden" name="id" value="<?=$id?>">
  <div class="text-center col"><button type="submit" class="btn btn-primary" name="submit">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../slide.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
 <?php
 if(isset($_POST['submit'])){
	$id2=$_POST['id'];
	$menuId=$_POST['menuId'];
	$oldImage=$_POST['src'];
	if(isset($_FILES['file']) && $_FILES["file"]["name"]!=="" ){
		$temp=$_FILES["file"]["tmp_name"];
		$name=$_FILES["file"]["name"];
		$path="../image/" .$name;
		$size=$_FILES["file"]["size"];
		$type=strtolower(pathinfo($path, PATHINFO_EXTENSION));
		unlink("../image/slide".$oldImage."");
		$ok=1;
		$check=getimagesize($temp);
		if($check == false  || file_exists($path) || $size > 500000 ) $ok=0;
		if ($ok)
			move_uploaded_file($temp, $path);
			$sql='UPDATE `portfolioimg` SET `src`="'.$name.'", `menuId`="'.$menuId.'" WHERE `id`="'.$id2.'"';
			$result=mysqli_query($conn,$sql);
			if($result>0){
				header("Location: ../portfolioImage.php");
			}
		
	 }
	else{
		$sql='UPDATE `portfolioimg` SET `menuId`="'.$menuId.'" WHERE `id`="'.$id2.'"';
		$result=mysqli_query($conn,$sql);
		if($result>0){
			header("Location: ../portfolioImage.php");
		}
	}
	
}
 ?>
</body>
</html>