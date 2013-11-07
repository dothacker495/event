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
						<form id="form1" class="form1" name="form1" action="afterwiz.php" method="post">
     	 				<h1>I am planning a wedding...</h1>
		        		<p><label class="In">For</label></p><input type="text"  placeholder="how many?"/>
         				<p><label class="In">My date is  </label></p>
                        <input type="text" id="start1" placeholder="choose date" /> to <input type="text" id="end1" placeholder="choose date"/></label>
         				<p><label class="In">
					         	Services I need: </label></p>
					         	<table>
					         		<tr>
					            		<td><input type="checkbox" value="Florist"> Florist</td>
					         			<td><input type="checkbox" value="Cake"> Cake</td> 
                                        <td><input type="checkbox" value="Catering"> Catering</td>
                                        <td><input type="checkbox" value="Music"> Music</td>
					         		</tr>
							        <tr>	
                                    	<td><input type="checkbox" value="Photos"> Photos</td>               
            							<td><input type="checkbox" value="Venue"> Venue</td> 
	         							<td><input type="checkbox" value="Band"> Band</td>
                                        <td><input type="checkbox" value="Formal Wear"> Formal Wear</td>
	         						</tr>
                                    <tr>
                                    	<td><input type="checkbox" value="Car Hire"> Car Hire</td>
                                        <td><input type="checkbox" value="Giveaways"> Giveaways</td>
                                        <td><input type="checkbox" value="Proffesional Host"> Professional Host</td>
                                        <td><input type="checkbox" value="Printing"> Printing</td>
									</tr>
                                    <tr>	
                                        <td><input type="checkbox" value="Event Co-ordinator"> Event Co-ordinator</td>
 										<td><input type="checkbox" value="Hair and Makeup"> Hair and Makeup</td>
                                        <td><input type="checkbox" value="Decorations"> Decorations</td>
                                    </tr>
	         					</table>
	      						</label><br/>
	      						<label class="In">My Price range is from </label><input id="min" type="text" placeholder="Minimum"/> to <input id="max" type="text" placeholder="Maximum"/> PhP
                           <p><button class="send" onClick="after();" type="submit">Submit</button></p>
 						</form>							
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