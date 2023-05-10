<?php
include('db.php');
include('header.php');

?>
	<main>
     <div><a href="./Add/translationAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">name</th>
			<th scope="col">az</th>
			<th scope="col">en</th>
			<th scope="col">ru</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `translation`';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$name=$row['name'];
						$az=$row['az'];
						$en=$row['en'];
						$ru=$row['ru'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$name.'</td>
							<td>'.$az.'</td>
							<td>'.$en.'</td>
							<td>'.$ru.'</td>
							<td><a href="./update/translationUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
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