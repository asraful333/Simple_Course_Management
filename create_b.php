<?php 	
		include 'inc/admin_se.php';
		include 'inc/connect.php';

		if (isset($_POST['submit'])) {

			$batch_n = mysqli_real_escape_string($conn,$_POST['batch_n']);
			$batch_d = mysqli_real_escape_string($conn,$_POST['batch_d']);
			$type 	 = $_POST['type'];

			$sql_b= "SELECT * FROM batch_tb WHERE batch_name='$batch_n' AND course_id='$type'" ;

			$res_b= mysqli_query($conn,$sql_b) or die(mysqli_error($conn));		

			if ((mysqli_num_rows($res_b)>0)) {
				$msg= "In this course Batch name is already exists";
			}
			else{				

				$qr = "INSERT INTO `batch_tb`(`batch_name`, `batch_dur`, `course_id`) VALUES ('$batch_n','$batch_d','$type')";
				$qry = mysqli_query($conn,$qr);
				if ($qry) {
					header('Location: batch.php');
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
						<h3>Create Batch</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<form action="" method="POST">
								<div class="form-group">
									<label for="batch_n">Batch Name: </label>
									<input type="text" name="batch_n" id="batch_n" class="form-control" required="" />
									<?php if (isset($msg)): ?>
									<span><?php echo $msg; ?></span>
									<?php endif?>
								</div>
								<div class="form-group">
									<label for="batch_d">Batch Duration: </label>
									<input type="text" name="batch_d" id="batch_d" class="form-control" required="" />
								</div>
								<div class="form-group">
									<label for="type">Course Name:</label>
									
									<select type="text" class="form-control" id="type" name="type">
										<option>Select</option>

										<?php 
											include 'inc/connect.php';
											$q = "SELECT * FROM course_tb";
											$query = mysqli_query($conn,$q);

											while ($res= mysqli_fetch_array($query)) {
										?>

										<option value="<?php echo $res['course_id']; ?>"><?php echo $res['course_name']; ?></option>

										<?php 
											}
										?>

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