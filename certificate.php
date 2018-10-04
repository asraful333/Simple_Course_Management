<?php 	

		include 'inc/admin_se.php';
		include 'inc/header1.php';
		include 'inc/adminnav.php';

?>
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto; border-radius: 2px solid black; text-align: center;">

							<h3 style="font-family: Roboto;">COURSE CERTIFICATE</h3>
							<h4>This certifies that</h4><br/>


								<?php
									include 'inc/connect.php';
					
									$student_id= $_GET['student_id'];

									$q = "SELECT * FROM student_reg s INNER JOIN batch_tb b ON s.batch_id = b.batch_id INNER JOIN course_tb c ON b.course_id = c.course_id WHERE student_id= $student_id";
									$query= mysqli_query($conn,$q);
									$res= mysqli_fetch_assoc($query);
									
								?>
																
									<h3><b><?php echo $res['student_name']; ?></b></h3><br/>

									<h4>has successfully completed</h4>
														
									<h3>Course Name: <?php echo $res['course_name']; ?></h3>
								
									<h3>Batch Name: <?php echo $res['batch_name']; ?></h3>
								
									<h3>Result: <?php echo $res['result']; ?></h3>


							<div style="text-align: center;"><a class="btn btn-success hidden-print" onclick="window.print()" href="">Print</a>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>

<?php include 'inc/footer.php';?>