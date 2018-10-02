<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';

	if (isset($_POST['submit'])) {

		$course_n = $_POST['course_n'];
		$type = $_POST['type'];
		

		$qr = "INSERT INTO `course_tb`(`course_name`, `course_type`) VALUES ('$course_n','$type')";

		$qry = mysqli_query($conn,$qr);
		if ($qry) {
			header('Location: admin_profile.php');
		}else{
			echo "Insert Failed!..";
		}

	}

		include 'inc/header1.php';
		include 'inc/adminnav.php';
?>
				

			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Create Course</h3>
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