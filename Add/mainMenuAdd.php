<?php
include('../db.php');
$message="";
if(isset($_POST['lang']) && isset($_POST['name']) && isset($_POST['work']) &&  isset($_POST['experience']) && isset($_POST['years']) && isset($_POST['aboutMe']) && isset($_POST['call']) && isset($_POST['know']) &&  isset($_POST['status'])){
$lang=strtolower($_POST['lang']);
$name=$_POST['name'];
$work=$_POST['work'];
$experience=$_POST['experience'];
$about=$_POST['aboutMe'];
$years=$_POST['years'];
$call=$_POST['call'];
$know=$_POST['know'];
$status=$_POST['status'];
$sql='SELECT * FROM `mainmenu` WHERE `lang`="'.$lang.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)<=0){
	if($lang!="" && $name!="" && $work!="" && $experience!="" && $years!="" && $call!="" && $know!="" && $status!="" ){
		$sql='INSERT INTO `mainmenu`(`id`, `lang`, `name`, `work`, `experience`, `years`, `aboutMe`, `call`, `know`, `status`) VALUES (NULL,"'.$lang.'","'.$name.'","'.$work.'","'.$experience.'","'.$years.'","'.$about.'","'.$call.'","'.$know.'","'.$status.'")';
		$result=mysqli_query($conn,$sql);
		}
		else $message="Butun xanalari doldur";	
}
else $message+"Dil Artiq Istifade Olunub";

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
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="Example en,az" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="name">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Work</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="work">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Experience</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="experience">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Years</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="years">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">About Me</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="aboutMe">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Call</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="call">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Know</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="know">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../mainMenu.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>

</body>
</html>