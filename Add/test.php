<?php include("../db.php");
$message="";
if(isset($_POST['name']) && isset($_POST['langAz']) && isset($_POST['langEn']) && isset($_POST['langRu'])){
	$name=$_POST['name'];
	$langAz=$_POST['langAz'];
	$langEn=$_POST['langEn'];
	$langRu=$_POST['langRu'];
	if($name!=="" && $langAz!=="" && $langEn!=="" && $langRu!==""){
			$sql='INSERT INTO `test`(`id`, `name`, `az`, `en`, `ru`) VALUES (NULL,"'.$name.'","'.$langAz.'","'.$langEn.'","'.$langRu.'")';
			$result=mysqli_query($conn,$sql);
	}
	else $message="Butun Xanalari Doldur";
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
    <input type="text" class="form-control" id="exampleInputEmail1" name="name"  placeholder="Example en,az">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Az</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langAz"></textarea>
	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">En</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langEn" ></textarea>
	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ru</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langRu"></textarea>
	</div>
  </div>
 
 
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../test.php" class="text-light text-decoration-none">Go Back</a></button> 
</div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>