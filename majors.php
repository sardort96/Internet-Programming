<?php
include "libraries/config.php";
include "libraries/database.php";
//Getting the id of the region that is intended to be displayed
$id = $_GET['id'];
//Creating a database object
$db = new datab();
//select a single region for title
$query = "SELECT title FROM categories WHERE id = '$id'";
$single_major = $db->select($query);
//query for selecting the majors
$query = "SELECT * FROM categories";
$categories = $db->select($query);
//query for selecting the regions
$query = "SELECT * FROM regions";
$regions = $db->select($query);
//query for selecting the universities
$query = "SELECT name FROM universities WHERE major_id = '$id'";
$universities = $db->select($query);
?>
<!DOCTYPE html>
<html>
  <head>
    <?php $title = $single_major->fetch_array(); ?>
    <title><?php echo $title['title']; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
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
                <li><a href="regions.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['name']; ?></a></li>
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
  <!-- Start -->
  <?php while ($row2 = $universities->fetch_array()) : ?>
  <div class="container">
  <h2><?php echo $row2['name']; ?></h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">View More</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><?php echo $row2['name']; ?></h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<?php endwhile; ?>
<!-- <a href="<?php echo $row2['website']; ?>" target="_blank"><em>read more...</em></a> -->
  <!-- End -->
  
  
  
  
</div>

</div>
</html>
</body>
</div><!--End container-->
</footer><!--End footer 2-->