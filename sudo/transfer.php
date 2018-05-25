<!DOCTYPE html>
<html lang="zxx">

<head>
    <title></title>
    <!-- custom-theme -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //custom-theme -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/component.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome-icons -->
    <link href="../css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <style>
        div.form-group select,
        div.form-group input {
            width: 100%;
            padding: 10px;
            height: auto;
            border: 1px solid dodgerblue;
        }

        div.form-group select option {
            padding: 10px;
            border-bottom: 1px ridge #efefef;
        }

        button.btn-default {
            background: #09d86c !important;
            border-radius: 0px;
            width: 70%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <!-- banner -->
    <div class="wthree_agile_admin_info">
        <!-- /w3_agileits_top_nav-->
        <!-- /nav-->
        <?php require_once "nav.php"; ?>

        <div class="clearfix"></div>
        <div class="inner_content">
            <div class="w3l_agileits_breadcrumbs">
                <div class="w3l_agileits_breadcrumbs_inner">
                    <ul>
                        <li><a href="index.php">Home</a><span>«</span></li>
                        <li>Account <span>«</span></li>
                        <li>Transfer Money</li>
                    </ul>
                </div>
            </div>
            <!-- //breadcrumbs -->

            <div class="inner_content_w3_agile_info two_in">
                <!--<h2 class="w3_inner_tittle">Inputs</h2>-->

                <!--/forms-->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="forms-main_agileits">

                            <div class="graph-form agile_info_shadow">
                                <!--<h3 class="w3_inner_tittle two">Basic Form </h3>-->
                                <div class="form-body">
                                    <form action="server-side/remmitance.php" method="post" id="transferForm">
                                        <div class="form-group"> <label for="exampleInputEmail1">Transfer From Account</label>
                                            <select name="account" id="">
                                                <option selected disabled>Select Account</option>
                                                <option value="pikash">Default (PiKash)</option>
                                                <option value="equity">Equity</option>
                                                <option value="kcb">KCB</option>
                                                <option value="cop">Co-Operative</option>
                                            </select>
                                        </div>
                                        <div class="form-group"> <label for="exampleInputEmail1">Receiving Currency</label>
                                            <select name="currency" id="">
                                              <option selected disabled>Select Currency</option>
                                                <option value="KES">Kenyan Shillings</option>
                                                <option value="USD">US Dollar</option>
                                                <option value="GBP">Sterling Pound</option>
                                                <option value="EUR">EURO</option>
                                            </select>
                                        </div>
                                        <div class="form-group"> <label for="exampleInputEmail1">Transfer To</label>
                                            <input type="text" name="recipient" class="form-control" id="" placeholder="Receipient ID">
                                        </div>
                                        <div class="form-group"> <label for="exampleInputPassword1">Amount To Transfer</label> <input type="text" name="amount" class="form-control" id="" placeholder="Amount"> </div>

                                        <button type="submit" class="btn btn-default">Submit  <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></button> </form>
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

      <?php
        include('footer.php');
    ?>
