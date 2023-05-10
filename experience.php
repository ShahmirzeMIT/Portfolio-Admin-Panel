<?php
include('db.php');
include('header.php');
?>
	<main>
     <div><a href="./Add/experienceAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">name</th>
			<th scope="col">place</th>
			<th scope="col">period</th>
			<th scope="col">description</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `experience` ';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$name=$row['name'];
						$place=$row['place'];
						$period=$row['period'];
						$description=$row['description'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$name.'</td>
							<td>'.$place.'</td>
							<td>'.$period.'</td>
							<td>'.$description.'</td>
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