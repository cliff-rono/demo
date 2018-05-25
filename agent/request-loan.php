

<?php require_once "snippets/nav.php"; ?>

<style>
    .loan-application{
        border-radius: 0px;
        background:rgba(255,255,255,.8);
        border:none;
    }
    button.btn-default{
        background:#09d86c !important;
        border-radius: 0px;
        width:70%;
        display: block;
        margin-left:auto;
        margin-right:auto;
    }
    .loan-application h3{
        color:dodgerblue;
        margin-top:20px;
        margin-bottom:20px;
    }
    a.btn-default{
        background:dodgerblue;
        color:#ffffff;
        text-align:center;
        border:none;

    }
    a.btn-default:hover{
        background:dodgerblue;
        color:#000000;
        transition:.2s;
    }
</style>

<div class="clearfix"></div>
<div class="inner_content">
<div class="w3l_agileits_breadcrumbs">
<div class="w3l_agileits_breadcrumbs_inner">
<ul>
<li><a href="main-page.html">Home</a><span>«</span></li>
<li>Account <span>«</span></li>
<li>Loans</li>
</ul>
</div>
</div>
<div class="inner_content_w3_agile_info two_in">
<!--/forms-->
<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
    <div class="weather_w3_agile_info agile_info_shadow">
						  <div class="weather_w3_inner_info">

							     <div class="over_lay_agile">
								  <h3 class="w3_inner_tittle">Pikash Loans</h3>
						       	  <div class="row">
						       	      <div class="col-sm-4">
						       	          <div class="well loan-application">
						       	              <i class="fa fa-edit fa-2x"></i>

						       	              <h3>Apply Pikash Loans</h3>
						       	              <a href="loan.php" class="btn btn-default">Apply <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
						       	          </div>
						       	      </div>
						       	      <div class="col-sm-4">
						       	          <div class="well loan-application">
						       	              <i class="fa fa-check-square fa-2x"></i>

						       	              <h3>Request From Friend</h3>
						       	              <a href="" class="btn btn-default">Apply <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
						       	          </div>
						       	      </div>
						       	      <div class="col-sm-4">
						       	          <div class="well loan-application">
						       	              <i class="fa fa-list fa-2x"></i>

						       	              <h3>Loan History</h3>
						       	              <a href="loanhistory.php" class="btn btn-default">Apply <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
						       	          </div>
						       	      </div>
						       	  </div>
								</div>
							</div>
						</div>
    </div>
</div>

</div>
<!-- //inner_content_w3_agile_info-->
</div>
<!-- //inner_content-->
</div>
<!-- banner -->
<!--copy rights start here-->
<div class="copyrights">
<p>© 2018 Pikash </p>
</div>
<!--copy rights end here-->
<!-- js -->

<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script src="../js/modernizr.custom.js"></script>

<script src="../js/classie.js"></script>
<script src="../js/gnmenu.js"></script>
<script>
new gnMenu( document.getElementById( 'gn-menu' ) );
</script>

<!-- //js -->
<script src="../js/screenfull.js"></script>
<script>
$(function () {
$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

if (!screenfull.enabled) {
return false;
}



$('#toggle').click(function () {
screenfull.toggle($('#container')[0]);
});
});
</script>
<script src="../js/jquery.nicescroll.js"></script>
<script src="../js/scripts.js"></script>

<script type="text/javascript" src="../js/bootstrap-3.1.1.min.js"></script>


</body>
</html>
