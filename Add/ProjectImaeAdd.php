<?php
include("../db.php");

$message = "";

if (isset($_POST['imageId']) && isset($_POST['git']) && isset($_POST['site']) && isset($_FILES['file'])) {
  $imageId = $_POST['imageId'];
  $git = $_POST['git'];
  $site = $_POST['site'];

  if ($imageId != "") {
    $temp = $_FILES["file"]["tmp_name"];
    $name = $_FILES["file"]["name"];
    $path = "../build/assets/img/" . $name;
    $size = $_FILES["file"]["size"];
    $type = strtolower(pathinfo($path, PATHINFO_EXTENSION));
    $ok = 1;
    $check = getimagesize($temp);

    if ($check == false || file_exists($path) || $size > 500000) {
      $ok = 0;
    }

    if ($ok) {
      move_uploaded_file($temp, $path);
      $sql2 = "INSERT INTO `portfoliomenu`(`id`, `Upload_id`, `name`, `git`, `site`) VALUES (NULL, '$imageId', '$name', '$git', '$site')";
      $result2 = mysqli_query($conn, $sql2);
    }
  } else {
    $message = "Butun secimleri yaz";
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
<form class="wd30" method="post" enctype="multipart/form-data">
 
<div class="mb-3">
  <label for="formFile" class="form-label">Image</label>
  <input class="form-control" type="file" id="formFile" name="file" accept="image/png, image/jpeg , image/jpg">
</div>
<div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Image</label>
  <select class="form-select" aria-label="Default select example" name="imageId">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `portfolioimg`';
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $id2=$row['id'];
        $name2=$row['src'];
        array_push($idAdd,$id2);
        array_push($arr2,$name2);
      }
       }
       for ($i=0; $i < count($arr2); $i++) { 
        echo '<option value="'.$idAdd[$i].'">'. $idAdd[$i].'</option>';
       }
       
    ?>
</select>
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Git</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="git" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Site</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="site" >
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../projectImage.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>