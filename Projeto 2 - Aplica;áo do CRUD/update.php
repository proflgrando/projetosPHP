<?php

require "conn.php";

if(isset($_GET['upd_id'])) {

    $id = $_GET['upd_id'];

    $data = $conn->query("SELECT * FROM tasks WHERE id = '$id'");

    $rows = $data->fetch(PDO::FETCH_OBJ);


    if(isset($_POST["submit"])) {
   
        $task = $_POST['mytask'];

        $update = $conn->prepare("UPDATE tasks SET name= :name WHERE id = '$id'");

        $update->execute([':name' => $task]);

     header("location: index.php");
    } 
}

?>

<?php include "header.php"; ?>  

<form method="POST" action="update.php?upd_id=<?php echo $id; ?>" class="form-inline" id="user_form">
			<div class="form-group mx-sm-3 mb-2">
				<label for="inputPassword2" class="sr-only">create</label>
				<input name="mytask" type="text" class="form-control" id="inputPassword2" placeholder="enter task" 
                value="<?php echo $rows->name; ?>">
			</div>
		   
		    <button name="submit" type="submit" class="btn btn-primary mb2">update</button>

			</form>


<?php include "footer.php"; ?>