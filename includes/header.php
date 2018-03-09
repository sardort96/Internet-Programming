<?php
  include "libraries/config.php";
  include "libraries/database.php";
  $db = new datab();
  $query = "SELECT * FROM categories";
  $categories = $db->select($query);
  $query = "SELECT * FROM regions";
  $regions = $db->select($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>HighEdu.uz</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="career.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="b.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="animations.css">
    <script src="intern.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="css3-animate-it"></script>
    <script src="jquery.scrollTo.js"></script>
    <link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid text-" style="background-color:rgba(3, 10, 43, .50);">
        
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
              <li><a href="index.php">Home</a></li>
              <li><a href=" ../index.php#psycology">Psychology</a></li>
              
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Category<span class="caret"></span></a>
              <ul class="dropdown-menu">
                
            
                <li><a href="category/education.html">Education</a></li>
                <li class="dropdown-menu"></li>
                <ul class="dropdown-menu"> <a href="#" class="dropdown-toggle" role="button" aria-expendet="false"></a></ul>
                <li><a href="category/medicine.html">Medicine</a></li>
                <li><a href="category/art.html">Art</a></li>
                <li><a href="category/sport.html">Sport</a></li>
                <li><a href="category/economica.html">Economy</a></li>
                <li><a href="category/transportation.html">Transportation</a></li>
                <li><a href="category/law.html">Law</a></li>
                <li><a href="category/agrar.html">Agreculture</a></li>

            
              </ul>
              <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Regions<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <?php while ($row1 = $regions->fetch_array()) : ?>
                <li><a href="regions.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
                <?php endwhile; ?>
              </ul>
              <li><a href="#contact">Contact</a></li>
            </li>
            
            <form action="search.php" method="get" class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" name="q" class="form-control" placeholder="Search">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
              
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary btn-defalt navbar-right" data-toggle="modal" data-target="#signin">
              sign in
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
  <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Sign in</h4>
        </div>
        <div class="modal-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <label for="email">Username:</label>
              <input type="text" class="form-control" id="email" name="username">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password">
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