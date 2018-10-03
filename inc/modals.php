<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		    <div class="modal-dialog">		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          <button type="button" class="close hidden-print" data-dismiss="modal">&times;</button>
		          <h4 class="modal-title">Student Certificate</h4>
		        </div>
		        <div class="modal-body">
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
									<td>0<?php echo $res['cell']; ?></td>
								</tr>
								<tr>
									<td>Address</td>
									<td><?php echo $res['address']; ?></td>
								</tr>
								<tr>
									<td>Course ID</td>
									<td><?php echo $res['course_id']; ?></td>
								</tr>
								<tr>
									<td>Batch ID</td>
									<td><?php echo $res['batch_id']; ?></td>
								</tr>
								<tr>
									<td>Result</td>
									<td><?php echo $res['result']; ?></td>
								</tr>

							</table>
							<div style="text-align: center;"><a class="btn btn-success hidden-print" onclick="window.print()" href="">Print</a>
							</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default hidden-print" data-dismiss="modal">Close</button>
		        </div>
		      </div>		      
		    </div>
		</div>