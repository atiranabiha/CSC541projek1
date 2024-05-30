<!DOCTYPE html>

<html>

<head>

	<title>My Gallery</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
	
		body,h1 {
			font-family: "Montserrat", sans-serif /* Set font family for body and h1 */
		} 
		
		img {
			margin-bottom: -7px /* Margin for images */
		} 
		
		.w3-row-padding img {
			margin-bottom: 12px /* Margin for images in row padding */
		}

		.w3-third img {
			border: 0.3cm solid white; /* Border for images in third column */
			box-sizing: border-box; /* Ensure borders are included in the element's total width and height */
			border-radius: 20px; /* Add rounded corners */
		  
		}
		
	</style>
	
</head>

<body>

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

	<!-- Menu icon to open sidebar -->
	<span class="w3-button w3-top w3-white w3-xxlarge w3-text-grey w3-hover-text-black" style="width:auto;right:0;" onclick="openNav()"><i class="fa fa-bars"></i></span>

	<!-- !PAGE CONTENT! -->
	<div class="w3-content" style="max-width:1500px">

	<!-- Header -->
	<div class="w3-opacity">
		<span class="w3-button w3-xxlarge w3-white w3-right" onclick="openNav()"><i class="fa fa-bars"></i></span> 
	<div class="w3-clear"></div>
		<header class="w3-center w3-margin-bottom">
			<h1 style="color: black; font-weight: bold;">Welcome to my Gallery</h1>
			<p>This is my darling cat, who completes my life and is always by my side in times of hardship and joy.</p>
			<p>Please enjoy this photos that I captured through my lens.</p>
		</header>
	</div>

	<!-- Photo Grid -->
	<div class="w3-row" id="myGrid" style="margin-bottom:128px">
		<div class="w3-third">
			<!-- Images in the first third column -->
			<img src="image/CAT4.jpg" style="width:100%">
			<img src="image/CAT19.jpg" style="width:100%">
			<img src="image/CAT9.jpg" style="width:100%">
			<img src="image/CAT15.jpg" style="width:100%">
			<img src="image/CAT18.jpg" style="width:100%">
			<img src="image/CAT16.jpg" style="width:100%">
		</div>

		<div class="w3-third">
			<!-- Images in the second third column -->
			<img src="image/CAT20.jpg" style="width:100%">
			<img src="image/CAT10.jpg" style="width:100%">
			<img src="image/CAT22.jpg" style="width:100%">
			<img src="image/CAT8.jpg" style="width:100%">
			<img src="image/CAT13.jpg" style="width:100%">
			<img src="image/CAT7.jpg" style="width:100%">
		</div>

		<div class="w3-third">
			<!-- Images in the third third column -->
			<img src="image/CAT11.jpg" style="width:100%">
			<img src="image/CAT14.jpg" style="width:100%">
			<img src="image/CAT3.jpg" style="width:100%">
			<img src="image/CAT12.jpg" style="width:100%">
			<img src="image/CAT6.jpg" style="width:100%">
			<img src="image/CAT21.jpg" style="width:100%">
		</div>
	</div>

	<script>
	// Open and close sidebar
	function openNav() {
	  document.getElementById("mySidebar").style.width = "40%"; // Set the width of the sidebar
	  document.getElementById("mySidebar").style.display = "block"; // Display the sidebar
	}

	function closeNav() {
	  document.getElementById("mySidebar").style.display = "none"; // Hide the sidebar
	}
	</script>

</body>

</html>