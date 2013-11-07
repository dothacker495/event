<!DOCTYPE>
<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	
		<title>Another</title>
	</head>
	<body>
		<div class="wrap">
			<?php
				include_once('header.php');
			?>
			<div class="content-wrap">
				<div class="content">
					<div class="search">
						<p>Find providers of flowers, cakes, venues, photography services, video and more...</p>
						<p>
							<form action="browse.php" method="post">
								<button>Browse</button>
								<input type="text" name="" placeholder="Enter a City" />
							</form>
						</p>
					</div>
					<div class="main-content">
						<h1>What is Event Goddess?</h1>
						<p>Event Goddess is a site that will help you take the work and headache out of planning your perfect day. We know that you really want to enjoy your wedding, not labor for it. That's why we created Event Goddess! Instead of you searching your city for service providers that meet your needs, let them come to you!</p>
						<p>Just use the Wizard below to automate the process. Also make sure to download our iPhone App and to signup for our service via facebook.</p>
						<h1>Use the Wizard to automate the planning of your wedding</h1>
						<p>The wizard will help you pinpoint the exact services that you need based on your preferred date of wedding, wedding budget, pre nuptial wedding photo theme, wedding location and more. So what are you waiting for? Your dream wedding plan would be yours in a few minutes!</p> 
						<p>This can be done by answering a few questions in the wizard and afterwards, you'll be provided with the best deals around based on your preference.</p>
						<p>
							<form id="btnWiz" action="wizard.php" method="post">
								<button>Wizard</button>
							</form>
						</p>
					</div>
				</div>
			</div>
			<?php
				include_once('footer.php');
			?>
		</div>
	</body>
</html>