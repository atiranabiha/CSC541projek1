<!DOCTYPE html>

<html>

<head>

    <title>My Passion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
	
        body,h1,h2 {
            font-family: "Montserrat", sans-serif /* Set font family for body and headings */
        }

        body {
            font-family: Arial, sans-serif; /* Fallback font family */
            background-color: #f8f8f8; /* Light grey background color */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            text-align: center; /* Center-align text */
        }

        header {
            color: Grey; /* Set text color to grey */
            padding: 10px 0; /* 10px padding top and bottom, 0 left and right */
            margin-bottom: 20px; /* 20px bottom margin */
            position: relative; /* Position relative for potential positioning */
        }
		
		img {
            border-radius: 20px; /* Apply border-radius for curved corners */
            margin-bottom: 20px; /* 20px bottom margin */
            width: 200px; /* Set width to 200px */
            height: 200px; /* Set height equal to width for a square */
            object-fit: cover; /* Maintain aspect ratio and fill the container */
            border: 5px solid #fff; /* White border around the image */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
		}

        hr {
            border: none; /* Remove default border */
            border-top: 1px solid #ccc; /* Light grey top border */
            margin: 20px 0; /* 20px top and bottom margin */
        }

        p {
            margin-bottom: 10px; /* 10px bottom margin */
            text-align: justify; /* Justify text alignment */
        }
		
		.crochet,
		.travel,
		.fashion{
            background-color: #fff; /* White background color */
            padding: 20px; /* 20px padding */
            border-radius: 20px; /* Rounded corners */
            margin: 0 auto; /* Center the element */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            margin-bottom: 20px; /* 20px bottom margin */
            max-width: 800px; /* Set a maximum width of 800px */
            width: 100%; /* Full width */
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

    <!-- Header -->
    <header>
        <h1 style="font-size: 40px; font-weight: bold;">My Passion</h1>
    </header>
	
	<!-- Crochet section -->
    <div class="crochet">
        <h2 class="w3-text-grey w3-padding-16"></i>Crochet</h2>
		<hr>
			<img src="image/HP19.jpg" alt="My Picture">
            <p>Crocheting isn't just a hobby for me; it's a passion. 
			Crocheting allows me to express my artwork and make a variety of products, including garments, figures, and blankets. 
			It's a hobby that fills my leisure time and helps me relax. 
			Sharing the results of my crochet with loved ones always makes me happy.</p>
    </div>

	<!-- Travel section -->
    <div class="travel">
        <h2 class="w3-text-grey w3-padding-16"></i>Travelling</h2>
		<hr>
			<img src="image/HP2.jpg">
            <p>Traveling is one of my greatest passions. 
			Exploring new places and trying new things always fascinates me. 
			The emotion of arriving there for the first time heightens the significance of the encounter because the adventure is about to begin. 
			Every vacation is an unforgettable adventure that will live on in my memories.</p>
    </div>
	
	<!-- Fashion section -->	
	<div class="fashion">
        <h2 class="w3-text-grey w3-padding-16"></i>Fashion</h2>
		<hr>
			<img src="image/HP5.jpg">
            <p>Fashion is more than just clothing; it's one of my passions. 
			It is a type of self-expression that combines creativity and confidence. 
			Fashion reflects a person's uniqueness while also defining the individual's personality. 
			Fashion allows me to express myself, improve my confidence, and inspire and motivate myself.</p>
    </div>

	<script>
	// Open and close sidebar
		function openNav() {
			document.getElementById("mySidebar").style.width = "40%"; // Set the width of the sidebar
			document.getElementById("mySidebar").style.display = "block"; // Display the sidebar
			document.body.classList.add("sidebar-open");
		}

		function closeNav() {
		    document.getElementById("mySidebar").style.display = "none"; // Hide the sidebar
		    document.body.classList.remove("sidebar-open");
		}
	</script>

</body>

</html>
