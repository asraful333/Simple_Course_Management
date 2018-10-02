<?php
	session_start();
	if(isset($_SESSION["admin"])){
		if($_SESSION["admin"]=="iamin"){
			header('location:admin_profile.php');
		}
	}
	if(!isset($_SESSION["ex"]))
		header('location:index.php');
?>

<?php include 'inc/header1.php'; ?>

				<ul class="nav navbar-nav pull-right">
					<li><a href="">Executive</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</div>
		</nav>

		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-10">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Student Information<span class="pull-right"><a class="btn btn-success hidden-print" href="registration.php">Back</a></span></h3>
					</div>
					<div class="panel-body">
						<div style=" margin: 0 auto;">

							<table class="table table-striped">
								<tr>
									<th>Student ID</th>
									<th>Student Name</th>
									<th>Cell</th>
									<th>Address</th>
									<th>Batch ID</th>
									<th>Course ID</th>
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
									<td><?php echo $res['student_name']; ?></td>
									<td><?php echo $res['cell']; ?></td>
									<td><?php echo $res['address']; ?></td>
									<td><?php echo $res['batch_id']; ?></td>
									<td><?php echo $res['course_id']; ?></td>
									<td><a class="btn btn-success" href="reg_print.php?student_id=<?php echo $res['student_id']; ?>">View</a></td>
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
