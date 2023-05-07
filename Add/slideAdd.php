<?php include('../db.php');
$message="";
if(isset($_POST['lang']) && isset($_POST['text']) && isset($_FILES['file']) && isset($_POST['fullName']) && isset($_POST['workplace']) && isset($_POST['status'])){
$lang=strtolower($_POST['lang']);	
$text=$_POST['text'];
$fullName=$_POST['fullName'];	
$workplace=$_POST['workplace'];	
$status=$_POST['status'];	
if($lang!=="" && $text!=="" && $fullName!==""){
	$temp=$_FILES["file"]["tmp_name"];
	$name=$_FILES["file"]["name"];
	$path="../image/" .$name;
	$size=$_FILES["file"]["size"];
	$type=strtolower(pathinfo($path, PATHINFO_EXTENSION));
	$ok=1;
	$check=getimagesize($temp);
	if($check == false  || file_exists($path) || $size > 500000 ) $ok=0;
	if ($ok)
	
		move_uploaded_file($temp, $path);
		$sql='INSERT INTO `slide`(`id`, `lang`, `text`, `src`, `fullName`, `workplace`, `status`) VALUES (NULL,"'.$lang.'","'.$text.'","'.$name.'","'.$fullName.'","'.$workplace.'","'.$status.'")';
		$result=mysqli_query($conn,$sql);
	 ;

}else $message="Fill in all the boxes";
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
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="Example en,az" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="text">
  </div>
  <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="file" accept="image/png, image/jpeg">
  <label class="input-group-text" for="inputGroupFile02">Upload</label>
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">FullName</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="fullName">
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">WorkPlace</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="workplace">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../slide.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<!-- <div class="text-danger text-center fs-4"><?=$message?></div> -->

</body>
</html>