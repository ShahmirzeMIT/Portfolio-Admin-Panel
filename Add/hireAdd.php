<?php
include('../db.php');
$message="";
if(isset($_POST['lang']) && isset($_POST['target']) &&isset($_POST['hire']) && isset($_POST['status']) ){
$lang=$_POST['lang'];
$target=$_POST['target'];
$hire=$_POST['hire'];
$status=$_POST['status'];

	if($lang!=="" && $target!=="" && $hire!=="" && $status!==""){
		$sql='SELECT * FROM `hire` WHERE `lang`="'.$lang.'"';
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)<=0){
			$sql='INSERT INTO `hire` (`id`, `lang`, `target`, `hire`, `status`) VALUES (NULL,"'.$lang.'","'.$target.'","'.$hire.'","'.$status.'")';
			$result=mysqli_query($conn,$sql);
		}
		else $message="Dil Artiq Istifade Olunub";
	}
	 else $message="You have to fill out all the box";
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
<form class="wd30" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="Example en,az" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Target</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="target">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Hire</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="hire">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../hire.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>

</body>
</html>