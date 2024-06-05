<?php include("../db.php");
$sentId=$_GET['id'];
$sql='SELECT * FROM `translation` WHERE `id`="'.$sentId.'"';
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		$id=$row['id'];
		$az=$row['az'];
		$en=$row['en'];
		$ru=$row['ru'];
	}}

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
    <label for="exampleInputPassword1" class="form-label">Az</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langAz" ><?=$az?></textarea>
	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">En</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langEn"  ><?=$en?></textarea>
	</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ru</label>
    <div class="form-floating">
		<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="langRu"  ><?=$ru?></textarea>
	</div>
  </div>
 	<input type="hidden" name="id" value="<?=$id?>">
 
  <div class="text-center col"><button type="submit" class="btn btn-primary" name="submit">Submit</button>
   <button type="submit" class="btn btn-danger"><a href="../translation.php" class="text-light text-decoration-none">Go Back</a></button> 
</div>
</form>
<?php
if(isset($_POST['submit'])){
	$id=$_POST['id'];
	$langAz=$_POST["langAz"];
	$langEn=$_POST["langEn"];
	$langRu=$_POST["langRu"];
	$sql='UPDATE `translation` SET `az`="'.$langAz.'",`en`="'.$langEn.'",`ru`="'.$langRu.'" WHERE `id`="'.$id.'"';
	$result=mysqli_query($conn,$sql);
	if($result>0){
		header("Location: ../translation.php");
		header("refresh: 1; url = ../traslatioconvertjson.php");
	}	
}

?>
</body>
</html>