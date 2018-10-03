<?php 	
		include 'inc/admin_se.php';
		include 'inc/connect.php';

	if (isset($_POST['submit'])) {

	$batch_id=$_GET['batch_id'];
	$batch_n = $_POST['batch_n'];
	$batch_d = $_POST['batch_d'];
	$sql= "UPDATE batch_tb SET batch_id=$batch_id, batch_name='$batch_n',batch_dur='$batch_d' WHERE batch_id=$batch_id";
	$qry= mysqli_query($conn,$sql);

	header("location: batch.php");
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
								</div>
								<div class="form-group">
									<label for="batch_d">Batch Duration: </label>
									<input type="text" name="batch_d" id="batch_d" class="form-control" required="" />
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