<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
<style>
    *{
        font-family: 'Tajawal', sans-serif;
    }
    body{
        background: #e9eaed;
    }
    .top-container{
        padding-left:0px;
        padding-right:0px;
    }  
    .top-nav,.form-block{
        border-radius:0px;
        background:#ffffff;
        box-shadow: 1px 1px 4px rgba(0,0,0,.21);
        border:none;
    }
</style>
</head>
<body>
   <div class="container-fluid top-container">
       <div class="well top-nav">
           <h4>LOGO</h4>
       </div>
   </div>
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <h3 class="prompt">Pikash Agent Registration</h3>
             <div class="row">
    <form class="col s12">
     <div class="well form-block">
          <div class="row">
        <div class="input-field col s12 m4">
          <input placeholder="Registration Name" id="" type="text" class="validate">
          <label for="first_name">Branch/Registration Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input type="text" class="datepicker" placeholder="Date">
          <label for="last_name"></label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Branch/Agent Code" id="" type="text" class="validate">
          <label for="first_name">Branch/Agent Code</label>
        </div>
      </div>
     </div>
      
        <div class="well form-block">
            <div class="row">
            
        <div class="input-field col s12 m4">
          <input placeholder="First Name" id="" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Middle Name" id="" type="text" class="validate">
          <label for="first_name">Middle Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Last Name" id="" type="text" class="validate">
          <label for="first_name">Last Name</label>
        </div>
        <div class="input-field col s6 m3">
        <label>
        <input class="with-gap" name="gender" type="radio"  />
        <span>Mr</span>
      </label>
      </div>
       <div class="input-field col s6 m3">
        <label>
        <input class="with-gap" name="gender" type="radio"  />
        <span>Mrs</span>
      </label> 
      </div>
       <div class="input-field col s6 m3">
        <label>
        <input class="with-gap" name="gender" type="radio"  />
        <span>Miss</span>
      </label> 
      </div>
       <div class="input-field col s6 m3">
        <label>
        <input class="with-gap" name="gender" type="radio"  />
        <span>Other</span>
      </label> 
      </div>
      </div>
        </div>
     <div class="well form-block">
          <div class="row">
        <div class="input-field col s12 m6">
          <input placeholder="ID Number/Passport" id="" type="text" class="validate">
          <label for="first_name">ID Number/Passport</label>
        </div>
        <div class="input-field col s12 m6">
          <input type="text" class="datepicker" placeholder="Passport Expiry Date">
          <label for="Passport Expiry Date"></label>
        </div>
          <div class="input-field col s12 m4">
          <input placeholder="Postal Address" id="" type="text" class="validate">
          <label for="first_name">Postal Address</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Postal Code" id="" type="text" class="validate">
          <label for="first_name">Postal Code</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Town" id="" type="text" class="validate">
          <label for="first_name">Town</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Physical Residential Address" id="" type="text" class="validate">
          <label for="first_name">House No./Estate/Building/Road/Street</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Telephone Number" id="" type="text" class="validate">
          <label for="first_name">Telephone Number</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Office Telephone Number" id="" type="text" class="validate">
          <label for="first_name">Office Telephone Number</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Email Address" id="" type="email" class="validate">
          <label for="first_name">Email Address</label>
        </div>
        <div class="input-field col s12">
        <textarea id="textarea1" class="materialize-textarea"></textarea>
        <label for="textarea1">Nature Of Occupation or Business</label>
    </div>
      </div>
     </div>
<div class="well form-block">
    <div class="row">

    <div class="input-field col s6">
        <input placeholder="Name of Employer" id="" type="text" class="validate">
        <label for="textarea1">Name of Employer</label>
    </div>
    <div class="input-field col s6">
        <input placeholder="Designation" id="" type="text" class="validate">
        <label for="textarea1">Designation</label>
    </div>
    <div class="input-field col s12">
          <input placeholder="Physical Office Address" id="" type="text" class="validate">
          <label for="first_name">Physical Office Address</label>
        </div>
              <div class="input-field col s12 m4">
          <input placeholder="Postal Address" id="" type="text" class="validate">
          <label for="first_name">Postal Address</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Postal Code" id="" type="text" class="validate">
          <label for="first_name">Postal Code</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Town" id="" type="text" class="validate">
          <label for="first_name">Town</label>
        </div>
</div>
</div>
<div class="well form-block">
            <div class="row">
          <div class="input-field col s12 m4">
          <input placeholder="Bank Account Name" id="" type="text" class="validate">
          <label for="first_name">Bank Account Name</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Account Number" id="" type="text" class="validate">
          <label for="first_name">Account Number</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Bank Branch" id="" type="text" class="validate">
          <label for="first_name">Branch</label>
        </div>
      </div>
</div>
          <div class="well form-block">
               <div class="row">
               <p class="helper">
                   You can receive funds sent through money transfer operators directly into your Pikash account. Please tick against each box if you do NOT want this service on your Pikash account.
               </p>
                <div class="input-field col s6 m3">
                   <label>
                    <input type="checkbox" />
                    <span>Western Union</span>
                  </label>
              </div>
              <div class="input-field col s6 m3">
                   <label>
                    <input type="checkbox" />
                    <span>Money Gram</span>
                  </label>
              </div>
              <div class="input-field col s6 m3">
                   <label>
                    <input type="checkbox" />
                    <span>Xpress Money</span>
                  </label>
              </div>
           </div>
          </div>
      
        <div class="well form-block">
            <div class="row">
          <div class="input-field col s12 m4">
          <input placeholder="Next of Kin" id="" type="text" class="validate">
          <label for="first_name">Next of Kin</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Telephone" id="" type="text" class="validate">
          <label for="first_name">Next of Kin Tel</label>
        </div>
        <div class="input-field col s12 m4">
          <input placeholder="Relationship" id="" type="text" class="validate">
          <label for="first_name">Relationship</label>
        </div>
      </div>
        </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
              </button>
         
            </form>
          </div>
        </div>
    </div>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
<script type="application/javascript">
  $(document).ready(function(){
    $('.datepicker').datepicker({
        format:'dd-mm-yyyy'
    });
  });
    </script>
    
</body>
</html>