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
					<div class="main-content">
						<div class="regForm">
							<table>
								<tr>
									<td width="280">
										<p class="check">* = Denotes required fields</p>
										<p><label>Email Address *</label></p>
										<input type="text" name="" placeholder="Email Address" />
										<p><label>Company *</label></p>
										<input type="text" name="" placeholder="Company" />
										<p><label>Address</label></p>
										<input type="text" name="" placeholder="Address" />
										<p><label>Phone Number</label></p>
										<input type="text" name="" placeholder="Phone Number" />
										<p><label>What Do You Do? *</label></p>
										<select name="">
											<option value="">Choose One</option>
											<option value="">Florists</option>
											<option value="">Cakes</option>
											<option value="">Catering</option>
											<option value="">Music</option>
											<option value="">Photographers</option>
											<option value="">Video</option>
											<option value="">Formal Wear</option>
											<option value="">Car Hire</option>
											<option value="">Giveaways</option>
											<option value="">Professional Host</option>
											<option value="">Printing</option>
											<option value="">Event Coordinator</option>
											<option value="">Hair and Makeup</option>
										</select>
										<p><label>Price Range of Service/<br />Products</label></p>
										<input type="text" name="" id="min" placeholder="Minimum" /> <span>to</span> <input type="text" name="" id="max" placeholder="Maximum" />
										<p><button>Sign me up!</button></p>
									</td>
									<td width="400">
										<!--<p><label>Upload a Photo</label></p>
										<input type="file" name="" />
										<p><label>Video Link</label></p>
										<input type="text" name="" placeholder="Video URL" />-->
										<p><label>Terms and Conditions *</label></p>
										<textarea name="" cols="50" rows="25" readonly="readonly">
												<?php
													if(file_exists('toc.txt'))
													{
														$file = fopen('toc.txt', 'r');
														echo fread($file, filesize('toc.txt'));
														fclose($file);
													}
													else
														echo 'File not found!';
												?>
										</textarea>
										<p><input type="checkbox" name="" />  <label class="check">I agree to the Terms and Conditions.</label></p>
										<p class="last"><input type="checkbox" name="" /> <label class="check">Sign me up as a Gold Member.</label></p>
									</td>
								</tr>
							</table>
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