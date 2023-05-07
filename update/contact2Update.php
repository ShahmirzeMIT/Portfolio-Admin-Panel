<?php
include("../db.php");
$sentId=$_GET["id"];
$sql='SELECT * FROM `contact2` WHERE  `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$lang=$row['lang'];
    $title=$row['title'];
    $uName=$row['name'];
    $email=$row['email'];
    $help=$row['help'];
    $send=$row['send'];
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
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$title?>" name="title">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$uName?>" name="uname">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$email?>" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Help</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$help?>" name="help">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Send</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$send?>" name="send">
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
	<button type="submit" class="btn btn-danger"><a href="../contact2.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<?php

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$lang=strtolower($_POST['lang']);
  $title=$_POST['title'];
  $uName=$_POST['uName'];
  $email=$_POST['email'];
  $help=$_POST['help'];
  $send=$_POST['send'];
	$status=$_POST['status'];
  echo $email .".<hr>.";
  echo $help .".<hr>.";
  echo $send .".<hr>.";
  $sql2='UPDATE `contact2` SET `lang`="'.$lang.'",`title`="'.$title.'",`name`="'.$uName.'",`email`="'.$email.'",`help`="'.$help.'",`send`="'.$send.'",`status`="'.$status.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql2);
	if($result>0){
		  // header("Location: ../contact2.php");
	}

}

?>
</body>
</html>
