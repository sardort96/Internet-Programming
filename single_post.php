<?php
	include "libraries/config.php";
	include "libraries/database.php";

	$id = $_GET['id'];

	$db = new datab();

	$query = "SELECT * FROM categories";
	$categories = $db->select($query);
	$query = "SELECT * FROM regions";
	$regions = $db->select($query);

	$query = "SELECT DISTINCT name FROM universities WHERE region_id = '$id'";
  	$categories = $db->select($query);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HighEdu.uz</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="b.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<script src="intern.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid text-" style="background-color:rgba(3, 10, 43, .50);">
				<!-- <strong class="col-xs-6 text-left fanav" >99899 999 99 99 I mailaddress@gmail.com</strong> -->
				<div class="container-fluid text-right">
					<a href="#"><i class="fa fa-lg fa-skype pull-center fanav">  </i></a>
					<a href="#foot"><i class="fa fa-lg fa-google-plus fanav ">  </i></a>
					<a href="#"><i class="fa fa-lg fa-linkedi fanav">  </i></a>
					<a href="#"><i class="fa fa-lg fa-twitter fanav">  </i></a>
					<a href="#"><i class="fa fa-lg fa-facebook fanav">  </i></a>
					<a href="#"><i class="fa fa-lg fa-telegram fanav">  </i></a>
					<a href="#"><i class="fa fa-lg fa-instagram fanav">  </i></a>
				</div>
			</div>
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">HighEdu.uz</a>
				</div>
				<div>
					<div class="collapse navbar-collapse navbar-right" id="myNavbar">
						
						<ul class="nav navbar-nav">
							<li><a href="b.html#myCarousel">Home</a></li>
							<li><a href="#psycology">Psycology</a></li>
							
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Majors<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php while ($row = $categories->fetch_array()) : ?>
								<li><a href="<?php echo $row['title']; ?>.php"><?php echo $row['title']; ?></a></li>
								<?php endwhile; ?>
							</ul>
							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Regions<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php while ($row1 = $regions->fetch_array()) : ?>
								<li><a href="regions/<?php echo $row1['name']; ?>.php"><?php echo $row1['name']; ?></a></li>
								<?php endwhile; ?>
							</ul>
							<li><a href="#contact">Contact</a></li>
						</li>
						
						<form class="navbar-form navbar-left">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Search">
							</div>
							<button type="submit" class="btn btn-default">Submit</button>
							
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-defalt navbar-right" data-toggle="modal" data-target="#signin">
							<a href="copied/signin.html">sign in</a>
							</button>
							<button type="button" class="btn btn-primary btn-defalt " data-toggle="modal" data-target="#sighup">
							sign up
							</button>
						</form>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<!-- Modal -->
	<!-- <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
			<div class="modal-content">-->
				
				
				
			</div>
		</div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="sighup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Sign up</h4>
				</div>
				<div class="modal-body">
					<form action="signup.php" method="POST">
						<div class="form-group">
							<label for="email">Email address:</label>
							<input type="email" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control" id="pwd" name="pwd">
						</div>
						<div class="checkbox">
							<label><input type="checkbox"> Remember me</label>
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div class="kart"  style="padding-top:70px;">
    
    <div class="clearfix">
      <div class="col-md-4">
        <table class="table table-condensed  fadeInLeft">
          <!-- On cells (`td` or `th`) -->
          <?php $row2 = $universities->fetch_array(); ?>
          <div class="fadeInLeft"><tr><td class="active"><a class="size" href="<?php echo $row2['website'];?>" target="_blank"><?php echo $row2['name']; ?></a></td></tr></div>

          <!-- <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.mdis.uz/" target="_blank">Management Development Institute of Singapore in Tashkent</td></tr></div>  
          <div class=" fadeInLeft"><tr><td class="active"><a href="https://www.university-directory.eu/Uzbekistan/Moscow-State-University-Named-After-M--V--Lomonosov-Tashkent-Branch.html" target="_blank">Moscow State University in Tashkent named for M. V. Lomonosov</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.ge-uz.eu/?p=927" target="_blank">National University of Uzbekistan</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://taqi.uz/en/" target="_blank">Tashkent Architectural Building Institute</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="">Tashkent Automobile and Road Construction Institute</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://uzdoc.eu/organization/tashkent-financial-institute" target="_blank">Tashkent Financial Institute</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://taqi.uz/en/" target="_blank">Tashkent Institute of Education</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://tiim.uz/en/" target="_blank">Tashkent Institute of Irrigation and Melioration</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.goldenpages.uz/en/company/?Id=48311" target="_blank">Tashkent State Agrarian University</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.goldenpages.uz/en/company/?Id=1457" target="_blank">Tashkent State Technical University</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.tdiu.uz/En/" target="_blank">Tashkent State University of Economics</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://taqi.uz/en/" target="_blank">Tashkent Medical Academy</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.tsul.uz/en" target="_blank">Tashkent State University of Law</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="https://en.wikipedia.org/wiki/Tashkent_University_of_Information_Technologies" target="_blank">Tashkent University of Information Technologies</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.uwed.uz/en/" target="_blank">University of World Economy and Diplomacy</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="https://en.wikipedia.org/wiki/Uzbekistan_State_University_of_World_Languages" target="_blank">Uzbek State University of World Languages</td></tr></div>
          <div class=" fadeInLeft"><tr><td class="active"><a href="http://www.wiut.uz/index.php/en/home/" target="_blank">Westminster International University in Tashkent</td></tr></div>-->
      </div>
      <!-- MAP -->
      <div id="map-block col-md-4">
        <iframe style="border-style: outset; border: 4px solid lightgrey " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d191884.74398372095!2d69.13928098131092!3d41.28277055668046!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b0cc379e9c3%3A0xa5a9323b4aa5cb98!2z0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1493188925279" width="800" height="500"  frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    <!-- </div>
  </div> -->
</div>
