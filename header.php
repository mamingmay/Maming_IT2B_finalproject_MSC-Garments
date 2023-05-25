
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>MSC-Garments | Feedback </title>
        <?php
        include 'cssfile.php';
        ?>
    </head>
    <body>
        <header id="header"><!--header-->
            <div class="header_top navbar-fixed-top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="index.php"><i class="fa fa-home"></i> MSC-GARMENTS</a></li>
                                    <li><a href="tel:+84123456789"><i class="fa fa-phone"></i> 09813757730 </a></li>
                                    <li><a href="mailto:ahkk9866@gmail.com"><i class="fa fa-envelope"></i> mscgarments@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                     <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-google-plus"></i></a></li>

                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>Cart<span class="badge"> 0</span></a>
                                        <div class="dropdown-menu function_for_user" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3">Sequence Number</div>
                                                        <div class="col-md-3 col-xs-3">Items</div>
                                                        <div class="col-md-3 col-xs-3">Product Name</div>
                                                        <div class="col-md-3 col-xs-3">Price</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product">
                                                        <div class="row">
                                                                <div class="col-md-3">Sl.No</div>
                                                                <div class="col-md-3">Product Image</div>
                                                                <div class="col-md-3">Product Name</div>
                                                                <div class="col-md-3">Price in PHP.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp</li>
                                    <li><a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user function_for_user_span"></span></a>
                                        <ul style="height: 130px;" class="dropdown-menu">

                                            <li><a href="cart.php" style="font-size: 17px; text-decoration:none; color:#38761d;"><span class="fa fa-archive"> Cart</a></li>
                                            <li><a href="" style="font-size: 17px; text-decoration:none; color:#38761d;"><span class="fa fa-refresh"> Change password</a></li>

                                            <li><a href="logout.php" style="font-size: 17px; text-decoration:none; color:#38761d;"><span class="fa fa-reply"> Sign Out</a></li>    </li>
                       <li><a href="customer_registration.php" class="function_for_user"<span class="glyphicon glyphicon-user function_for_user_span"></span>Register</a></li>
                                        </ul>
                                

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header_top-->

            <div class="header-middle"><!--header-middle-->
                <div class="container">
                    <div class="row" style="
                         margin-top: 37px;
                         ">
                        <div class="col-sm-4">
                            <div class="logo pull-left">
                                <a href="index.php"><img alt="" src="images/logoheader.png"></a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="shop-menu pull-right">
                                <ul class="nav navbar-nav">


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/header-middle-->

            <div class="header-bottom"><!--header-bottom-->
                <div class="container">
                    <div class="row menu">
                        <div class="col-sm-8">
                            <div class="navbar-header">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class=" mainmenu pull-left">
                                 <ul class="nav navbar-nav collapse navbar-collapse">
                                    <li class="menuhover"><a  href="index.php">Home</a></li>
                                    <li class="menuhover"><a href="">About</a></li>
                                    <li class="menuhover"><a href="https://www.mscmarinduque.edu.ph/">Preview</a></li>
                                    <li class="menuhover"><a href="">Products </a></li>
                                    <li class="menuhover"><a href="">Services</a></li>
                                    <li class="menuhover"><a href="">Organization</a></li>
                                    <li class="menuhover"><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4">
                                            <div class="">
                                                            <input type="text" class="form-control" id="search" >
                                                        </div>
                                                        <div>
                                                            <input type="button" class="btn btn-primary" id="search_btn" value="Search">
                                                        </div>
                        </div>
                    </div>
                </div>
            </div>
       </head>