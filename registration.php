<?php 
	session_start();
	if(isset($_SESSION["admin"])){
		if($_SESSION["admin"]=="iamin"){
			header('location:admin_profile.php');
		}
	}
	if(!isset($_SESSION["ex"]))
		header('location:index.php');
	
	include 'inc/connect.php';

	if (isset($_POST['done'])) {

		$name = $_POST['name'];
		$cell = $_POST['cell'];
		$address = $_POST['address'];
		$batch = $_POST['batch'];
		$course = $_POST['course'];
		

		$q = "INSERT INTO `student_reg`(`student_name`, `cell`, `address`, `batch_id`, `course_id`) VALUES ('$name','$cell','$address','$batch','$course')";

		$query = mysqli_query($conn,$q);
		if ($query) {
			header('Location: student_list.php');
		}else{
			echo "Insert Failed!..";
		}

	}



include 'inc/header1.php';


?>
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
						<h3>Student Registration<span class="pull-right"><a class="btn btn-success hidden-print" href="student_list.php">List</a></span></h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">

							<form action="" method="POST">
								<div class="form-group">
									<label for="name">Full Name: </label>
									<input type="text" name="name" id="name" class="form-control" required="" />
								</div>								
								<div class="form-group">
									<label for="cell">Cell: </label>
									<input type="text" name="cell" id="cell" class="form-control" required="" />
								</div>
								<div class="form-group">
									<label for="address">Address: </label>
									<textarea type="text" name="address" id="address" class="form-control" rows="3" required=""></textarea>
								</div>
								<div class="form-group">
									<label for="course">Course ID: </label>
									<select type="text" class="form-control" id="type" name="course">
										<option>100</option>
										<option>200</option>
									</select>
								</div>

								<div class="form-group">
									<label for="batch">Batch ID:</label>
									<select type="text" class="form-control" id="type" name="batch">
										<option>111</option>
										<option>112</option>
									</select>
								</div>
								
								<button type="submit" name="done" class="btn btn-success">Submit</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
		
<?php include 'inc/footer.php';?>