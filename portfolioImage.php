<?php
include('db.php');
include('header.php');
?>
	<main>
     <div><a href="./Add/ImageAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">name</th>
			<th scope="col">src</th>
		</tr>
		</thead>
		<tbody>
			<?php
				$sql='SELECT * FROM `portfolioimg` ';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$menuId=$row['menuId'];
						$src=$row['src'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td><img src="image/'.$src.'" style="width:300px; height:300px;object-fit: contain;margin: 0 auto !important;"/></td>
							<td>'.$menuId.'</td>
							<td><a href="./update/imageUpdate.php?id='.$id.'" class="px-3 "><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
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