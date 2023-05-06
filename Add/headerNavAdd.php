<?php
include("../db.php");
$message="";
if(isset($_POST['lang']) && isset($_POST['message']) && isset($_POST['tpye1']) && isset($_POST['tpye2'])&& isset($_POST['tpye3']) && isset($_POST['location']) && isset($_POST['work']) && isset($_POST['contact']) && isset($_POST['status']) ){
 $lang=strtolower($_POST['lang']);
 $message=$_POST['message'];
 $tpye1=$_POST['tpye1'];
 $tpye2=$_POST['tpye2'];
 $tpye3=$_POST['tpye3'];
 $location=$_POST['location'];
 $work=$_POST['work'];
 $contact=$_POST['contact'];
 $status=$_POST['status'];
 if( $lang!=="" && $message!=="" &&  $tpye1!=="" &&  $tpye2!=="" &&  $tpye3!=="" &&  $location!=="" && $work!=="" && $contact!=="" && $status!==""){
  $sql='SELECT * FROM `header` WHERE `lang`="'.$lang.'"';
  $result=mysqli_query($conn,$sql);
  
  if(mysqli_num_rows($result)<=0){
      $sql='INSERT INTO `header`(`id`, `lang`, `message`, `typewriter1`, `typewriter2`, `typewriter3`, `location`, `works`, `contact`, `status`) VALUES (NULL,"'.$lang.'","'.$message.'","'.$tpye1.'","'.$tpye2.'","'.$tpye3.'","'.$location.'","'.$work.'","'.$contact.'","'.$status.'")';
      $result=mysqli_query($conn,$sql);
      if($result){
        header("Location:");
      }
  }
  else $message="Dil Artiq Istifade OLunub";
 }
 else $message="Xanalari Bos Saxlamaq olmaz 😡";

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
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="message">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">TypeWriter1</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter3</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="location">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Works</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="work">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="contact">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../headerNav.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>

</body>
</html>