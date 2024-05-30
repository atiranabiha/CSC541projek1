<!DOCTYPE html>

<html>

<head>

    <title>My Education</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
	
        body,h1,h2,h3,h4 {
            font-family: "Montserrat", sans-serif; /* Set font family for body and headings */
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


        hr {
            border: none; /* Remove default border */
            border-top: 1px solid #ccc; /* Light grey top border */
            margin: 20px 0; /* 20px top and bottom margin */
        }

        p {
            margin-bottom: 10px; /* 10px bottom margin */
        }

		.education,
		.language {
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
        <h1 style="font-size: 40px; font-weight: bold;">My Education</h1>
    </header>

	<!-- Education section -->
    <div class="education">
        <h2 class="w3-text-grey w3-padding-16"></i>Education Qualification</h2>
        <hr>
        <div class="w3-container">
            <h3 class="w3-opacity"><b>Tertiary</b></h3>
            <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>(2020-2023, 2023-present)</h4>
			<p>Diploma: Science Computer and Mathematics, Uitm Arau Perlis</p>
            <p>Degree: College of Computing, Informatics and Mathematics, UiTM Shah Alam Selangor</p>
            <hr>
        </div>
        <div class="w3-container">
            <h3 class="w3-opacity"><b>Secondary</b></h3>
            <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015-2019</h4>
            <p>Sekolah Menengah Kebangsaan Seksyen 9, Shah Alam</p>
            <hr>
        </div>
        <div class="w3-container">
            <h3 class="w3-opacity"><b>Elementary</b></h3>
            <h4 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2009-2014</h4>
            <p>Sekolah Kebangsaan Seksyen 9, Shah Alam</p><br>
        </div>
    </div>

	<!-- Language section -->
    <div class="language">
        <h2 class="w3-text-grey w3-padding-16"></i>Language Skills</h2>
		<hr>
        <div class="w3-container">
            <!-- Progress bars / Skills -->
            <p>Malay</p>
            <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-container w3-teal w3-padding w3-round-xlarge w3-center" style="width:95%">95%</div>
            </div>
            <p>English</p>
            <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-container w3-teal w3-padding w3-round-xlarge w3-center" style="width:80%">80%</div>
            </div>
            <p>Mandarin</p>
            <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-container w3-teal w3-padding w3-round-xlarge w3-center" style="width:25%">25%</div>
            </div>
        </div>
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
