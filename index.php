<?php 
	session_start();
	if(isset($_SESSION["admin"]) || isset($_SESSION["ex"])){
		if($_SESSION["admin"]=="iamin"){
			header('location:admin_profile.php');
		}
		if($_SESSION["ex"]=="iamin"){
			header('location:registration.php');
		}
	}
 //if(isset($_POST['name']) && isset($_POST['type']) && isset($_POST['password'])){
	if(isset($_POST['login'])){
	$uname=$_POST['name'];
	$pass=$_POST['password'];
	
	include 'inc/connect.php';

	$stm="SELECT * FROM user_tb WHERE user_name='$uname'";
	$utb = mysqli_query($conn,$stm);
	$ur = mysqli_fetch_assoc($utb);

	if(mysqli_num_rows($utb)==1)
	{
		
		if($pass==$ur["user_pass"] )
		{
			if($ur["user_type"]=="Admin"){
				$_SESSION["admin"]="iamin";
				header('location:admin_profile.php');
			}
			elseif ($ur["user_type"]=="Executive") {
				$_SESSION["ex"]="iamin";
				header('location:registration.php');
			}
			else
				header('location:index.php');
			
		}
	}


}



 include 'inc/header1.php'; ?>

			</div>
		</nav>

		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Login</h3>
					</div>
					<div class="panel-body">
						<div style="max-width: 400px; margin: 0 auto;">
							
							<form action="" method="POST">
								<div class="form-group">
									<label for="name">Name: </label>
									<input type="text" name="name" id="name" class="form-control" required="" />
								</div>
								
								<div class="form-group">
									<label for="password">Password: </label>
									<input type="password" name="password" id="password" class="form-control" required="" />
								</div>
								<button type="submit" name="login" class="btn btn-success">Login</button>
							</form>

						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3"></div>
		</div>
		
<?php include 'inc/footer.php';?>