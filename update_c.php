

<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';

	if (isset($_POST['submit'])) {

		$course_id=$_GET['course_id'];
		$course_n = mysqli_real_escape_string($conn,$_POST['course_n']);
		$type = mysqli_real_escape_string($conn,$_POST['type']);

		$sql= "SELECT * FROM course_tb WHERE course_name='$course_n' AND course_id!='$course_id'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg="Name is already exists!";
		}
		else{

			$sql= "UPDATE course_tb SET course_id=$course_id, course_name='$course_n',course_type='$type' WHERE course_id=$course_id";
			$qry= mysqli_query($conn,$sql);

			header("location: admin_profile.php");
			}
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

								<?php
					

									$course_id=$_GET['course_id'];
									$q = "SELECT * FROM course_tb WHERE course_id = $course_id ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>


								<div class="form-group">
									<label for="course_n">Course Name: </label>
									<input type="text" name="course_n" id="course_n" class="form-control" required="" value="<?php echo $res['course_name']; ?>"/>
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>
								<div class="form-group">
									<label for="type">Type:</label>
									<input type="text" name="type" id="course_n" class="form-control" required="" value="<?php echo $res['course_type']; ?>"/>
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