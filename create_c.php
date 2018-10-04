<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';

	if (isset($_POST['submit'])) {


		$course_n = mysqli_real_escape_string($conn,$_POST['course_n']);
		$type = $_POST['type'];
		
		$sql= "SELECT * FROM course_tb WHERE course_name='$course_n'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Course is already exists";
		}
		else{

			$qr = "INSERT INTO `course_tb`(`course_name`, `course_type`) VALUES ('$course_n','$type')";

			$qry = mysqli_query($conn,$qr);
			if ($qry) {
				header('Location: admin_profile.php');
			}else{
				echo "Insert Failed!..";
			}
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
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
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