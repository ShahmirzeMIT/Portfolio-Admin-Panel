<?php
include('db.php');
include('header.php');
?>
	<main>
	<div><a href="./Add/headerMenuAdd.php"  class="fs-5 text-success text-decoration-none">Add Translation Content  <i class="fa-regular fa-square-plus my-2"></i></a> </div>
		<table class="table">
		<thead class="container">
		<tr>
			<th scope="col">id</th>
			<th scope="col">menu</th>
			<th scope="col">slag</th>
			<th scope="col">status</th>
		</tr>
		</thead>
		<tbody>
			<?php
			     $sql='SELECT * FROM `headermenu` WHERE `status`="1"';
				$result=mysqli_query($conn,$sql);
				if(mysqli_num_rows($result)>0){
					while($row=mysqli_fetch_assoc($result)){
						$id=$row['id'];
						$menu=$row['menu'];
						$slag=$row['slag'];
						$status=$row['status'];
						echo '
						<tr>
							<th scope="row">'.$id.'</th>
							<td>'.$menu.'</td>
							<td>'.$slag.'</td>
							<td>'.$status.'</td>
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