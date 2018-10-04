<?php 	
		include 'inc/admin_se.php';
		include 'inc/connect.php';

	if (isset($_POST['submit'])) {

		$batch_id=$_GET['batch_id'];

		$course_id=$_POST['course_id'];
		$batch_n = mysqli_real_escape_string($conn,$_POST['batch_n']);
		$batch_d = mysqli_real_escape_string($conn,$_POST['batch_d']);

		$sql= "SELECT * FROM batch_tb WHERE batch_name='$batch_n' AND course_id='$course_id' AND batch_id!='$batch_id'";
		$res_b= mysqli_query($conn,$sql) or die(mysqli_error($conn));

		if (mysqli_num_rows($res_b)>0) {
			$msg= "Batch name is exists!";
		}
		else{

			$sql= "UPDATE batch_tb SET batch_id=$batch_id, batch_name='$batch_n',batch_dur='$batch_d' WHERE batch_id=$batch_id";
			$qry= mysqli_query($conn,$sql);

			header("location: batch.php");
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
								<?php
					

									$batch_id=$_GET['batch_id'];
									$q = "SELECT * FROM batch_tb WHERE batch_id = $batch_id ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>
								<div class="form-group">
									<label for="batch_n">Batch Name: </label>
									<input type="text" name="batch_n" id="batch_n" class="form-control" required="" value="<?php echo $res['batch_name']; ?>"/>
									<?php if (isset($msg)): ?>
									<span><?php echo $msg;?></span>
								<?php endif ?>
								</div>
								<div class="form-group">
									<label for="batch_d">Batch Duration: </label>
									<input type="text" name="batch_d" id="batch_d" class="form-control" required="" value="<?php echo $res['batch_dur']; ?>"/>
								</div>
								<div class="form-group">
									<input type="hidden" name="course_id" id="course_id" class="form-control" required="" value="<?php echo $res['course_id']; ?>" readonly/>
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