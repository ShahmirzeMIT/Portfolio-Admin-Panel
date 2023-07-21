<?php
include('db.php');
include('header.php');
?>
	<main>
     <div><a href="./Add/slideAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">name</th>
			<th scope="col">src</th>
			<th scope="col">text</th>
			<th scope="col">icon</th>
			<th scope="col">link</th>
			<th scope="col">workplace</th>
			
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `slide` ';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$name=$row['name'];
						$src=$row['src'];
						$text=$row['text'];
						$link=$row['link'];
						$icon=$row['icon'];
						$workplace=$row['workplace'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$name.'</td>
							<td><img src="image/'.$src.'" style="width:300px; height:300px;object-fit: contain;margin: 0 auto !important;"/></td>
							<td>'.$text.'</td>
							<td>'.$link.'</td>
							<td>'.$icon.'</td>
							<td>'.$workplace.'</td><td><a href="./update/slideUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
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