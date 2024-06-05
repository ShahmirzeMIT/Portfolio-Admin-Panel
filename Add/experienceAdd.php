<?php include("../db.php");
$message="";
if(isset($_POST['name']) && isset($_POST['place']) && isset($_POST['period']) && isset($_POST['description'])){
  $name=$_POST['name'];
  $place=$_POST['place'];
  $period=$_POST['period'];
  $description=$_POST['description'];
  $sql='SELECT * FROM `experience` WHERE `name`="'.$name.'" AND `place`="'.$place.'" AND `description`="'.$description.'"';
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)<=0){
    if($name!="" && $place!="" && $period!="" && $description!="" ){
      $sql2='INSERT INTO `experience`(`id`, `name`, `place`, `period`, `description`) VALUES (NULL,"'.$name.'","'.$place.'","'.$period.'","'.$description.'")';
      $result2=mysqli_query($conn,$sql2);
    }
  else $message="butun Secimleri yaz";
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
<form class="wd30" method="post">
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name" >
  </div>
  <div class="mb-3">

  <label for="exampleInputEmail1" class="form-label">Place</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="place" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Period</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="period" >
  </div>
  <div class="mb-3">
  <label for="exampleInputEmail1" class="form-label">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="description" >
  </div>

 
 
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../experience.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>