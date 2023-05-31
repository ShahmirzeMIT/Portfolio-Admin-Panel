<?php
session_start();
include("db.php");

$message="";
if(isset($_POST['email']) &&isset($_POST['name']) && isset($_POST['pass']) ){
	if($_POST['email']!=="" && $_POST['name']!=="" && $_POST['pass']!==""){
		$email=$_POST['email'];
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$sql='SELECT * FROM `admin` WHERE `email`="'.$email.'" AND `name`="'.$name.'" AND `pass`="'.$pass.'" ';
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
			$_SESSION['name']=$_POST['name'];
			header("Location: index.php");
		}
		else $message="Istifadeci adini ve parolunu dogru daxil edin";
	}
	else{
		$message="Email Name ve Passwordu Bos Saxlamaq olmaz";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">	
	<link rel="stylesheet" href="style.css">
</head>
<body>
<form class="wd30 " method="POST">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="">
      <input type="email" class="form-control" id="inputEmail3" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Name</label>
    <div class="">
      <input type="text" class="form-control" id="inputPassword3" name="name">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="">
      <input type="password" class="form-control" id="inputPassword3" name="pass">
    </div>
  </div>
  <div class="text-center"><button type="submit" class="btn btn-primary">Sign in</button></div>
</form>
<p class="text-center text-danger fs-4 text"><?=$message?></p>

</body>
</html>