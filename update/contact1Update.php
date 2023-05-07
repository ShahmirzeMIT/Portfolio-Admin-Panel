<?php
include("../db.php");
$message="";
$sentId=$_GET["id"];
$sql='SELECT * FROM `contact1` WHERE  `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$lang=strtolower($row['lang']);
		$title=$row['title'];
		$text=$row['text'];
		$locationName=$row['locationName'];
		$location=$row['location'];
		$contact=$row['contact'];
		$call=$row['call'];
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
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$text?>" name="text">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">LocationName</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$locationName?>" name="locationName">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$location?>" name="location">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$contact?>" name="contact">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Call</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$call?>" name="call">
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
	<button type="submit" class="btn btn-danger"><a href="../contact1.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<?php

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$lang=strtolower($_POST['lang']);
	$title=$_POST['title'];
	$text=$_POST['text'];
	$locationName=$_POST['locationName'];
	$location=$_POST['location'];
	$contact=$_POST['contact'];
	$call=$_POST['call'];
	$status=$_POST['status'];
	$sql='UPDATE `contact1` SET  `lang`="'.$lang.'",`title`="'.$title.'",`text`="'.$text.'",`locationName`="'.$locationName.'",`location`="'.$location.'",`contact`="'.$contact.'",`call`="'.$call.'",`status`="'.$status.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
		 header("Location: ../contact1.php");
	}
}

?>
</body>
</html>