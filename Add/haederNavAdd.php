<?php
include("../db.php");
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
<form class="flexAdd" method="get">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lang</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="Lang"  placeholder="Example en,az">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Message</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="message">
  </div>
  <div class="mb-3 ">
    <label for="exampleInputPassword1" class="form-label">TypeWriter1</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter2</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye2">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TypeWriter3</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tpye3">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Location</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="location">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Works</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="work">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contact</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="contact">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status</label>
    <!-- <input type="checkbox" maxlength="4"   value="0" class="form-control" id="exampleInputPassword1" name="status"> -->
    <div></div>
    <input type="radio" class="btn-check" name="status" id="btnradio1" value="false" autocomplete="off"  checked>
 	<label class="btn btn-outline-primary" for="btnradio1">False</label>
	<input type="radio" class="btn-check" name="status" id="btnradio1" value="true" autocomplete="off" checked >
 	<label class="btn btn-outline-primary" for="btnradio1">True</label>
  </div>
  <div class="text-center col"><button type="submit" class="btn btn-primary">Submit</button></div>
</form>


</body>
</html>