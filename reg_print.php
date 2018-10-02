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
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Student Information<span class="pull-right"><a class="btn btn-success hidden-print" href="student_list.php">Back</a></span></h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<table class="table table-striped">
								<tr>
									<th>Title</th>
									<th>Value</th>
								</tr>

								<?php
									include 'inc/connect.php';
					
									$student_id= $_GET['student_id'];

									$q = "SELECT * FROM student_reg WHERE student_id = $student_id ";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>

								<tr>
									<td>Student ID</td>
									<td><?php echo $res['student_id']; ?></td>
								</tr>
								<tr>
									<td>Name</td>
									<td><?php echo $res['student_name']; ?></td>
								</tr>
								<tr>
									<td>Cell</td>
									<td><?php echo $res['cell']; ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $res['address']; ?></td>
								</tr>
								<tr>
									<td>Batch ID</td>
									<td><?php echo $res['batch_id']; ?></td>
								</tr>
								<tr>
									<td>Course ID</td>
									<td><?php echo $res['course_id']; ?></td>
								</tr>

							</table>
							<div style="text-align: center;"><a class="btn btn-success hidden-print" onclick="window.print()" href="">Print</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>

<?php include 'inc/footer.php';?>
