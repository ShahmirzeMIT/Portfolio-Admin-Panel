<?php
include("db.php");
include('header.php');

?>
<main>
     <div><a href="./Add/pVideoAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">Video </th>
			<th scope="col">Upload Id</th>
			<th scope="col">GitLink</th>
			<th scope="col">Site Link</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `video` ';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$menuId=$row['Uplaod_id'];
						$name=$row['name'];
						$git=$row['git'];
						$site=$row['site'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
					      	<td>
								<video width="400" controls>
								<source src="./build/assets/img/'.$name.'" type="video/mp4">
								</video>
							</td>
							<td>'.$menuId.'</td>
							<td>'.$git.'</td>
							<td>'.$site.'</td>
							<td><a href="./update/pVideoUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>
						';
					}
				}
			?>
		</tbody>
		</table>
	</main>
