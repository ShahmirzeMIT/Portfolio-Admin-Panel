<?php 
include("db.php");
include("header.php"); 
?>
	<main>
		<div><a href="Add/headerNavAdd.php"  class="fs-5 text-success text-decoration-none">Add Menu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
	<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">message</th>
			<th scope="col">typewriter1</th>
			<th scope="col">typewriter2</th>
			<th scope="col">typewriter3</th>
			<th scope="col">location</th>
			<th scope="col">works</th>
			<th scope="col">contact</th>
			<th scope="col">status</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `header`';
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
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$message.'</td>
							<td>'.$tpye1.'</td>
							<td>'.$tpye2.'</td>
							<td>'.$tpye3.'</td>
							<td>'.$location.'</td>
							<td>'.$work.'</td>
							<td>'.$contact.'</td>
							<td>'.$status.'</td>
							<td><a href="./update/headerNavUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>';
					}
				}
			
			?>
		</tbody>
		</table>
	</main>
<?php include("footer.php") ;?>