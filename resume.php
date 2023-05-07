<?php 
include("db.php");
include("header.php"); 
?>
	<main>
		<div><a href="Add/resumeAdd.php"  class="fs-5 text-success text-decoration-none">Add Menu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
	<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">target</th>
			<th scope="col">experience</th>
			<th scope="col">education</th>
			<th scope="col">skill</th>
			<th scope="col">download</th>
			<th scope="col">status</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `resume`';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$lang=$row['lang'];
						$target=$row['target'];
						$experience=$row['experience'];
						$education=$row['education'];
						$skill=$row['skill'];
						$download=$row['download'];
						$status=$row['status'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$target.'</td>
							<td>'.$experience.'</td>
							<td>'.$education.'</td>
							<td>'.$skill.'</td>
							<td>'.$download.'</td>
							<td>'.$status.'</td>
							<td><a href="./update/resumeUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>';
					}
				}
			
			?>
		</tbody>
		</table>
	</main>
<?php include("footer.php") ;?>