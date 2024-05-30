<!DOCTYPE html>

<html lang="en">

<head>

    <title>Comment</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
	<style>
	
        body,
        h1 {
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
            color: grey; /* Set text color to grey */
            padding: 10px 0; /* 10px padding top and bottom, 0 left and right */
            margin-bottom: 20px; /* 20px bottom margin */
            position: relative; /* Position relative for potential positioning */
        }

        .message,
        .calculate {
            background-color: #fff; /* White background color */
            padding: 20px; /* 20px padding */
            border-radius: 20px; /* Rounded corners */
            margin: 0 auto; /* Center the element */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow effect */
            margin-bottom: 20px; /* 20px bottom margin */
            max-width: 800px; /* Set a maximum width of 800px */
            width: 100%; /* Full width */
        }

        .message form input[type="text"],
        .message form input[type="email"],
        .message form select,
        .message form textarea {
            width: 100%; /* Full width */
            padding: 10px; /* 10px padding */
            margin: 10px 0; /* 10px top and bottom margin */
            border: 1px solid #ccc; /* Light grey border */
            border-radius: 20px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .message form button,
        .calculate button {
            background-color: #000; /* Black background color */
            color: #fff; /* White text color */
            padding: 10px 20px; /* 10px top and bottom, 20px left and right padding */
            border: none; /* Remove border */
            border-radius: 30px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            font-size: 16px; /* Font size */
        }

        .message form button:hover,
        .calculate button:hover {
            background-color: #ccc; /* Light grey background color on hover */
        }

        .input-group {
            margin-bottom: 15px; /* 15px bottom margin */
        }

        .input-group label {
            display: block; /* Block display */
            margin-bottom: 5px; /* 5px bottom margin */
        }

        .input-group input {
            width: 100%; /* Full width */
            padding: 8px; /* 8px padding */
            border: 1px solid #ccc; /* Light grey border */
            border-radius: 20px; /* Rounded corners */
            box-sizing: border-box; /* Include padding and border in element's total width and height */
        }

        .result {
            margin-top: 20px; /* 20px top margin */
            font-weight: bold; /* Bold font weight */
        }
		
    </style>
	
</head>

<body>

    <!-- Hidden Sidebar (reveals when clicked on menu icon) -->
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
        <h1 style="font-size: 40px; font-weight: bold;">Comment</h1>
    </header>

	<!-- Message section -->
    <div class="message">
        <h2 class="w3-text-grey w3-padding-16">Send Message</h2>
        <hr>
        <form>
			<input type="text" name="Name" placeholder="Full Name" required>
            <input type="email" name="Email" placeholder="Email" required>
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
            <textarea name="Message" placeholder="Message" required></textarea>
            <button type="submit"><i class="fa fa-paper-plane w3-margin-right"></i>Send Message</button>
        </form>
    </div>

	<!-- Calculate section -->
    <div class="calculate">
        <h2 class="w3-text-grey w3-padding-16">BMI Calculator</h2>
        <hr>
        <div class="input-group">
            <label for="height">Height (cm)</label>
            <input type="number" id="height" placeholder="Enter your height in cm">
        </div>
        <div class="input-group">
            <label for="weight">Weight (kg)</label>
            <input type="number" id="weight" placeholder="Enter your weight in kg">
        </div>
        <button onclick="calculateBMI()">Calculate BMI</button>
        <div class="result" id="result"></div>
        <div class="comment" id="comment"></div>
    </div>

    <script src="js/Comment.js"></script>

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