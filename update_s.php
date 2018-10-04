<?php 	

	include 'inc/admin_se.php';

	include 'inc/connect.php';

	if (isset($_POST['submit'])) {

		$student_id	=$_GET['student_id'];

		$name 		= mysqli_real_escape_string($conn,$_POST['name']);
		$cell 		= mysqli_real_escape_string($conn,$_POST['cell']);
		$address 	= mysqli_real_escape_string($conn,$_POST['address']);
		$course_id 	= mysqli_real_escape_string($conn,$_POST['course_id']);
		$batch_id 	= mysqli_real_escape_string($conn,$_POST['batch_id']);
		$result 	= mysqli_real_escape_string($conn,$_POST['result']);

		$sql= "SELECT * FROM student_reg WHERE student_name='$name' AND course_id='$course_id' AND batch_id='$batch_id' AND student_id!='$student_id'";
		$res_s= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_s)>0) {
			$msg= "Student name is exists under the batch!";
		}
		else{

			$sql= "UPDATE student_reg SET student_id=$student_id, student_name='$name', cell='$cell', address='$address', result='$result' WHERE student_id=$student_id";

			$qry= mysqli_query($conn,$sql);

			header("location: student_info.php");
			}
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

								<?php
					

									$student_id	=$_GET['student_id'];
									$q = "SELECT * FROM student_reg WHERE student_id = $student_id ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<div class="form-group">
									<label for="name">Full Name: </label>
									<input type="text" name="name" id="name" class="form-control" required="" value="<?php echo $res['student_name']; ?>" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>								
								<div class="form-group">
									<label for="cell">Cell: </label>
									<input type="text" name="cell" id="cell" class="form-control" required="" value="<?php echo $res['cell']; ?>"/>
								</div>
								<div class="form-group">
									<label for="address">Address: </label>
									<textarea type="text" name="address" id="address" class="form-control" rows="3" required="" ><?php echo $res['address']; ?></textarea>
								</div>
								<div class="form-group">									
									<input type="hidden" name="course_id" id="course_id" class="form-control" required="" value="<?php echo $res['course_id']; ?>"/>
								</div>
								<div class="form-group">
									<input type="hidden" name="batch_id" id="batch_id" class="form-control" required="" value="<?php echo $res['batch_id']; ?>"/>
								</div>
								<div class="form-group">
									<label for="result">Result: </label>
									<input type="text" name="result" id="result" class="form-control" required="" value="<?php echo $res['result']; ?>"/>
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