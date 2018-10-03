<?php 	

		include 'inc/admin_se.php';
		include 'inc/header1.php';
		include 'inc/adminnav.php';
		include 'inc/modals.php';
?>
			<style type="text/css">
				input[type=text]:focus 
				{
    				width: 150px;
				}
			</style>

			<div class="col-md-9 hidden-print">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Student info</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<table class="table table-striped">
								<tr>
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Cell</th>
									<th>Address</th>
									<th>Batch ID</th>
									<th>Course ID</th>
									<th>Result</th>
									<th></th>
									<th></th>
								</tr>

								<?php 
										include 'inc/connect.php';

										$q = "SELECT * FROM student_reg";
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>

								<tr>
									<td><?php echo $res['student_id']; ?></td>
									<td><input type="text" name="name" id="name" class="form-control" value="<?php echo $res['student_name']; ?>" required="" /></td>
									<td><input type="text" name="cell" id="cell" class="form-control" value="0<?php echo $res['cell']; ?>" required="" /></td>
									<td><input type="text" name="address" id="address" class="form-control" value="<?php echo $res['address']; ?>" required="" /></td>
									<td><input type="text" name="batch_i" id="batch_i" class="form-control" value="<?php echo $res['batch_id']; ?>" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="<?php echo $res['course_id']; ?>" required="" /></td>
									<td><input type="text" name="result" id="result" class="form-control" value="<?php echo $res['result']; ?>" required="" /></td>
									<td><a class="btn btn-success" name="update" href="update_s.php?student_id=<?php echo $res['student_id']; ?>">Update</a></td>
									<td><a class="btn btn-success" href="certificate.php?student_id=<?php echo $res['student_id']; ?>">Certificale</a></td>

								</tr>

								<?php 
									}
								?>
																
							</table>
							
						</div>
					</div>
				</div>
			</div>

		</div>


	<?php include 'inc/footer.php';?>
