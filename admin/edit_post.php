<?php
	include "../libraries/config.php";
	include "../libraries/database.php";

	$db = new datab();

	//Get ID
	$id = $_GET['id'];

	$query = "SELECT * FROM psychology WHERE id = '$id'";

	$psychology = $db->select($query);
	$single = $psychology->fetch_array();

	//$query = "SELECT * FROM categories";
	//$category = $db->select($query);

	if(isset($_POST['update'])){
		$title = $_POST['title'];
		$content = $_POST['content'];
		$tags = $_POST['tags'];

		//variables for the image
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];

		if($title == '' && $content == '' && $tags == ''){
			echo "Please, fill in all fields";
		}
		else{
			move_uploaded_file($image_tmp, "../images/$image");
			$query = "UPDATE psychology SET title = '$title', content = '$content', image ='$image', tag = '$tags' WHERE id = '$id'";
			$run = $db->update($query);

			unlink("../images/".$single['image']);
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
						<li><a href="logout.php">Logout</a></li>
						
					</ul>
					
					
					</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
				<div class="container">
					<div class="row">
						<div class="col-sm-12 blog-main">
							<br/>
							<h2>Insert a new post</h2><hr>
							<form action="edit_post.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Post Title:</label>
									<input type="text" name="title" class="form-control" placeholder="Title" value="<?php echo $single['title']; ?>">
								</div>
								<div class="form-group">
								<label>Post Content:</label>
								<textarea class="form-control" rows="3" name="content" placeholder="content">
									<?php echo $single['content']; ?>
								</textarea>
								</div>
								<!-- <select name="category" class="form-control"> 
									<option>Select a major</option>
									<option>2</option>
									
								</select>-->
								
								<div class="form-group">
									<label for="exampleInputFile">Post Image</label>
									<input type="file" name="image"> <br>
									<img src="../images/<?php echo $single['image']; ?>" width="150" height="100">
								</div> 
								<div class="form-group">
									<label>Tags</label>
									<input type="text" name="tags" class="form-control" placeholder="add tags" value="<?php echo $single['tag']; ?>">
								</div>
								
								<button type="submit" name="update" class="btn btn-success">Update</button>
								<a href="index.php" class="btn btn-primary">Cancel</a>
								<a href="delete_post.php?id=<?php echo $id; ?>" class="btn btn-danger">Delete</a>
							</form>
						</div>
						
					</div>
				</div>
			</body>
		</html>