<!DOCTYPE html>
<html>
<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<form action="" method="">
		<div class="form-group" id="batch">
			<label for="batch">Batch Name:</label>
				<select type="text" class="form-control" id="type" name="batch">
					<option>Select</option>

<?php
	include 'inc/connect.php';

	$course_id=$_GET['course_id'];
	$batch = $_POST['batch'];

	if ($course_id!="") {

			$sl="SELECT * FROM batch_tb WHERE course_id=$course_id";
			$res= mysqli_query($conn,$sl);

			while ($row=mysqli_fetch_array($res)) {

	?>
			<option value="<?php echo $row['batch_id']; ?>"><?php echo $row['batch_name']; ?></option>
<?php
		}

	}
?>


				</select>
		</div>

	</form>
</body>
</html>


