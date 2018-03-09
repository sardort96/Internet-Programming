<?php
	include "../libraries/config.php";
	include "../libraries/database.php";
	$dbhost=DB_HOST;
	$dbuser=DB_USER;
	$dbpassword=DB_PASS;
	$dbname=DB_NAME;


    try{
    $dbConnection= new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpassword);
    $dbConnection->exec("set names utf8");
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $stmt=$dbConnection->prepare("SELECT * FROM psychology");
    $stmt->execute();
    $psychology=array();
    while($data=$stmt->fetch())
    {
    	$psychology[]=$data;
    }
    $category=array();
    $stmt=$dbConnection->prepare("SELECT * FROM categories");
    $stmt->execute();
    while($data=$stmt->fetch())
    {
    	$category[]=$data;
    }
    $region=array();
    $stmt=$dbConnection->prepare("SELECT * FROM regions");
    $stmt->execute();
    while($data=$stmt->fetch())
    {
    	$region[]=$data;
    }
    $link=array();
    $stmt=$dbConnection->prepare("SELECT * FROM links");
    $stmt->execute();
    while($data=$stmt->fetch())
    {
    	$link[]=$data;
    }

    $dbConnection=null;
    }
    catch(Exception $e)
    {
    	echo 'Connection failed'.$e->getMessage();
    }
	/*$db = new datab();

	$query = "SELECT * FROM psychology";
	$psychology = $db->select($query);

	$query = "SELECT * FROM categories";
	$category = $db->select($query);

	$query = "SELECT * FROM regions";
	$region = $db->select($query);

	$query = "SELECT * FROM links";
	$link = $db->select($query);*/









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
						<li><a href="add_link.php">Add New Link</a></li>
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
					
					
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 blog-main">
						<!-- First table for managing posts -->
							<br/>
							<?php 
							if(isset($_GET['msg'])){
								echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
							}

							 ?>
							<table class="table table-striped">
								<tr align="center">
									<td colspan="4"><h1>Manage the post:</h1></td>
								</tr>
								<tr>
									<th>Post ID</th>
									<th>Post Title</th>
								</tr>
								<?php foreach ($psychology as $p) : ?>
								<tr>
									<td>
									<?php echo $p['id']; ?>	
									</td>
									<td>
									<a href="edit_post.php?id=<?php echo $p['id']; ?>">
									<?php echo $p['title']; ?>
									</a>	
									</td>
									
								</tr>
								<?php endforeach; ?>
							</table>
							<!-- Second table for managing categories -->
							<br/>
							<table class="table table-striped">
								<tr align="center">
									<td colspan="4"><h1>Manage majors:</h1></td>
								</tr>
								<tr>
									<th>Major ID</th>
									<th>Major Title</th>
								</tr>
								<?php foreach ($category as $c) : ?>
								<tr>
									<td>
									<?php echo $c['id']; ?>	
									</td>
									<td>
									<a href="edit_major.php?id=<?php echo $c['id']; ?>">
									<?php echo $c['title']; ?>
									</a>	
									</td>
									
								</tr>
								<?php endforeach; ?>
							</table>
							<!-- Third table for managing regions -->
							<br/>
							<table class="table table-striped">
								<tr align="center">
									<td colspan="4"><h1>Manage regions:</h1></td>
								</tr>
								<tr>
									<th>Region ID</th>
									<th>Region Title</th>
								</tr>
								<?php foreach ($region as $r) : ?>
								<tr>
									<td>
									<?php echo $r['id']; ?>	
									</td>
									<td>
									<a href="edit_region.php?id=<?php echo $r['id']; ?>">
									<?php echo $r['name']; ?>
									</a>	
									</td>
									
								</tr>
								<?php endforeach; ?>
							</table>
							<!-- Fourth table for managing links -->
							<br/>
							<table class="table table-striped">
								<tr align="center">
									<td colspan="4"><h1>Manage links:</h1></td>
								</tr>
								<tr>
									<th>Link ID</th>
									<th>Link Name</th>
								</tr>
								<?php foreach ($link as $l) : ?>
								<tr>
									<td>
									<?php echo $l['id']; ?>	
									</td>
									<td>
									<a href="edit_link.php?id=<?php echo $l['id']; ?>">
									<?php echo $l['name']; ?>
									</a>	
									</td>
									
								</tr>
								<?php endforeach; ?>
							</table>
						</div>
						
					</div>
				</div>
			</body>
		</html>