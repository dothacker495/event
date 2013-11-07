<!DOCTYPE>
<html>
	<head>
		<link href="http://fonts.googleapis.com/css?family=Henny+Penny" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
		<link rel="stylesheet" href="../../themes/base/jquery.ui.all.css">
	<link type="text/css" href="css/ui-lightness/jquery-ui-1.7.3.custom.css" rel="stylesheet" />	

		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

		<script type="text/javascript" src="js/jquery-ui-1.7.3.custom.min.js"></script>

		<script type="text/javascript">

	$(function() {
		var start1 = $('#start1').datepicker({onSelect: function(dateStr) {
      end1.datepicker('option', {mindate: $(this).datepicker('getDate')});
}});
var end1 = $('#end1').datepicker({onSelect: function(dateStr) {
      start1.datepicker('option', {maxdate: $(this).datepicker('getDate')});
}});
		});	
	</script>	
        <link href='http://fonts.googleapis.com/css?family=Henny+Penny' rel='stylesheet' type='text/css'>
		<title>Event Goddess</title>
	</head>
	<body>
		
		<div id="Wrap" class="wrap">
			<?php
				include_once('header.php');
			?>
			<div class="content-wrap">
				<div class="content">
					<div class="regForm">
						<div class="main-content">
                        <div class="sub-content">
					<label>Thank you for submitting your information. Now all you have to do is sit back and wait for suppliers and service providers to send you quotes!<br/><br/>
                     <a class="backto" href="index.php">click here to go back to homepage</a>
                    </label>
                    	</div>				
					</div>
                    </div>
				</div>
			</div>
			<?php
				include_once('footer.php');
			?>
		</div>
	</body>
</html>