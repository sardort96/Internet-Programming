<?php
	$db = new datab();
	$query = "SELECT * FROM psychology order by id DESC";
	$posts = $db->select($query);
?>
<div id="section1">
		
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
				

					<img src="images/carP/i2.jpg" alt="Chania" width="460" height="345">
				

				</div>
				<div class="item">
				
					<img src="images/carP/i1.jpg" alt="Chania" width="460" height="345">
					</div>s
		
				<div class="item">
					<img src="images/carP/i3.jpg" alt="Flower" width="460" height="345">
				</div>
				<div class="item">
					<img src="images/carP/suv.png" alt="Flower" width="460" height="345">
				</div>
			</div>
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	
</div>
<!-- <div id="psycology" class="container-fluid" > 
<?php while($row=$posts->fetch_array()) :?>
<h1 class="tit"><?php echo $row['title']; ?></h1>
<p><?php echo $row['content']; ?></p>
<img class="image" src="images/<?php echo $row['image']; ?>" height="300" width="350" >
<?php endwhile; ?>
<a href="psycology.html"><button type="button" class=" btn btn-default">Step 1</button></a>
</div>
<!-- PSYCHOLOGY -->
<div id="psycology" class="container-fluid" >
	<h2 class="hdr animated fadeInDown go">Psychology</h2>
	<p>When the time comes for you to pick a career, you will discover that you have a multitude of options. It can be difficult to pick one, especially if you have no idea what you want to do ... or if many things appeal to you. Does it seem like an insurmountable task? It's not. Yes, you will have to put some effort into making your decision, but your effort will be well worth it in the end. If you follow these steps, you can successfully choose a suitable career and avoid making a big mistake.
		<br>
		<img class="image fadeInRight" src="images/cch.jpg" >
		The most common question I'm asked is this one: "I don't know what I want to do. Is there a test or something that can tell me what career is right for me?" The answer is no. You can't take a test that will, as if by magic, tell you what to do with the rest of your life. You can however use a combination of self assessment tools that will aid you in your decision. This article will demystify this phase of the career planning process.
		<br>
		During a self assessment you gather information about yourself in order to make an informed career decision. A self assessment should include a look at your values, interests, personality and aptitude.
		<br>
		Values: the things that are important to you, like achievement, status and autonomy
		Interests: what you enjoy doing, i.e. playing golf, taking long walks and hanging out with friends
		<br>
		Personality: a person's individual traits, motivational drives, needs and attitudes
		<br>
		Aptitudes: the activities you are good at, such as writing, computer programming and teaching. An aptitude may be a natural skill or one you acquired.
		<br>
	Many people choose to hire a career counselor who will administer a variety of self assessment inventories. What follows is a discussion of the different types of tools you may encounter, as well as some other things to consider when using your results to help you choose a career.</p>
	<p>Try career test</p>
	<a href="test/Carrer.html"><button type="button" class=" btn btn-default">Step 1</button></a>
</div>

<!-- CONTACT -->
<div id="contact">
		<div class="col-md-6 fadeInLeft">
		<h2 class="hdr">Contact Us</h2>
			<form action="contact.php" method="post" class="contactform">
				<div class="form-group"><input  class="form-control" name="name" placeholder="Enter your name" title="Your name" type="text" /></div>
				<div class="form-group"><input  class="form-control" name="email" placeholder="Enter your e-mail" title="Your e-mail" type="text" /></div>
				<div class="form-group"><textarea style="height:8em;" class="form-control" placeholder="Your massage" name="message" rows="3"></textarea></div>
				<button type="submit" class="form-control">Submit</button>
			</form>
		</div>

		<div class="col-md-6 hdr fadeInRight">
		<h3 class="hdr">Our Address</h3>
		<address>
			<p class="s-11"><strong>9, Ziyolilar str., M.Ulugbek district</strong> </p>
			<p class="s-11"><strong>Tashkent city, Uzbekistan</strong></p>
			<p class="s-11"><strong>m.musaeva@student.inha.uz</strong></p>
			
			<div>
				
				<a href="#"><i class="fa fa-lg fa-skype pull-center"> skype </i></a><br>
				<a href="#"><i class="fa fa-lg fa-google-plus "> google </i></a><br>
				<a href="#"><i class="fa fa-lg fa-linkedin"> linked in </i></a><br>
				<a href="#"><i class="fa fa-lg fa-twitter "> twitter </i></a><br>
				<a href="#"><i class="fa fa-lg fa-facebook "> facebook </i></a><br>
				<a href="#"><i class="fa fa-lg fa-telegram "> telegram </i></a><br>
				<a href="#"><i class="fa fa-lg fa-instagram"> instagram </i></a><br>
				
				</div><!--End container-->
			</address>
		</div>
	</div>


<!-- MAP -->
	<div id="map-block">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2995.6340200286313!2d69.33445899999904!3d41.33857098668211!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38aef48a89254047%3A0x2ea7ae15d1c4f590!2z0KPQvdC40LLQtdGA0YHQuNGC0LXRgiDQmNC90YXQsCDQsiDQs9C-0YDQvtC00LUg0KLQsNGI0LrQtdC90YLQtQ!5e0!3m2!1sru!2sru!4v1426685691581" width="100%" height="450" frameborder="0" style="border:0"; " ></iframe>
	</div>
</div>
