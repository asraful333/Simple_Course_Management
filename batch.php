<?php 	

		include 'inc/admin_se.php';
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
								<tr>
									<td>111</td>
									<td><input type="text" name="batch_n" id="batch_n" class="form-control" value="Konka" required="" /></td>
									<td><input type="text" name="batch_d" id="batch_d" class="form-control" value="60 hours" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
								</tr>
								<tr>
									<td>200</td>
									<td><input type="text" name="batch_n" id="batch_n" class="form-control" value="Konka" required="" /></td>
									<td><input type="text" name="batch_d" id="batch_d" class="form-control" value="60 hours" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
								</tr><tr>
									<td>300</td>
									<td><input type="text" name="batch_n" id="batch_n" class="form-control" value="Konka" required="" /></td>
									<td><input type="text" name="batch_d" id="batch_d" class="form-control" value="60 hours" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
								</tr>								
							</table>
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-1"></div>
		</div>

<?php include 'inc/footer.php';?>