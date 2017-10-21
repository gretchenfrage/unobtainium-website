<!DOCTYPE html>
<html>
	<style>
		body {
			background-color: black;
			background-position: center;
			background-attachment: fixed;
			font-family: consolas;
			background-image: url("background.jpg");
			text-align: center;
		}
		div.section {
			background-color: #BDC3C7;
			width: 600px;
			margin: auto;
			border-radius: 3px;
			font-size: 15pt;
			padding: 20px;
		}
		#message {
			width: 500px;
			background-color: #7F8C8D;
			color: white;
			margin: auto;
			display: inline-block;
			padding: 20px;
			border-radius: 3px;
			text-align: justify;
			font-size: 12pt;
		}
		#messageContents {
			text-indent: 50px;
		}
		p.spacer {
			background: none;
			padding-bottom: 70px;
		}
		a.link {
		    padding: 10px 19px;
		    font-size: 22px;
		    border-radius: 6px;
		    color: #ffffff;
		    background-color: #1abc9c;
		    display: block;
			text-decoration: none;
    		width: 200px;
    		margin: auto;
    		margin-bottom: 20px;
    		margin-top: 20px;
    		text-align: center;
    		cursor: pointer;
		    -webkit-user-select: none;  
			-moz-user-select: none;    
			-ms-user-select: none;      
			user-select: none;
		}
	</style>
	<head>
		<meta charset="UTF-8">
		<title>Contact</title>
	</head>
	<body>
		<p class="spacer">
		<div class="section">
			<?php

			$name = $_POST["name"];
			$email = $_POST["email"];
			$number = $_POST["number"];
			$message = $_POST["message"];

			$from = "pavel@westrocketry.com";
			$subject = "SL 2017 Unobtainum Contact Submission";
			$body = "Name: $name\n".
							"Email: $email\n".
							"Number: $number\n".
							"Message:\n$message";
			//$to = "kahlo.phoenix@gmail.com";
			$to = "pavel@westrocketry.com";
			$headers = "From: $from \r\n";
			$headers .= "Reply-To: $visitor_email \r\n";

			echo "Submitting message...";
			echo "<br>";
			echo "<br>";
			echo "<span id='message'>";
			
			echo "Name: $name\n<br>";
			echo "Email: $email\n<br>";
			echo "Number: $number\n<br>";
			echo "Message: \n<br>\n<p id='messageContents'>\n$message\n</p>\n<br>";

			echo "</span>";

			mail($to, $subject, $body, $headers);

			echo "<br>";
			echo "<br>";
			echo "...message submitted";
			echo "<br>";

			?>
			<a class="link" href="index.html">Back to Site</a>
		</div>
	</body>
</html>