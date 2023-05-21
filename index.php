<?php 
session_start();
include("db.php");
$name="";
if(!isset($_SESSION['name']) || $_SESSION['name']=="") header("Location: login.php");
include("header.php");
$name=$_SESSION['name'];
?>
		<main class="bg-dark h60 psR">
		<div class="content">
			<div class="content__container">
			<ul class="content__container__list">
				<li class="content__container__list__item">Hi Admin <?=$name?>!</li>
				<li class="content__container__list__item">How are You?</li>
				<li class="content__container__list__item">Update site?</li>
				<li class="content__container__list__item">or Cahnge !</li>
			</ul>
			</div>
		</div>
		</main>
		<script src="app.js"></script>
<?php include('footer.php')?>
	
	