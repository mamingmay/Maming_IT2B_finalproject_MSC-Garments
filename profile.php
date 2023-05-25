<?php
session_start();
if (!isset($_SESSION["uid"])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>MSC-GARMENTS | <?php echo "Hello  " . $_SESSION["name"]; ?></title>
        <?php
        include 'cssfile.php';
        ?>
        <style>
            @media screen and (max-width:480px){
                #search{width:80%;}
                #search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
            }
        </style>
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
                                      <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.facebook.com/marinduquestatecollege/"><i class="fa fa-google-plus"></i></a></li>

                       


                                    <li><a style="height: 37px;" href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-shopping-cart function_for_user_span">
                                            </span>Cart<span class="badge"> 0</span></a>
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
                                                        <div class="row">
                                                                <div class="col-md-3">Product.No</div>
                                                                <div class="col-md-3">Product Image</div>
                                                                <div class="col-md-3">Product Name</div>
                                                                <div class="col-md-3">Price in PHP .</div>
                                                        </div>-->
                                                    </div>
                                                </div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>&nbsp</li>
                                    <li>
                                        <a style="height: 37px;" href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="glyphicon glyphicon-user function_for_user_span"></span><?php echo " Hello, " . $_SESSION["name"]; ?>
                                        </a>
                                        <ul style="height: 85px;" class="dropdown-menu">
                                            <li>
                                                <a href="cart.php" style="font-size: 17px; text-decoration:none; color:green;">
                                                    <span class="fa fa-archive"> Cart
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#popup1" style="font-size: 17px; text-decoration:none; color:green;">
                                                    <span class="fa fa-refresh"> Change password
                                                </a>
                                            </li>
                                            <li>
                                                <a href="logout.php" style="font-size: 17px; text-decoration:none; color:green;">
                                                    <span class="fa fa-reply"> Sign Out
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
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
                        <div class="col-sm-6">
                                        <div class="shop-menu pull-right">
                                                            <ul class="nav navbar-nav">
                            
                            
                                                            </ul>
                                                        </div>
                        </div>
                        <div class="col-sm-2">

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
                                      </li>
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
        </header>
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-xs-12">
                        <div id="get_category" style="border: 0.1px solid #38761d;">
                        </div>
                        <!--<div class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><h4>Categories</h4></a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                        </div> -->
                        <div id="get_brand" style="border: 0.1px solid #38761d;">
                        </div>
                        <!--<div class="nav nav-pills nav-stacked">
                                <li class="active"><a href="#"><h4>Brand</h4></a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                                <li><a href="#">Categories</a></li>
                        </div> -->
                    </div>
                    <div class="col-md-9 col-xs-12">	
                        <div class="row">
                            <div style="position: fixed;
                                 margin-left: 833px;
                                 margin-top: -196px;
                                 z-index: 9999;" class="col-md-2 col-xs-2" id="product_msg">
                            </div>
                        </div>
                        <div class="row">
                        <h2 class="title text-center">MSC-GARMENTS</h2>
                        <div class="col-md-12 col-xs-12">

                            <div id="wrap-slider" style="height: 350px; width: 847px;">
                                <div id="slider">
                                    <?php include 'Slider.php'; ?>
                                </div><!-- end #slider -->
                            </div><!-- end #wrap-slider  -->
                            <span id="prev-slide">Previous</span><span id="next-slide">Next</span>
                        </div>
                    </div>      
                    <br><br>
                        <div class="panel panel-info" id="scroll">
                            <div class="panel-heading">Products</div>
                            <div class="panel-body">
                                <div id="get_product">
                                    <!--Here we get product jquery Ajax Request-->
                                </div>
                                <div class="col-md-4">
                                        <div class="panel panel-info">
                                                
                                        </div>
                                </div>
                            </div>
                            <div class="panel-footer">Products offered by MSC-GARMENTS</div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <ul class="pagination" id="pageno">
                                <li><a href="#">1</a></li>
                            </ul>
                        </center>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'footer.php'; ?>
        <div id="popup1" class="overlay">
            <div class="popup_changepassword">
                <h2>Change password</h2>
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form method="POST">
                        <label for="">Old password</label>
                        <input type="password" class="form-control" placeholder="Enter the old password" id="oldpass" name="oldpass" required/>
                        <label for="">New password</label>
                        <input type="password" class="form-control" placeholder="Enter the new password" id="newpass" name="newpass" required/>
                        <label for="">Re-enter the new password</label>
                        <input type="password" class="form-control" placeholder="Re-enter the new password" id="retypenewpass" name="retypenewpass" required/>
                        <p><br/></p>
                        <div id="changepass_message"></div>
                        <input type="button" class="btn btn-success" style="float:right;" id="change" name="change" value="Change password">
                    </form>
                </div>
            </div>
        </div>
        <?php include 'jsfile.php'; ?>
    </body>
</html>
















































