
<html>
<head>
<title>PETS</title>

<link rel="stylesheet" type="text/css" href="css/pets.css">

<link rel="stylesheet" type="text/css" href="css/subscribe.css">


<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
		</script>
		<script src="js/gistfile1.js">$('marquee').marquee(optionalClass);</script>
		
</head>
<body style="background-color:black;">
	<?php
	$dbhost='loacalhost';
	$username='root';
	$password='';
	
	mysql_connect("$dbhost","$username","$password");
	echo "connected";
	
	$username=$_REQUEST["username"];
	echo "Hello ".$username;
?>

	<div="resp">
		<ul class="ulclass">
		<li class="liclass"><h1 class="h1class">PETS </h1></li>
			<li class="dropdown"><a class="dropbtn" href="home.html">Home</a></li>
			<li class="dropdown">
			<a href="#" class="dropbtn">About Us</a>
			<div class="dropdown-content">
				<a href="aboutus.html">Who we are</a>
				<a href="gallerynew.html">Gallery</a>
				<a href="achievement.html">Achievements</a>
			</div>
			</li>
			<li class="dropdown">
			<a href="#" class="dropbtn">Events</a>
			<div class="dropdown-content">
			<a href="volunteer.html">Volunteer with us</a>
			<a href="eventsnew.html">Upcoming Events</a>
			</div>
			</li>
			<li class="dropdown">
			<a href="#" class="dropbtn">Adoption</a>
			<div class="dropdown-content">
			<a href="sliderfinal.html">Adopt a dog</a>
			<a href="whyadopt.html">Why Adopt</a>
			<a href="giveup.html">Submit Profile</a>
			</div>
			</li>
			<li class="dropdown">
			<a href="#" class="dropbtn">Animal Welfare</a>
			<div class="dropdown-content">
			<a href="alaws.html">Laws in India</a>
			<a href="report.html">Report animal abuse</a>
			<a href="#">Sign petition</a>
			</div>
			</li>
			<li class="dropdown">
			<a href="#" class="dropbtn">Join Us</a>
			<div class="dropdown-content">
			<a href="donate.html">Donate</a>
			<a href="#">Our Team</a>
			<a href="subscribe.html">Subscribe</a>
			</div>
			</li>
			</ul>
			</div>
	
<div class="subscribe">
  <h1>PETS</h1>
  <p>People for ethical treatment of strays</p><br><br><br>
  <form class="form-inline" action="subscribe.php" onsubmit="return validateForm(this)">
 <input type="text" class="form-control" size="50" placeholder="Username" required>
   <br><br>
    <input type="email" class="form-control" size="50" placeholder="Email Address" required>
      <br>
<br><br><br>
 <button type="submit" class="btn btn-danger">@Subscribe@</button>
  </form>
</div>

			<!--sidebar social icon fixed to the right-->
			<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="right:0px; top:200px;">
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
				<a class="a2a_button_pinterest"></a>
				<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
			</div>

     		
			<!--specials--><br><br><br>
			<div class="contain">	<h3>timings</h3>
									<p>10:30 Am - 10:45 Am Activity</p>
									
									<p>11:00 Am - 12:00 PM Visit Hour</p>
									<p>12:00 Pm - 01:00 Pm Feeding</p>
									<h3> details</h3>
									<p><a href="about.html">About Us</a></p>
									<p><a href="#">Privacy Policy</a></p>
									<p><a href="#">Terms & Conditions</a></p>
									<p><a href="sitemap.html">SiteMap</a></p>
									<h3>contact</h3>
								<address>
									<p>Glasgow,Le 99 Pr 45.</p>
									<p>Telephone : +1 800 603 6035</p>
									<p>FAX : +1 800 889 9898</p>
									<p>Email : <a href="mailto:example@mail.com">example@mail.com</a></p>
								</address>
							<h3>social</h3>
								
									<p><a href="#">facebook</a></p>
									<p><a href="#">twitter</a></p>
									<p><a href="#">google+</a></p>
									
								
								
								
							
			</div>
	
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p>All Rights reserved.PETS</a></p>
					</div>
				</div>
			</div>

</body>
</html>
