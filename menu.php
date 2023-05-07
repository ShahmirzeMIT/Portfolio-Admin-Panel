<?php 
include("db.php");
include("header.php");
?>
	<main>
	<div><a href="./Add/menuAdd.php"  class="fs-5 text-success text-decoration-none">Add Menu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
	<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">name</th>
			<th scope="col">status</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
		<?php
			$sql='SELECT * FROM `menu`';
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row=mysqli_fetch_assoc($result)) {
					$id=$row['id'];
					$lang=$row['lang'];
					$name=$row['name'];
					$status=$row['status'];
					echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$name.'</td>
							<td>'.$status.'</td>
							<td><a href="./update/menuUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>
						';
				}
			}
		?>
		</tbody>
		</table>	
	</main>
<?php
include("footer.php");
?>