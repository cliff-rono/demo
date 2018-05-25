<!--
Author: /
-->

<!DOCTYPE html>
<html>
<head>

	<title>PORAEH</title>

	<!-- For-Mobile-Apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Classy Forms Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps -->

	<!-- Style --> <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all" />
	<!-- Default-JavaScript-File --> <script type="text/javascript" src="assets/js/jquery.min.js"></script>

	<!-- Web-Fonts -->
		<link href='//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<!-- //Web-Fonts -->

</head>
<body>

	<h1>Register with us Today!</h1>

	<div class="container">



		<div class="tab">

			<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
				<script src="assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
					$(document).ready(function () {
						$('#horizontalTab').easyResponsiveTabs({
							type: 'default', //Types: default, vertical, accordion
							width: 'auto', //auto or any width like 600px
							fit: true,   // 100% fit in a container
							closed: 'accordion', // Start closed if in accordion view
							activate: function(event) { // Callback function if tab is switched
								var $tab = $(this);
								var $info = $('#tabInfo');
								var $name = $('span', $info);
								$name.text($tab.text());
								$info.show();
							}
						});

						$('#verticalTab').easyResponsiveTabs({
							type: 'vertical',
							width: 'auto',
							fit: true
						});
					});
				</script>

				<div class="tabs">

					<div class="tab-left">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item">User Registration</li>
							<li class="resp-tab-item">Login</li>
							<li class="resp-tab-item">More Info</li>
						</ul>
						<a href="index.php"><button class="btn btn-primary" style="color:orange;">Back To Home</button></a>
					</div>

					<div class="tab-right">
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content">
								<div class="w3l-sign-in">
									<h3>User Registration</h3>
									<form action="" method="post">
										<input type="text" class="name" name="fname" placeholder="First Name" required="">
										<input type="text" class="name" name="mname" placeholder="Middle Name" required="">
										<input type="text" class="name" name="lname" placeholder="Last Name" required="">
										<input type="email" class="email" name="email" placeholder="Email" required="">
										<input type="text" class="email" name="phone" placeholder="phone" required="">
										<input type="text" class="name" name="idnumber" placeholder="ID / Passport Number" required="">
										<input type="password" class="password" name="password" placeholder="Password" required="">
										<input type="password" class="password" name="password2" placeholder="Confirm Password" required="">
										<ul class="w3agile">
											<li>
												<input type="checkbox" id="brand1" value="">
												<label for="brand1"><span></span>Remember me</label>
											</li>
										</ul>
										<input type="submit" value="Register">
										<div class="clear"></div>
									</form>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="agileinfo-recover">
								<h3>User Login</h3>
									<form action="" method="post">

										<select name="user">
											<option disabled selected>LOGIN AS..</option>
											<option  value="user">User</option>
											<option  value="agent">Agents</option>
											<option  value="superagent">Super Agent</option>
											<option  value="merchant">Merchant</option>
										</select>

										<br><br>

										<input type="text" class="email" name="email" placeholder="Email" required="">
										<input type="password" class="password" name="password" placeholder="Password" required="">
										<input type="submit" class="send" value="Login">
									</form>
								</div>
							</div>
							<div class="tab-1 resp-tab-content">
								<div class="agile-send-mail">
								<h3>Why you should have a PiKash account</h3>

								<ul>
									<li>Free to open.</li><br>
									<li>No minimum balance required.</li><br>
									<li>You can use this account to save your money and only use it when you really need to, or send
										money to someone else or make payments to participating PiKash outlets.</li><br>
									<li>The PiKash account is financially inclusive and cuts across various socio-economic
										classifications and grouping as well as literacy levels.</li>

								</ul>

							</div>
							</div>
						</div>
					</div>

					<div class="clear"></div>

				</div>

			</div>

		</div>

	</div>

	<div class="footer">
		<p> &copy; 2018 All Rights Reserved | <a href="http://poraehinvestment.com" target="_blank">Poraeh</a></p>
	</div>

</body>
</html>
