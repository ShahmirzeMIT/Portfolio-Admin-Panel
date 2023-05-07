<?php
include("../db.php");
$message="";
if(isset($_POST['lang']) && isset($_POST['text'])  && isset($_POST['target']) && isset($_POST['experience']) && isset($_POST['education'])&& isset($_POST['skill']) && isset($_POST['download']) && isset($_POST['status']) ){
  $lang=strtolower($_POST['lang']);
  $target=$_POST['target'];
  $text=$_POST['text'];
  $experience=$_POST['experience'];
  $education=$_POST['education'];
  $skill=$_POST['skill'];
  $download=$_POST['download'];
  $status=$_POST['status'];
 if( $lang!=="" && $text!=="" && $target!=="" &&  $experience!=="" &&  $education!=="" &&  $skill!=="" && $download!=="" && $status!==""){
  $sql='SELECT * FROM `resume` WHERE `lang`="'.$lang.'"';
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)<=0){
      $sql='INSERT INTO `resume`(`id`, `lang`, `target`, `text`, `experience`, `education`, `skill`, `download`, `status`) VALUES (NULL,"'.$lang.'","'.$target.'","'.$text.'","'.$experience.'","'.$education.'","'.$skill.'","'.$download.'","'.$status.'")';
      $result=mysqli_query($conn,$sql);
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
<form class="wd30" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang"  placeholder="Example en,az" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="text">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Target</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="target">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Experience</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="experience">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Educatoin</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="education">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Skill</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="skill">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Download</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="download">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off" checked name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../resume.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>

</body>
</html>