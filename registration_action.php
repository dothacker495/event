<?php
error_reporting(E_ALL ^ E_WARNING);
if(isset($_POST['REGISTER']))
{
	require('createDB.php');
	mkdir('images');
	$company_name=$_POST['COMPANY_NAME'];
	$address=$_POST['ADDRESS'];
	$phone=$_POST['PHONE'];
	$price_range=$_POST['PRICE_RANGE'];
	$service=$_POST['SERVICE'];
	
	$video_link=$_POST['VIDEO_LINK'];
	$email_address=$_POST['EMAIL_ADDRESS'];
	$agree_terms=isset($_POST['AGREE_TERMS'])?1:0;
	$want_premium=isset($_POST['WANT_PREMIUM'])?1:0;
	$dir='images/'.$company_name;
	mkdir($dir);
	$dir.="/".$_FILES["file"]['name'];
	move_uploaded_file($_FILES["file"]['tmp_name'], $dir);
	$sql="INSERT IGNORE INTO supplier (ID, COMPANY_NAME, ADDRESS, PHONE, PRICE_RANGE, SERVICE, PICTURE_UPLOAD, VIDEO_LINK, EMAIL_ADDRESS, AGREE_TERMS, WANT_PREMIUM) 
	VALUES ('', '". $company_name."', '".$address."', '".$phone."','".$price_range ."','".$service."', '".$dir."', '".$video_link."', '".$email_address."', '".$agree_terms."', '".$want_premium."')";
	//echo $sql;
	mysql_query($sql, $con);
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Event Goddess - Registration Form</title>
	</head>
	<body>
		<div class="regForm">
			<form method="post" action="" enctype="multipart/form-data">
				<p><label for="COMPANY_NAME">Company Name:</label></p>
				<p><input type="text" name="COMPANY_NAME" /></p>
				<p><label for="ADDRESS">Address:</label></p>
				<p><input type="text" name="ADDRESS" /></p>
				<p><label for="PHONE">Contact Number:</label></p>
				<p><input type="text" name="PHONE" /></p>
				<p><label for="PRICE_RANGE">Price Range:</label></p>
				<p><input type="text" name="PRICE_RANGE" /></p>
				<p><label for="SERVICE">Service or Products:</label></p>
				<select name="SERVICE">
					<option value="Florists">Florists</option>
					<option value="Cakes">Cakes</option>
					<option value="Catering">Catering</option>
					<option value="Music">Music</option>
					<option value="Photographers">Photographers</option>
					<option value="Video">Video</option>
					<option value="Formal Wear">Formal Wear</option>
					<option value="Car Hire">Car Hire</option>
					<option value="Giveaways">Giveaways</option>
					<option value="Professional Host">Professional Host</option>
					<option value="Printing">Printing</option>
					<option value="Event Coordinator">Event Coordinator</option>
					<option value="Hair and Makeup">Hair and Makeup</option>
				</select>
				<p><label for="file">Image:</label></p>
				<p><input type="file" name="file" id="file"/></p>
				<p><label for="VIDEO_LINK">Video:</label></p>
				<p><input type="text" name="VIDEO_LINK" /></p>
				<p><label for="EMAIL_ADDRESS">Email Address:</label></p>
				<p><input type="text" name="EMAIL_ADDRESS" /></p>
				<p><label for="AGREE_TERMS">Terms and Conditions:</label></p>
				<p><textarea name=""></textarea></p>
				<p><input type="checkbox" name="AGREE_TERMS" /> I accept the terms and conditions.</p>
				<p><input type="checkbox" name="WANT_PREMIUM" /> Sign me up as a Gold Member!</p>
				<p><input type="submit" value= "Register" name="REGISTER"/></p>
			</form>
		</div>
	</body>
</html>