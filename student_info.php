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
									<th></th>
								</tr>
								<tr>
									<td>001</td>
									<td><input type="text" name="name" id="name" class="form-control" value="Nayem" required="" /></td>
									<td><input type="text" name="cell" id="cell" class="form-control" value="0160000000" required="" /></td>
									<td><input type="text" name="address" id="address" class="form-control" value="Home..." required="" /></td>
									<td><input type="text" name="batch_i" id="batch_i" class="form-control" value="111" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><input type="text" name="result" id="result" class="form-control" value="" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
									<td><a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal">Print</a></td>
								</tr>
								<tr>
									<td>200</td>
									<td><input type="text" name="name" id="name" class="form-control" value="Nayem" required="" /></td>
									<td><input type="text" name="cell" id="cell" class="form-control" value="0160000000" required="" /></td>
									<td><input type="text" name="address" id="address" class="form-control" value="Home..." required="" /></td>
									<td><input type="text" name="batch_i" id="batch_i" class="form-control" value="111" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><input type="text" name="result" id="result" class="form-control" value="" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
									<td><a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal">Print</a></td>
								</tr><tr>
									<td>300</td>
									<td><input type="text" name="name" id="name" class="form-control" value="Nayem" required="" style="" /></td>
									<td><input type="text" name="cell" id="cell" class="form-control" value="0160000000" required="" /></td>
									<td><input type="text" name="address" id="address" class="form-control" value="Home..." required="" /></td>
									<td><input type="text" name="batch_i" id="batch_i" class="form-control" value="111" required="" /></td>
									<td><input type="text" name="course_i" id="course_i" class="form-control" value="100" required="" /></td>
									<td><input type="text" name="result" id="result" class="form-control" value="" required="" /></td>
									<td><a class="btn btn-success" href="">Edit</a></td>
									<td><a class="btn btn-success" href="">Delete</a></td>
									<td><a class="btn btn-success" href="" data-toggle="modal" data-target="#myModal">Print</a></td>
								</tr>								
							</table>
							
						</div>
					</div>
				</div>
			</div>

		</div>


	<?php include 'inc/footer.php';?>
