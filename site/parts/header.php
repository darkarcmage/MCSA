	<div class="header-bottom" style="margin-top: -20px;">
		<div class="container">
			<div class="logo">
				<a href="index.php"><img src="images/MCSAlogo.png" class="img-responsive logoImg" alt="" /></a>
			</div>
			<div class="head-nav">
				<span class="menu" onclick="toggleMobileMenu()"> </span>
					<ul id="menuMobile">
						<li class="titleoption <?php if (isset($index)    ) { echo "active"; } ?>"><a href="index.php">Home</a></li>
						<li class="titleoption <?php if (isset($about)    ) { echo "active"; } ?>" ><a href="about.php">About</a></li>
						<li class="titleoption <?php if (isset($news)    ) { echo "active"; } ?>" ><a href="news.php">News</a></li>
						<li class="titleoption <?php if (isset($events)    ) { echo "active"; } ?>" ><a href="events.php">Events</a></li>
						<li class="titleoption <?php if (isset($faq)    ) { echo "active"; } ?>" ><a href="faq.php">FAQ</a></li>
						<!--<li ><a  target="_blank"  href="https://www.facebook.com/groups/MCSA.Magaliesberg/">Blog</a></li> -->
						<li class="titleoption <?php if (isset($contact)    ) { echo "active"; } ?>" ><a href="contact.php">Contacts</a></li>
						<div class="clearfix"> </div>
				</ul>
			</div>
				<div class="clearfix"> </div>
				<!-- script-for-nav -->

			</script>
		<!-- script-for-nav -->
		</div>
	</div>

		<div class="banner1">
		<div class="container">

	</div>
	</div>
	 	<h3 class="TextShadow pageHeader" >The Mountain Club of South Africa</h3>
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
