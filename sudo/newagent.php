


<?php
    include('header.php');
?>






<div class="pages_agile_info_w3l">
  <!-- /login -->
     <div class="over_lay_agile_pages_w3ls two">
    <div class="registration">

            <div class="signin-form profile">
              <h2>Register A New Agent</h2>
              <div class="login-form">
                <form action="#" method="post">
                  <input type="text" name="name" placeholder="Agent Name" required=""/>
                    <input type="email" name="email" placeholder="Email Address" required=""/>
                      <input type="text" name="phone" placeholder="Phone Number" required=""/>

                      <select name="location">
      									<option disabled selected>Select Location</option>
      									<option  value="nairobiwest">Nairobi West</option>
      									<option  value="nairobieast">Nairobi East</option>
      									<option  value="mombasaroad">Mombasa Road</option>
                        <option  value="CBD">CBD</option>
                        <option  value=""></option>
                        <option  value=""></option>
      								</select>

                      <input type="password" name="password" placeholder="Alocate Password" required=""/>
                      <input type="password" name="password2" placeholder="Confirm Password" required=""/>

                  <div class="tp">
                    <input type="submit" value="REGISTER">
                  </div>
                </form>
              </div>

              <p>By clicking Register, <a href="#">  I agree to your terms</a></p>

              <h6><a href="index.php">Back To Home</a><h6>
           </div>
       </div>
     </div>
   </div>

       <?php
         include('footer.php');
        ?>
