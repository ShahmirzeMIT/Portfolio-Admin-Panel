<?php 
include("db.php");
include("header.php"); 
?>
	<main>
		<div><a href="Add/contact2Add.php"  class="fs-5 text-success text-decoration-none">Add Menu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
	<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">title</th>
			<th scope="col">name</th>
			<th scope="col">email</th>
			<th scope="col">help</th>
			<th scope="col">send</th>]
			<th scope="col">status</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `contact2`';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$lang=$row['lang'];
						$title=$row['title'];
						$name=$row['name'];
						$email=$row['email'];
						$help=$row['help'];
						$send=$row['send'];
						$status=$row['status'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$title.'</td>
							<td>'.$name.'</td>
							<td>'.$email.'</td>
							<td>'.$help.'</td>
							<td>'.$send.'</td>
							<td>'.$status.'</td>
							<td><a href="./update/contact2Update.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>';
					}
				}
			 
			?>
			
		</tbody>
		</table>
	</main>
<?php include("footer.php") ;?> 