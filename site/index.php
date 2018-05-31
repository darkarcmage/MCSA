<!DOCTYPE HTML>
<html>
<?php include "parts/head.php"; ?>
<body>
<!-- header <h1 class="TextShadow" >Mountain  Club of South-Africa</h1>-->
<div>

	<div class="header-bottom" style="padding:2em 0;">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/MCSAlogo.png" class="img-responsive logoImg" alt="" /></a>
			</div>
			<div class="head-nav">

				<span class="menu" onclick="toggleMobileMenu()"> </span>
					<ul id="menuMobile">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="news.php">News</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<!-- <li><a href="https://www.facebook.com/groups/MCSA.Magaliesberg/">Blog</a></li> -->
						<li><a href="contact.php">Contacts</a></li>

				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
	<script>

		var menuActive = false;
		function toggleMobileMenu(){
			if(menuActive==true)
				$("#menuMobile").css("display","none");
			else $("#menuMobile").css("display","block");

			toggleMenuState();
		}

		function toggleMenuState(){
			if(menuActive == true)
				menuActive = false;
			else menuActive = true;
		}
	</script>


	<div class="banner">
		<div class="container">

		  <div class="carousel-caption" style="">
			<h1 class="TextShadow" >Mountain  Club of South-Africa</h1>
			<p class="TextShadow" style="color:white;">Magaliesberg Section (Pretoria area)</p>
			<p class="TextShadow"  style="color:white;">Explore - Discover - Connect - Protect </p>
			<p>
				<a href="join.php"  class="btn btn-default btn-lg" href="" role="button" style="margin:20px 20px 20px 20px">Join</a>
				<a href="permit.php"  class="btn btn-default btn-lg" href="" role="button" style="margin:20px 20px 20px 20px">Permits</a>
			</p>
		  </div>


	</div>
	</div>

<!-- header -->

<div class="container">
<!-- news -->
<div class="news">
	<h3>Club objectives</h3>
		<div class="news-grids">
			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Organise mountaineering</h4>

				</div>
				<a href="contact.php#findGuide">
				<img src="images/organiseMountaineering.jpg" class="img-responsive bannerImage" alt="" />
			</a>
				<p>The MCSA organise official hiking, canyoning, trad and sport climbing events almost every weekend of the year.  The MCSA Magaliesberg section have a lot of sport and trad climbers that you can connect with.</p>
				<div class="read-more blue">
					<a href="contact.php#findGuide">Find a Guide &gt;&gt;</a>
				</div>
			</div>
			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Access to properties</h4>

				</div>
				<a href="property.php"> <img src="images/img2.jpg" class="img-responsive bannerImage" alt="" /></a>
				<p>Through membership fees and inheritance from club members the club ensures access to various mountain areas in South Africa through property we bought and
				through negotiating access to these areas. </p>
				<div class="read-more blue">
					<a href="property.php">Read More &gt;&gt;</a>
				</div>
			</div>
			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Conservation management</h4>
				</div>
				<a href="conservation.php"><img src="images/img5.jpg" class="img-responsive bannerImage" alt="" /></a>
				<p>The club have various initiatives and support actions towards protecting the natural beauty and wilderness character of mountains and to promote their effective conservation management;</p>
				<div class="read-more blue">
					<a href="conservation.php">Read More &gt;&gt;</a>
				</div>
			</div>
		</div>


	<div class="latest-events">

			<div class="clearfix"> </div>

			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Safety and Training</h4>

				</div>
					<a href="events.php"><img src="images/img3.jpg" class="img-responsive bannerImage" alt="" /></a>
				<p>The club regularly presents safety talks at their clubhouse and beginner rock (sport and trad) climbing and hiking meets.  Please check our calendar for the next beginners meet or connect with one of our locals. </p>
				<div class="read-more blue">
					<a href="events.php">Read More &gt;&gt;</a>
				</div>
			</div>


			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Search and Rescue</h4>

				</div>
				<a href="sr.php"><img src="images/img4.jpg" class="img-responsive bannerImage" alt="" /></a>
				<p>All sections of the MCSA contribute towards the search and rescue team.  If you think you have the stamina, patience, skills and mental fortitude to search for
				people in the middle of night please join them.  </p>
				<div class="read-more blue">
					<a href="sr.php">Read More &gt;&gt;</a>
				</div>
			</div>



			<div class="col-md-4 news-grid">
				<div class="news-grid-text">
					<h4>Promote the study of mountains</h4>
				</div>
				<img src="images/img1.jpg" class="img-responsive bannerImage" alt="" />
				<p style="font-size:15px !important">We have various projects that we are funding. We are currently funding the Richard Watmough Field Guide, the TUT Nature Conservation project and various other projects to connect with
				previously disadvantaged children.</p>
				<div class="read-more blue">
					<!-- <a href="#">Read More &gt;&gt;</a> -->
				</div>
			</div>

			<div class="clearfix"> </div>

	</div>
</div>
<!-- //news -->
</div>

<!-- footer -->
	<div class="footer">
		<div class="container">
				<div class="clearfix"> </div>
			<div class="bottom">
				<p>Copyrights © 2018 Mountain Club of South-Africa Magaliesberg section
				<br>Member of the  <a href="http://www.theuiaa.org/"> UIAA - The International Mountaineering and Climbing Federation </a> </p>
			</div>
		</div>
	</div>
<!-- footer -->

</body>
</html>
