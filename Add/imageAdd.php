<?php include("../db.php");
$message="";
if(isset($_POST['menuId']) && isset($_FILES['file']) ){
  $menuId=$_POST['menuId'];
  
    if($menuId!="" ){
	$temp=$_FILES["file"]["tmp_name"];
	$name=$_FILES["file"]["name"];
	$path="../build/assets/img/" .$name;
	$size=$_FILES["file"]["size"];
	$type=strtolower(pathinfo($path, PATHINFO_EXTENSION));
	$ok=1;
	$check=getimagesize($temp);
	if($check == false  || file_exists($path) || $size > 500000 ) $ok=0;
	if ($ok)
	 move_uploaded_file($temp, $path);
      $sql2='INSERT INTO `portfolioimg`(`id`, `src`, `menuId`) VALUES (NULL,"'.$name.'","'.$menuId.'")';
      $result2=mysqli_query($conn,$sql2);
    }
    else $message="Butun secimleri yaz";


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
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" id="formFile" name="file" accept="image/png, image/jpeg , image/jpg">
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">MenuId</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="menuId" >
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../portfolioImage.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>