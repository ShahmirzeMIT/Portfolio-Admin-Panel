<?php include("../db.php");

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