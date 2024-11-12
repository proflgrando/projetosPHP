<?php

require "conn.php";

$data = $conn->query("SELECT * FROM tasks");

?>

<?php include "header.php"; ?>

		<div class="container">
			<form method="POST" action="insert.php" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<label for="inputPassword2" class="sr-only">create</label>
				<input name="mytask" type="text" class="form-control" id="inputPassword2" placeholder="enter task">
			</div>
		   
		    <button name="submit" type="submit" class="btn btn-primary mb2">Create</button>

			</form>
		
		
		
		

	<table class="table">
		  <thead>
		    <tr>
		      <th>#</th>
		      <th>Task Name</th>
		      <th>delete</th>
		      <th>update</th>
		    </tr>
		  </thead>
		  <tbody>  
		    <?php while($rows = $data->fetch(PDO::FETCH_OBJ)): ?>
		  	<tr>
		  	<td><?php echo $rows->id; ?></td>
		  	<td><?php echo $rows->name; ?></td>			   
			<td><a href="delete.php?del_id=<?php echo $rows->id; ?>" class="btn btn-danger">delete</a></td>
			<td><a href="update.php?upd_id=<?php echo $rows->id; ?>" class="btn btn-warning">update</a></td>
	
		    </tr>
		<?php endwhile; ?>



</tbody>
</table>


	
</div>

<?php include "footer.php"; ?>
