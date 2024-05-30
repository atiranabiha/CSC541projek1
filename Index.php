<!DOCTYPE html>

<html>

<head>

	<title>Homepage</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	
		body, h1, h2, h3, h4, h5, h6 {
			font-family: "Montserrat", sans-serif /* Set font family for body and headings */
		}
		
		.w3-row-padding img {
			margin-bottom: 12px /* Margin for images in row padding */
		}
		
		.bgimg {
			background-position: center; /* Center the background image */
			background-repeat: no-repeat; /* Do not repeat the background image */
			background-size: cover; /* Cover the entire container with the background image */
			background-image: url('http://localhost/dashboard/Projek1/image/HP7.jpg'); /* URL of the background image */
			min-height: 100vh; /* Minimum height of the container */
		}
		
	</style>
	
</head>

<body>

	<!-- Sidebar with image -->
	<nav class="w3-sidebar w3-hide-medium w3-hide-small" style="width:40%;background-color:black;">
		<div class="bgimg w3-container w3-center"></div> <!-- Background image in the sidebar -->
	</nav>

	<!-- Hidden Sidebar (reveals when clicked on menu icon)-->
	<nav class="w3-sidebar w3-black w3-animate-right w3-xxlarge" style="display:none;padding-top:150px;right:0;z-index:2" id="mySidebar">
		<a href="javascript:void(0)" onclick="closeNav()" class="w3-button w3-black w3-xxxlarge w3-display-topright" style="padding:0 12px;">
			<i class="fa fa-remove"></i> <!-- Close button icon -->
		</a>
		<div class="w3-bar-block w3-center">
			<!-- Sidebar links -->
			<a href="Index.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Home</a>
			<a href="Photo_gallery.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Gallery</a>
			<a href="Myself.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Myself</a>
			<a href="MyEducation.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Education</a>
			<a href="MyPassion.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Passion</a>
			<a href="Comment.php" class="w3-bar-item w3-button w3-text-grey w3-hover-black" onclick="closeNav()">Comment</a>
		</div>
	</nav>

	<!-- Page Content -->
	<div class="w3-main w3-padding-large" style="margin-left:40%">

	    <!-- Menu icon to open sidebar -->
	    <span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

	    <!-- Header -->
	    <header class="w3-container w3-center" style="padding:128px 16px" id="home">
			<h1 class="w3-jumbo"><b>A T I R A</b></h1>
			<p>Welcome to my FIRST website.</p>
			<img src="image\HP7.jpg" class="w3-image w3-hide-large w3-hide-small w3-round" style="display:block;width:60%;margin:auto;">
			<img src="image\HP7.jpg" class="w3-image w3-hide-large w3-hide-medium w3-round" width="1000" height="1333">
	    </header>

	    <!-- Portfolio Section -->
	    <div class="w3-padding-32 w3-content" id="portfolio">
			<h2 class="w3-text-grey">Experience with me.</h2>
			<hr class="w3-opacity">

			<!-- Grid for photos -->
			<div class="w3-row-padding" style="margin:0 -16px">
				<div class="w3-half">
					<img src="image/HP10.jpg" style="width:100%">
					<img src="image/HP16.jpg" style="width:100%">
					<img src="image/HP13.jpg" style="width:100%">
				</div>


				<div class="w3-half">
					<img src="image/HP1.jpg" style="width:100%">
					<img src="image/HP11.jpg" style="width:100%">
					<img src="image/HP18.jpg" style="width:100%">
					<img src="image/HP9.jpg" style="width:100%">
					<img src="image/HP14.jpg" style="width:100%">
				</div>
		    </div>
        </div>

	    <!-- About Section -->
	    <div class="w3-content w3-justify w3-text-grey w3-padding-32" id="about">
			<h2>About</h2>
			<hr class="w3-opacity">
				<p class="justified-text">Welcome to my website. This is the first website that I created. 
				I am passionate in using technology to create an interesting website. 
				There are many flaws in my website design, but I will work hard to 
				improve my skills so that I can make an interesting and innovative website. 
				Therefore,  I am delighted to introduce you to my first website. 
				I hope this website might inspire you in creating your beautiful website.
				Thank you for visiting this website.
				</p>
		</div>

		<!-- Contact Section -->
		<div class="w3-padding-32 w3-content w3-text-grey" id="contact" style="margin-bottom:64px">
			<h2>My Social</h2>
			<hr class="w3-opacity">

				<div class="w3-section">
					<p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +60 122095285 </p>
					<p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i> Email: nratirazdin@gmail.com </p>
					<p><i class="fa fa-instagram fa-fw w3-xxlarge w3-margin-right"> </i> Instagram: @tiranabiha </p>
				  
				</div>  
	    </div> 
	</div>

	<script>
	// Open and close sidebar
	function openNav() {
	  document.getElementById("mySidebar").style.width = "60%"; // Set the width of the sidebar
	  document.getElementById("mySidebar").style.display = "block"; // Display the sidebar
	}

	function closeNav() {
	  document.getElementById("mySidebar").style.display = "none"; // Hide the sidebar
	}
	</script>

</body>

</html>

