<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';

	if (isset($_POST['submit'])) {

	$student_id	=$_GET['student_id'];

	$name 		= $_POST['name'];
	$cell 		= $_POST['cell'];
	$address 	= $_POST['address'];
	$result 	= $_POST['result'];

	$sql= "UPDATE student_reg SET student_id=$student_id, student_name='$name', cell='$cell', address='$address', result='$result' WHERE student_id=$student_id";

	$qry= mysqli_query($conn,$sql);

	header("location: student_info.php");
	}

	

		include 'inc/header1.php';
		include 'inc/adminnav.php';
?>
	
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Student Update</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">
								<div class="form-group">
									<label for="name">Full Name: </label>
									<input type="text" name="name" id="name" class="form-control" required="" />
								</div>								
								<div class="form-group">
									<label for="cell">Cell: </label>
									<input type="text" name="cell" id="cell" class="form-control" required="" />
								</div>
								<div class="form-group">
									<label for="address">Address: </label>
									<textarea type="text" name="address" id="address" class="form-control" rows="3" required=""></textarea>
								</div>
								<div class="form-group">
									<label for="result">Result: </label>
									<input type="text" name="result" id="result" class="form-control" required="" />
								</div>
								
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
		
<?php include 'inc/footer.php';?>