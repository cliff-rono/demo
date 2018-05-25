<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>PIKASH</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="assets/materialize/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/materialize/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="assets/materialize/css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo"><img src="assets/images/logo.png" alt="logo" style="width:15%; height:15%;" ></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="register.php">How It Works</a></li>
        <li><a href="register.php">FAQs</a></li>
        <li><a href="register.php" class="waves-effect waves-light btn-small"><i class="material-icons left">assignment_ind</i>Register</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="">Home</a></li>
        <li><a href="#">How It Works</a></li>
        <li><a href="#">FAQs</a></li>
        <li><a href="register.php" class="waves-effect waves-light btn-small"><i class="material-icons left">assignment_ind</i>Register</a></li>
      </ul>
      <a href="register.php" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">

			<div class="row">
				<div class="col s12 m6">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Fast | Convinient | Secure</h1>
        <div class="row center">
          <h3>Fast and efficient way of transacting. </h3>
        </div>
        <div class="row center">
          <a href="register.php" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Join</a>
        </div>
        <br><br>
      </div>

			<div class="col s12 m5" style="background-color:black; opacity:0.9;">
        <br><br>
        <p><b>Transfer Rates</b></p>
        <div class="row center">

					<form class="col s12 frConverter">
						<div class="row">

								<div class="input-field col s4">
                  <select name="base_currency">
  									<option disabled selected>Select</option>
  									<option name="default_base" value="usd">US-Dollar</option>
  									<option name="default_base" value="kes">Kenyan Shilling</option>
  									<option name="default_base" value="gbp">UK Pound</option>
                    <option name="default_base" value="eur">EURO</option>
                    <option name="default_base" value="aud">Australian Dollar</option>
                    <option name="default_base" value="jpy">Japanese Yuan</option>
  								</select>
								<label>Sending Currency</label>
							</div>

              <div class="input-field col s6">
			          <input id="amount" type="text" name="base_value" size="5" value="0" class="validate">
			          <label for="amount">Amount Sending</label>
								</div>

						</div>

						<div class="row">

								<div class="input-field col s4">
								<select name="target_currency" onChange="frExCalc();">
									<option disabled selected>Select</option>
									<option name="default_target" value="usd">US-Dollar</option>
									<option name="default_target" value="kes">Kenyan Shilling</option>
									<option name="default_target" value="gbp">UK Pound</option>
                  <option name="default_target" value="eur">EURO</option>
                  <option name="default_target" value="aud">Australian Dollar</option>
                  <option name="default_target" value="jpy">Japanese Yuan</option>
								</select>
								<label>Receiving Currency</label>
							</div>
              <div class="input-field col s6">
              <input  name="target_value" size="5" value="0" type="text" class="validate" >
              <label for="received">Amount Received</label>
            </div>
						</div>

					</form>

					<div>


        </div>

        <br><br>
      </div>

		</div>
  </div>
    </div>
    <div class="parallax"><img src="assets/materialize/images/background1.jpg" alt="Background" ></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">money</i></h2>
            <h5 class="center">Pay Bills</h5>

            <p class="light"> We allow you to pay your bills Internationally fast and securely. </p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">import_export</i></h2>
            <h5 class="center">Remmitance</h5>

            <p class="light">Send and receive money locally and internationally. With its inbuilt currency converter,
              Pikash allows you to receive funds in the currency of whichever country you are in.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">system_update</i></h2>
            <h5 class="center">Loading Services</h5>

            <p class="light"> Pikash allows you to load your e-wallets and allows you to load airtime on any network.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">

          <div class="row">
            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">group</i></h2>
                <h5 class="center">ACTIVE USERS</h5>
                <h1>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='10267'
                data-delay='60' data-increment="50">10,267
                </div>
                </h1>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">import_export</i></h2>
                <h5 class="center">TRANSACTIONS</h5>
                <h1>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='6345'
                data-delay='20' data-increment="50">6,345
                </div>
                </h1>
              </div>
            </div>

            <div class="col s12 m4">
              <div class="icon-block">
                <h2 class="center brown-text"><i class="material-icons">system_update</i></h2>
                <h5 class="center">AMMOUNT TRANSFERED TODAY</h5>

                <h1>
                <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='20356678'
                data-delay='10' data-increment="90000">20,356,678
                </div>
                </h1>

              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <div class="parallax"><img src="assets/materialize/images/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>MORE</h4>
          <p class="left-align light">
            PIKASH is a multi-accessible financial transaction mobile/e-payment platform that provides a powerful set of tools for efficient, effective, secure, and accessible banking and payment services.
            It uses advanced technology to bring a solution to financial inclusion problems by providing the first true opportunity for many unbanked citizen to get on to a formal “banking ladder” with real benefits.
            It goes beyond the basic mobile payment service by explicitly seeking to add financial services which meets the real needs of the unbanked population.
          </p>
        </div>
      </div>

    </div>
  </div>



  <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Our Mission</h5>
          <p class="grey-text text-lighten-4">
            To be the leading Remittance Company locally and internationally
            in position of the number of satisfied customers served and the number of outlets worldwide.
          </p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Partners</h5>
          <ul>
            <li><a class="white-text" href="#!">KCB</a></li>
            <li><a class="white-text" href="#!">M-Pesa</a></li>
            <li><a class="white-text" href="#!">T-Kash</a></li>
            <li><a class="white-text" href="#!">Co-Operative Bank</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Countries</h5>
          <ul>
            <li><a class="white-text" href="#!">Kenya </a></li>
            <li><a class="white-text" href="#!">Uganda</a></li>
            <li><a class="white-text" href="#!">South Africa</a></li>
            <li><a class="white-text" href="#!">Canada</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright" style="background-color:#000; text-align:center;">
      <div class="container">&copy; 2018 All Rights Reserved | <a href="http://poraehinvestment.com" target="_blank">Poraeh</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="assets/materialize/js/materialize.js"></script>
  <script src="assets/materialize/js/init.js"></script>
  <script src="assets/js/numscroller-1.0.js"></script>
  <script src="assets/js/converter.js"></script>

  <script>

  $(document).ready(function(){
  $('select').formSelect();
});

  </script>

  </body>
</html>
