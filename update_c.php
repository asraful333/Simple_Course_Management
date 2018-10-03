

<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';
	if (isset($_POST['submit'])) {
		$course_id=$_GET['course_id'];
	$course_n = $_POST['course_n'];
	$type = $_POST['type'];
	$sql= "UPDATE course_tb SET course_id=$course_id, course_name='$course_n',course_type='$type' WHERE course_id=$course_id";
	$qry= mysqli_query($conn,$sql);

	header("location: admin_profile.php");
	}

	

		include 'inc/header1.php';
		include 'inc/adminnav.php';
?>
				

			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Uadate Course</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<form action="" method="POST">
								<div class="form-group">
									<label for="course_n">Course Name: </label>
									<input type="text" name="course_n" id="course_n" class="form-control" required="" />
								</div>
								<div class="form-group">
									<label for="type">Type:</label>
									<select type="text" class="form-control" id="type" name="type">
										<option>Basic</option>
										<option>Advanced</option>
									</select>
								</div>
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-1"></div>
		</div>

<?php include 'inc/footer.php';?>