<?php
include("../db.php");
$message="";
$sentId=$_GET["id"];
$sql='SELECT * FROM `resume` WHERE  `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$lang=$row['lang'];
		$target=$row['target'];
		$experience=$row['experience'];
		$education=$row['education'];
		$skill=$row['skill'];
		$download=$row['download'];
		$status=$row['status'];
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
<form class="wd30" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  value="<?=$lang?>" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Target</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$target?>" name="target">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Experience</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$experience?>" name="experience">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Educatoin</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$education?>" name="education">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skill</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$skill?>" name="skill">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Download</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$download?>" name="download">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col">
  	<input type="hidden" name="id" value="<?=$id?>">	
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	<button type="submit" class="btn btn-danger"><a href="../resume.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<!-- <?php

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$lang=strtolower($_POST['lang']);
	$target=$_POST['target'];
	$experience=$_POST['experience'];
	$education=$_POST['education'];
	$skill=$_POST['skill'];
	$download=$_POST['download'];
	$status=$_POST['status'];
	$sql='UPDATE `resume` SET `lang`="'.$lang.'",`target`="'.$target.'",`text`="'.$text.'",`experience`="'.$experience.'",`education`="'.$education.'",`skill`="'.$skill.'",`download`="'.$download.'",`status`="'.$status.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
		 header("Location: ../resume.php");
	}
}

?> -->
</body>
</html>