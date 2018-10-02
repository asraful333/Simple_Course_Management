<?php 
		include 'inc/admin_se.php';
		include 'inc/header1.php';
		include 'inc/adminnav.php';

?>

			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Course list</h3>
					</div>
					<div class="panel-body">
						<div style="margin: 0 auto;">

							<table class="table table-striped">
								<tr>
									<th>Course ID</th>
									<th>Course Name</th>
									<th>Course Type</th>
									<th></th>
									<th></th>
								</tr>

								<?php 
										include 'inc/connect.php';

										$q = "SELECT * FROM course_tb";
										$query = mysqli_query($conn,$q);

										while ($res= mysqli_fetch_array($query)) {
										
								?>
								
								<tr>
									<td><?php echo $res['course_id']; ?></td>
									<td><input type="text" name="course_n" id="course_n" class="form-control" value="<?php echo $res['course_name']; ?>" required="" /></td>
									<td><input type="text" name="course_t" id="course_t" class="form-control" value="<?php echo $res['course_type']; ?>" required="" /></td>
									<td><a class="btn btn-success" name="update" href="update.php?course_id=<?php echo $res['course_id']; ?>">Update</a></td>
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