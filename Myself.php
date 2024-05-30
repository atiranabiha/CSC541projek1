<!DOCTYPE html>

<html>

<head>

    <title>My Biodata</title>
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
            font-family: Arial, sans-serif; /* Fallback font */
            background-color: #f8f8f8; /* Light grey background */
            margin: 0; /* Remove default margin */
            padding: 0; /* Remove default padding */
            text-align: center; /* Center-align text */
        }

        header {
			color: grey; /* Grey text color */
            padding: 10px 0; /* 10px padding top and bottom, 0 left and right */
            margin-bottom: 20px; /* 20px bottom margin */
            position: relative; /* Position relative for potential positioning */
        }

        img {
            border-radius: 50%; /* Make image circular */
            margin-bottom: 20px; /* 20px bottom margin */
            max-width: 200px; /* Maximum width of 200px */
            height: auto; /* Maintain aspect ratio */
            border: 5px solid #fff; /* White border around image */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
        }

        hr {
            border: none; /* Remove default border */
            border-top: 1px solid #ccc; /* Light grey top border */
            margin: 20px 0; /* 20px top and bottom margin */
        }

        p {
            margin-bottom: 10px; /* 10px bottom margin */
        }

		address { 
            font-style: normal; /* Remove default italic style */
            margin-bottom: 20px; /* 20px bottom margin */
        }
		
		.information,
		.about-me {
            background-color: #fff; /* White background */
            padding: 20px; /* 20px padding */
            border-radius: 20px; /* Rounded corners */
            margin: 0 auto; /* Center the element */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            margin-bottom: 20px; /* 20px bottom margin */
            max-width: 800px; /* Maximum width of 800px */
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
        <h1 style="font-size: 40px; font-weight: bold;">My Biodata</h1>
    </header>

	<!-- Profile picture -->
    <img src="image/MyPic.jpg" alt="My Picture">

	<!-- Information section -->
    <div class="information">
        <h2 class="w3-text-grey w3-padding-16"></i>My Information</h2>
        <hr>
        <address>
            <p>Name: Nur Atira Nabiha binti Mohd Zainuddin</p>
            <p>Age: 22 Years Old</p>
            <p>Mobile: 0122095285</p>
            <p>Email ID: nratirazdin@gmail.com</p>
            <p>Date of Birth: 29 October 2002</p>
            <p>Address: No 3, Jalan Cembul 11/8b, Seksyen 11, Shah Alam</p>
            <p>Postcode: 40100</p>
            <p>State: Selangor</p>
            <p>Religion: Islam</p>
            <p>Nationality: Malay</p>
            <p>Gender: Female</p>
        </address>
    </div>

	<!-- About me section -->
    <div class="about-me">
        <h2 class="w3-text-grey w3-padding-16"></i>About Me</h2>
	    <hr>
		    <p>Growing up as one of five siblings has given me a strong sense of accomplishment. 
			Witnessing their journeys motivates me to push my own boundaries and pursue my desired objectives. 
			My interests were at the intersection of art and technology, which is an ideal setting for creativity. 
			While obstacles are unavoidable, my undying faith in myself drives my ambition to make my dreams a reality. 
			I am committed to constant learning and expanding my knowledge and expertise in my studies in order to prepare 
			for the wonderful chances that await me.</p>
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
