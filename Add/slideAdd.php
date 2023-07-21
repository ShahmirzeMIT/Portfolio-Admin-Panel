<?php include("../db.php");
$message="";
if(isset($_POST['name']) && isset($_FILES['file']) && isset($_POST['text']) && isset($_POST['workplace']) && $text=$_POST['icon'] && $text=$_POST['link']){
  $name2=$_POST['name'];
  $text=$_POST['text'];
  $icon=$_POST['icon'];
  $link=$_POST['link'];
  $workplace=$_POST['workplace'];
  $sql='SELECT * FROM `slide` WHERE `name`="'.$name2.'" OR `text`="'.$text.'" OR `workplace`="'.$workplace.'" OR `icon`="'.$icon.'" OR `link`="'.$link.'"' ;
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)<=0){
    if($name2!="" && $text!=""  && $workplace!=""  && $icon!="" && $link!=""){
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
      $sql2='INSERT INTO `slide`(`id`, `name`, `src`, `text`, `workplace`, `link`, `icon`) VALUES (NULL,"'.$name2.'","'.$name.'","'.$text.'","'.$workplace.'","'.$link.'",,"'.$icon.'")';
      $result2=mysqli_query($conn,$sql2);
    }
    else $message="Butun secimleri yaz";
  }
    else  $message="Artiq bu fieldi elave etmisen";

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
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
  </div>
  <div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" id="formFile" name="file" accept="image/png, image/jpeg , image/jpg">
</div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Text</label>
  <select class="form-select" aria-label="Default select example" name="text">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `translation` WHERE `name` LIKE "slideR%"';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $id2=$row['id'];
        $name2=$row['name'];
        array_push($idAdd,$id2);
        array_push($arr2,$name2);
      }
       }
       for ($i=0; $i < count($arr2); $i++) { 
        echo '<option value="'.$idAdd[$i].'">'.$arr2[$i].'</option>';
       }
    ?>
</select>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Link</label>
  <select class="form-select" aria-label="Default select example" name="link">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `translation` WHERE `name` LIKE "slideSi%"';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $id2=$row['id'];
        $name2=$row['name'];
        array_push($idAdd,$id2);
        array_push($arr2,$name2);
      }
       }
       for ($i=0; $i < count($arr2); $i++) { 
        echo '<option value="'.$idAdd[$i].'">'.$arr2[$i].'</option>';
       }
    ?>
</select>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Icon</label>
  <select class="form-select" aria-label="Default select example" name="icon">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `translation` WHERE `name` LIKE "slideW%"';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $id2=$row['id'];
        $name2=$row['name'];
        array_push($idAdd,$id2);
        array_push($arr2,$name2);
      }
       }
       for ($i=0; $i < count($arr2); $i++) { 
        echo '<option value="'.$idAdd[$i].'">'.$arr2[$i].'</option>';
       }
    ?>
</select>
  </div>
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Workplace</label>
  <select class="form-select" aria-label="Default select example" name="workplace">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `translation` WHERE `name` LIKE "slideW%"';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $id2=$row['id'];
        $name2=$row['name'];
        array_push($idAdd,$id2);
        array_push($arr2,$name2);
      }
       }
       for ($i=0; $i < count($arr2); $i++) { 
        echo '<option value="'.$idAdd[$i].'">'.$arr2[$i].'</option>';
       }
    ?>
</select>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../slide.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>