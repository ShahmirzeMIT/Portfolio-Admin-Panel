<?php  include("../db.php");
$sentId=$_GET["id"];
$sql='SELECT * FROM `header` WHERE  `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
		$id=$row['id'];
		$lang=$row['lang'];
		$message=$row['message'];
		$tpye1=$row['typewriter1'];
		$tpye2=$row['typewriter2'];
		$tpye3=$row['typewriter3'];
		$location=$row['location'];
		$work=$row['works'];
		$contact=$row['contact'];
		$status=$row['status'];
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
<form class="flexAdd" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="lang" value="<?=$lang?>" maxlength="5">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$message?>" name="message">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">TypeWriter1</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$tpye1?>" name="tpye1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$tpye2?>" name="tpye2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter3</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$tpye3?>" name="tpye3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$location?>" name="location">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Works</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$work?>" name="work">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" >Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="<?=$contact?>" name="contact">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <div></div>
     <input type="radio" class="btn-check" id="success-outlined" autocomplete="off"  name="status" value="1">
    <label class="btn btn-outline-success" for="success-outlined">True</label>
    <input type="radio" class="btn-check"  id="danger-outlined" autocomplete="off" name="status" value="0">
    <label class="btn btn-outline-danger" for="danger-outlined">False</label>
  </div>
  <div class="text-center col">
  <input type="hidden" name="id" value="<?=$id?>">	
  <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
  <button type="submit" class="btn btn-danger"><a href="../headerNav.php" class="text-light text-decoration-none">Go Back</a></button>
</div>
</form>
<?php
$salam="salam";

if(isset($_POST['submit'])){
	$id=$_POST["id"];
	$lang=strtolower($_POST['lang']);
	$message=$_POST['message'];
	$tpye1=$_POST['tpye1'];
	$tpye2=$_POST['tpye2'];
	$tpye3=$_POST['tpye3'];
	$location=$_POST['location'];
	$work=$_POST['work'];
	$contact=$_POST['contact'];
	$status=$_POST['status'];
	echo $status;
	$sql='UPDATE `header` SET  `lang`="'.$lang.'",`message`="'.$message.'",`typewriter1`="'.$tpye1.'",`typewriter2`="'.$tpye2.'",`typewriter3`="'.$tpye3.'",`location`="'.$location.'",`works`="'.$work.'",`contact`="'.$contact.'",`status`="'.$status.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
		 header("Location: ../headerNav.php");
	}
}

?>
<!-- <div class="text-danger text-center fs-4"><?=$message?></div> -->

</body>
</html>