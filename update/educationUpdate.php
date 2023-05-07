<?php include("../db.php");
$sentId=$_GET['id'];
$sql='SELECT * FROM `education` WHERE `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$lang=$row['lang'];
		$schoolName=$row['schoolName'];
		$year=$row['year'];
		$text=$row['text'];
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
<form class="wd30" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="<?=$lang?>" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">SchoolName</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$schoolName?>" name="schoolName">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Year</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  value="<?=$year?>"name="year">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">Text</label>
    <input type="text" class="form-control" id="exampleInputPassword1"  value="<?=$text?>"name="text">
  </div>
  <div class="text-center col">
  	<input type="hidden" name="id" value="<?=$id?>">	
	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
	 <button type="submit" class="btn btn-danger"><a href="../education.php" class="text-light text-decoration-none">Go Back</a></button></div>
</form>
<?php

if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$lang=strtolower($_POST['lang']);
	$schoolName=$_POST['schoolName'];
	$year=$_POST['year'];
	$text=$_POST['text'];
	$sql='UPDATE `education` SET `lang`="'.$lang.'",`schoolName`="'.$schoolName.'",`year`="'.$year.'",`text`="'.$text.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
			header("Location: ../education.php");
	}
}

?>

</body>
</html>