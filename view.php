<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>Cart</title>
        <?php
        include 'cssfile.php';
        ?>

    </head>
    <body>
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        <header id="header"><!--header-->
            <div class="header_top navbar-fixed-top"><!--header_top-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 ">
                            <div class="contactinfo">
                                <ul class="nav nav-pills">
                                    <li><a href="index.php"><i class="fa fa-home"></i> MSC-GARMENTS</a></li>
                                    <li><a href="tel:+84123456789"><i class="fa fa-phone"></i> 09813757730</a></li>
                                    <li><a href="mailto:ahkk9866@gmail.com"><i class="fa fa-envelope"></i> mscgarments@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="social-icons pull-right">
                                <ul class="nav navbar-nav">
                                    <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                    <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                    <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href=""><i class="fa fa-google-plus"></i></a></li>

                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span>Cart<span class="badge"> 0</span></a>
                                        <div class="dropdown-menu function_for_user" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3 col-xs-3">Sequence number</div>
                                                        <div class="col-md-3 col-xs-3">Items</div>
                                                        <div class="col-md-3 col-xs-3">Product name</div>
                                                        <div class="col-md-3 col-xs-3">Price</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div id="cart_product">
                                                        <!--<div class="row">
                                                                <div class="col-md-3">Product No. 1</div>
                                                                <div class="col-md-3">Product Image</div>
                                                                <div class="col-md-3">Product Name</div>
                                                                <div class="col-md-3">Price in PHP.</div>
                                                        </div>-->
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

                                            <li><a href="logout.php" style="font-size: 17px; text-decoration:none; color:#38761d;"><span class="fa fa-reply">Sign Out</a></li>
                                        </ul>
                                    </li>
        <!--                                    <li><a href="customer_registration.php" class="function_for_user"<span class="glyphicon glyphicon-user function_for_user_span"></span>Register</a></li>-->

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
                                    <li class="menuhover"><a href="">Preview</a></li>
                                    <li class="menuhover"><a href="">Products </a></li>
                                    <li class="menuhover"><a href="">Services</a></li>
                                    <li class="menuhover"><a href="">Organization</a></li>
                                    <li class="menuhover"><a href="contact.php">Contact</a>
                                      <li class="menuhover"><a href="cart.php">Cart</a></li></li>
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
        <a class="close" href="#">&times;</a>
        <div class="container">
            <div class="card">
                <div class="container-fliud">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            <div class="preview-pic tab-content">
                                <div class="tab-pane active" style="width: 400px;height: 400px" id="pic-2"><img src="images/online.jpeg" /></div>
                            </div>
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">Product name</h3>
                            <div class="rating">
                                <div class="stars">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <span class="review-no">Reviews</span>
                            </div>
                            <p class="product-description">Putting the products first in this Uniform  review, we’re looking at the lines that not only compare to other fabrics on the market but the pieces completely unique to this department. </p>
                            <h4 class="price">Price: <span>PHP500</span></h4>

                            <div class="product--quantity">
                                <h5 class="quantity">Product Category:
                            </div>
                            <div class="product--quantity">
                                <h5 class="quantity">Trademark:
                            </div>
                            <div class="product--quantity">
                                <h5 class="quantity">Amount:
                                    <input class="quantity" type="number" placeholder="quantity" min="1" max="10" value="1"></input>
                            </div>
                            <div style="height:100px;"></div>
                            <div class="action">
                                <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                                <button id="product" style="float: right;" class="add-to-cart btn-md btn-default" type="button">Buy Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include('footer.php'); ?>
<?php
include 'jsfile.php';
?>