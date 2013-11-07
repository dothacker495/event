<!DOCTYPE>
<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	
		<title>Event Goddess</title>
	</head>
	<body>
		<div class="wrap">
			<?php
				include_once('header.php');
			?>
			<div class="content-wrap">
				<div class="content">
					<iframe src="https://www.facebook.com/plugins/registration?
								 client_id=113869198637480&
								 redirect_uri=https%3A%2F%2Fdevelopers.facebook.com%2Ftools%2Fecho%2F&
								 fields=name,birthday,gender,location,email"
							scrolling="auto"
							frameborder="no"
							style="border:none"
							allowTransparency="true"
							width="100%"
							height="330">
					</iframe>
					<div id="fb-root"></div>
					<script src="https://connect.facebook.net/en_US/all.js#appId={380045678712323}&xfbml=1"></script>

					<fb:registration 
					  fields="name,birthday,gender,location,email" 
					  redirect-uri="https://developers.facebook.com/tools/echo/"
					  width="530">
					</fb:registration>
					<fb:login-button registration-url="https://developers.facebook.com/docs/plugins/registration" />
				</div>
			</div>
			<?php
				include_once('footer.php');
			?>
		</div>
	</body>
</html>