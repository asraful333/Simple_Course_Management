<?php 	

		include 'inc/admin_se.php';
		include 'inc/connect.php';
		include 'inc/header1.php';
		include 'inc/adminnav.php';
?>
				

			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Batch list</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<table class="table table-striped">
								<tr>
									<th>Batch ID</th>
									<th>Batch Name</th>
									<th>Batch Duration</th>
									<th>Course ID</th>
									<th></th>
									<th></th>
								</tr>

								<?php
									$sq= "SELECT * FROM batch_tb";
									$que= mysqli_query($conn,$sq);
									while ($vlu= mysqli_fetch_array($que)) {										
								?>

								<tr>
									<td><?php echo $vlu['batch_id'];?></td>
									<td><input type="text" name="batch_n" id="batch_n" class="form-control" value="<?php echo $vlu['batch_name'];?>" required="" /></td>
									<td><input type="text" name="batch_d" id="batch_d" class="form-control" value="<?php echo $vlu['batch_dur'];?>" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="<?php echo $vlu['course_id'];?>" required="" /></td>
									<td><a class="btn btn-success" name="update" href="update_b.php?batch_id=<?php echo $vlu['batch_id']; ?>">Update</a></td>
								</tr>

								<?php
									}
								?>
																
							</table>
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-1"></div>
		</div>

<?php include 'inc/footer.php';?>