<?php include("../db.php");
$message="";
if(isset($_POST['name']) && isset($_POST['percent'])){
  $name=$_POST['name'];
  $percent=$_POST['percent'];
  $sql='SELECT * FROM `skill` WHERE `name`="'.$name.'" OR `percent`="'.$percent.'" ';
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)<=0){
    if($name!="" && $percent!="" ){
      $sql2='INSERT INTO `skill`(`id`, `name`, `percent`) VALUES (NULL,"'.$name.'","'.$percent.'")';
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
  <select class="form-select" aria-label="Default select example" name="name">
  <option >Choose</option>
    <?php 
    $arr2=array();
    $idAdd=array();
    $name2="";
    $write="";
    $sql='SELECT * FROM `translation` WHERE `name` LIKE "skill%"';
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
    <label for="exampleInputEmail1" class="form-label">Percent</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="percent" >
  </div> 
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../skill.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>