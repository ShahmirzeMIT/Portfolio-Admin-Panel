<?php 
include("db.php");
include("header.php"); 
?>
	<main>
		<div><a href="Add/contact1Add.php"  class="fs-5 text-success text-decoration-none">Add Menu Language  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
	<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">lang</th>
			<th scope="col">title</th>
			<th scope="col">text</th>
			<th scope="col">locationName</th>
			<th scope="col">location	</th>
			<th scope="col">contact</th>
			<th scope="col">call</th>
			<th scope="col">status</th>
			<th>Update</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `contact1`';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$lang=$row['lang'];
						$title=$row['title'];
						$text=$row['text'];
						$locationName=$row['locationName'];
						$location=$row['location'];
						$contact=$row['contact'];
						$call=$row['call'];
						$status=$row['status'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$lang.'</td>
							<td>'.$title.'</td>
							<td>'.$text.'</td>
							<td>'.$locationName.'</td>
							<td>'.$location.'</td>
							<td>'.$contact.'</td>
							<td>'.$call.'</td>
							<td>'.$status.'</td>
							<td><a href="./update/contact1Update.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
						</tr>';
					}
				}
			
			?>
		</tbody>
		</table>
	</main>
<?php include("footer.php") ;?>