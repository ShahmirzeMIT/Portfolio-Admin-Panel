<?php include("../db.php");
$message="";
if(isset($_POST['lang']) && isset($_POST['schoolName']) && isset($_POST['year']) && isset($_POST['text'])){		
	$lang=strtolower($_POST['lang']);
	$schoolName=$_POST['schoolName'];
	$year=$_POST['year'];
	$text=$_POST['text'];
	$sql='SELECT * FROM `education` WHERE `lang`="'.$lang.'"';
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)<=0){
		if($lang!=="" && $schoolName!=="" && $year!=="" && $text!==""){
			$sql='INSERT INTO `education`(`id`, `lang`, `schoolName`, `year`, `text`) VALUES (NULL,"'.$lang.'","'.$schoolName.'","'.$year.'","'.$text.'")';
			$result=mysqli_query($conn,$sql);
		} else $message="Butun Xanalari Doldur";
	} else $message="Dil Artiq istifade olunub";
	
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
    <label for="exampleInputPassword1" class="form-label">schoolName</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="schoolName">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Year</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="year">
  </div>  
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="text">
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button> <button type="submit" class="btn btn-danger"><a href="../education.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<div class="text-danger text-center fs-4"><?=$message?></div>
</body>
</html>