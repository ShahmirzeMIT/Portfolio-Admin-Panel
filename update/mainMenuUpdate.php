<?php
include("../db.php");
$sentId=$_GET["id"];
$sql='SELECT * FROM `mainmenu` WHERE `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row["id"];
		$lang=$row['lang'];
		$name=$row['name'];
		$work=$row['work'];
		$experience=$row['experience'];
		$years=$row['years'];
		$about=$row['aboutMe'];
		$call=$row['call'];
		$know=$row['know'];
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
<form class="flexAdd" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="<?=$lang?>" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$name?>" name="name">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Work</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$work?>" name="work">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Experience</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$experience?>" name="experience">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Years</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$years?>" name="years">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About Me</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$about?>" name="aboutMe">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Call</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$call?>" name="call">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Know</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$know?>" name="know">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off"  name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col">
  <input type="hidden" name="id" value="<?=$id?>">	
  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
  <button type="submit" class="btn btn-danger"><a href="../mainMenu.php" class="text-light text-decoration-none">Go Back</a></button>
</div>
</form>
<!-- <?php

if(isset($_POST['submit'])){
	$id=$_POST["id"];
	$lang=strtolower($_POST['lang']);
	$name=$_POST['name'];
	$work=$_POST['work'];
	$experience=$_POST['experience'];
	$years=$_POST['years'];
	$about=$_POST['aboutMe'];
	$know=$_POST['know'];
	$call=$_POST['call'];
	$status=$_POST['status'];
	$sql='UPDATE `mainmenu` SET `lang`="'.$lang.'",`name`="'.$name.'",`work`="'.$work.'",`experience`="'.$experience.'",`years`="'.$years.'",`aboutMe`="'.$about.'",`call`="'.$call.'",`know`="'.$know.'",`status`="'.$status.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
		 header("Location: ../mainMenu.php");
	}
}

?> -->
<!-- <div class="text-danger text-center fs-4"><?=$message?></div> -->

</body>
</html>