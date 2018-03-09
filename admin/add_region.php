<?php
	include "../libraries/config.php";
	include "../libraries/database.php";

	$db = new datab();

	$query = "SELECT * FROM regions";
	$region = $db->select($query);

	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$location = $_POST['location'];
		

		if($name == '' && $location == ''){
			echo "Please, enter a region and its location";
		}
		else{			
			$query = "INSERT INTO regions (name, location)
			VALUES('$name', '$location')";
			$run = $db->insert($query);
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin Panel</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Dashboard</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="add_post.php">Add New Post</a></li>
						<li><a href="add_major.php">Add New Major</a></li>
						<li><a href="add_region.php">Add New Region</a></li>
						<li><a href="add_university.php">Add New University</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>										
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 blog-main">
							<br/>
							<h2>Add a new region</h2><hr>
							<form action="add_region.php" method="post">
								<div class="form-group">
									<label>Region Name:</label>
									<input type="text" name="name" class="form-control" placeholder="Add a new region">
								</div>		
								<div class="form-group">
									<label>Region Location:</label>
									<input type="text" name="location" class="form-control" placeholder="Add the location">
								</div>					
								<button type="submit" name="submit" class="btn btn-success">Submit</button>
								<a href="index.php" class="btn btn-danger">Cancel</a>
							</form>
						</div>						
					</div>
				</div>
			</body>
		</html>