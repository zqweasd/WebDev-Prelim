<?php

include "server.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
</head>



<body>
	<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-3">Users</h1>
    <p class="lead">This is a list of registered user in the database you can edit or delete.</p>
    <p class="lead">Have fun.</p>
  </div>
</div>
<div class="container">
	<div class="table-responsive">
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col">Id</th>
					<th scope="col">Name</th>
					<th scope="col">Usename</th>
					<th scope="col">Email</th>
					<th scope="col">Favorite Music</th>
					<th scope="col">Date of Birth</th>
					<th scope="col">Password</th>
					<th scope="col">Edit</th>
					<th scope="col">Delete</th>
				</tr>
			</thead>

	<?php
	$record = mysqli_query($db, "SELECT * FROM `users` ");
	while($data = mysqli_fetch_array($record))
	{
		?>
	<tbody>
		<tr>
			<td><?php echo $data['id'];?></td>
			<td><?php echo $data['name'];?></td>
			<td><?php echo $data['username'];?></td>
			<td><?php echo $data['email'];?></td>
			<td><?php echo $data['favoritemusic'];?></td>
			<td><?php echo $data['dateofbirth'];?></td>
			<td><?php echo $data['password'];?></td>
			<td><button id='edit' class="btn btn-default"><a href="edit.php?id=<?php echo $data['id'];?>">Edit</a></button></td>
			<td><button type="button" id='del' class="btn btn-danger"><a href="delete.php? id=<?php echo $data['id'];?>">Delete</a></button></td>
		</tr>
	</tbody>

		<?php
	}

	?>
		</table>
	</div>
</div>

</body>

</html>