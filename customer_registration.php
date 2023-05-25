<?php
session_start();
if (isset($_SESSION["uid"])) {
    header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon"/>
        <title>MSC-GARMENTS | Register</title>
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


                                    <li class=""><a href="#" class="dropdown-toggle function_for_user" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart function_for_user_span"></span> Cart <span class="badge">0</span></a>
                                        <div class="dropdown-menu" style="width:500px; margin-left: -540px">
                                            <div class="panel panel-success">
                                                <div class="panel-heading">
                                                    <div class="row">
                                                        <div class="col-md-3">Sequence number</div>
                                                        <div class="col-md-3">Items</div>
                                                        <div class="col-md-3">Product name</div>
                                                        <div class="col-md-3">Price</div>
                                                    </div>
                                                </div>
                                                <div class="panel-body"></div>
                                                <div class="panel-footer"></div>
                                            </div>
                                        </div>

                                    </li>
                                    <li>&nbsp</li>
                                    <li class="">
                                        <a href="#" class=" dropdown-toggle function_for_user" data-toggle="dropdown" >
                                            <span class=" glyphicon glyphicon-user function_for_user_span"></span> LogIn
                                        </a>
                                        <ul class="dropdown-menu loginup">
                                            <div style="width:300px;">
                                                <div class="panel panel-primary">
                                                    <h2 class="center">LogIn</h2> 
                                                    <div id="" class="panel-heading">
                                                        <label for="email">Email</label>
                                                        <input type="email" class="form-control" onclick="focus(this)" placeholder="Email" id="email" required/>
                                                        <label for="email">Password</label>
                                                        <input type="password" class="form-control" onclick="focus(this)" placeholder="Password" id="password" required/>
                                                        <p><br/></p>
                                                        <h6><a class="register" href="customer_registration.php"><i>Sign up for a new account</i></a></h6>
                                                        <input type="submit" class="btn btn-success" style="float:right;" id="login" value="Login">
                                                    </div>
                                                    <div style="height: 65px;" class="panel-footer" id="e_msg"></div>
                                                </div>
                                            </div>
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
                                     <li class="menuhover"><a href="">Register</a></li>
                                                               
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
        </header>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div style="
                         position: fixed;
                         margin-top: -196px;
                         margin-left: 1125px;
                         z-index: 9999;" class="col-md-2 col-xs-2" id="signup_msg">
                       
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="panel" style="border-color: #38761d;
                             height: 690px;">
                            <div class="panel-heading">
                                <h2 class="center">Sign up for a new account</h2>
                            </div>
                            <div class="panel-body">

                                <form method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="f_name">Name</label>
                                            <input type="text"
                                                   placeholder="Name"
                                                   id="f_name" 
                                                   name="f_name" 
                                                   class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="f_name">Surname</label>
                                            <input type="text" 
                                                   placeholder="Lastname"
                                                   id="l_name" 
                                                   name="l_name"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="email">Email</label>
                                            <input type="text" 
                                                   placeholder="Email"
                                                   id="email" 
                                                   name="email"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="password">Password</label>
                                            <input type="password"
                                                   placeholder="Enter password"
                                                   id="password" 
                                                   name="password"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="repassword">Re-enter password</label>
                                            <input type="password"
                                                   placeholder="Re-enter password"
                                                   id="repassword" 
                                                   name="repassword"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="mobile">Phone No</label>
                                            <input type="text" 
                                                   placeholder="Enter your phone number"
                                                   id="mobile" 
                                                   name="mobile"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address1">Permanent Address</label>
                                            <input type="text" 
                                                   placeholder="Address 1"
                                                   id="address1" 
                                                   name="address1"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="address2">Current Address</label>
                                            <input type="text" 
                                                   placeholder="Address 2"
                                                   id="address2" 
                                                   name="address2"
                                                   class="form-control">
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h5 class="center">By registering, you agree to
                                                <a class="red" href="#popup1">
                                                    Terms of Use
                                                </a>
                                                of MSC-GARMENTS</h5>
                                        </div>
                                    </div>
                                    <p><br/></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input style="float:right;" 
                                                   value="Log In" 
                                                   type="button" 
                                                   id="signup_button" 
                                                   name="signup_button"
                                                   class="btn btn-success btn-lg">
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </section>
        <footer id="footer">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <aside>
                                <h1 class="picture_video_footer element_footer fadeIn">Video</h1>
                                <iframe width='260' height='166' src='https://www.youtube.com/embed/4FAsiojyIuM' title='YouTube video player' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' allowfullscreen></iframe>
                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="element_footer fadeIn">Directory</h1>
                                <ul class="category">
                                    <li><a href="" class="category_boder black" ><i class=""></i>Home</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>About</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Preview</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Services</a></li>
                                    <li><a href="" class="category_boder black" ><i class=""></i>Organization</a></li>
                                     <li><a href="contact.php" class="category_boder black" ><i class=""></i>Contact</a></li>

                                </ul>

                            </aside>

                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="infor_footer element_footer"> We </h1>
                                <a>
                                    <img class="logo_footer" alt="" src="images/LOGO.png">    
                                </a>
                            </aside>
                        </div>

                        <div class="col-sm-3">
                            <aside>
                                <h1 class="contact_footer element_footer">Contact</h1>
                                <address>
                                    <h4 class="center test font_thuphap">MSC-GARMENTS</h4>
                                    <br>
                                    Panfilo M. Manguera Sr. Road Barangay Tanza, Boac, Marinduque, Philippines
                                    Contact Number:
                                    <h5><a class="phone black" href="tel:0904765341">Dr.Michael V.Capina: 09813757730</a></h5>
                                    <h5><a class="phone black" href="tel:01664328986">Production and BusinessAffairs(BAO): mscbao.marinduque@gmail.com</a></h5>
                                </address>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align: center; font-size: x-small">
              All rights reserved by MSC-GARMENTS.<br>
            In Cooperation with CICS 2023 <br>
            </div>
        </footer>

        <div id="popup1" class="overlay">
            <div class="popup">
                <h2>Terms and Use</h2>
                <img border="0" src="images/logoheader.png" width="200" height="40" alt="logo">
                <br>
                <a class="close" href="#" style="
                   margin-top: 66px;
                   margin-right: 73px;
                   ">&times;</a>
                <div style="overflow:auto;" class="content">

                    <table border="0" width="100%" cellspacing="0" id="table1">
                        <tbody><tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td bgcolor="#38761d">
                                </td>
                            </tr>
                            <tr bgcolor="#EAEAEA"><td><b>Terms of Use</b></td></tr>
                            <tr bgcolor="#EAEAEA"><td>
                                    1. About the user account: When registering an account, you should provide full information about your name, username, email,... ĐThis is not mandatory information, but when there are risks and losses in the future, we only accept cases that fill in the above information correctly and completely. Cases of missing or false information will not be resolved. This information will be used as a basis to support the resolution.
                                    If you provide any information that is untrue or inaccurate, or if we have grounds to suspect that such information is not truthful or inaccurate, we reserve the right to temporarily suspend for verification or terminate the use of your Account and refuse all current or future use of the Service (or any part thereof) without incurring any liability to you.<br>
                                    2. Account password: In the account management section, for one account, the user will have a password. The password is used to log in to Modern Bag. If the user forgets his password, he can use his email to retrieve the password. It is the user's responsibility to maintain the password and email on their own, if the password or e-tax is exposed in any way, Modern Bag will not be liable for any losses incurred.<br>
                                    3. MOrders: With one account, multiple products can be purchased. If you want bulk then you can contact us via email mscgarments@gmail.com.<br>
                                    4. Absolutely do not use any program, tool or other form to interfere with the website or change the structure of the website (hacks, cheats, bots ...). All violations when detected will be handled in accordance with the provisions of law.<br>
                                    5. It is strictly forbidden to distribute, disseminate or promote any activities aimed at interfering, destroying or infiltrating the data of the service as well as the server system.<br>
                                    6. When you discover an error in the website, please notify us via email mscgarments@gmail.com.<br>
                                    7. Do not commit any acts aimed at unauthorized login or attempt to log in unauthorized as well as cause damage to the server system of the service. All of these acts are considered acts of destroying the property of others and will deprive users of all rights and will be prosecuted before the law if necessary.<br>
                                    8. The purchase or sale of items or accounts of the service with real money or in kind on or off the website is not accepted. In the event of a breach of this provision, we do not have any responsibility for the restoration of the item or service. In addition, if we detect violating accounts, we will permanently block the account.<br>
                                    9. When communicating with other users, you must not harass, curse, annoy or engage in any uncultured behavior towards other players.<br>
                                    10. It is strictly forbidden to insult or ridicule others in any form (ridicule, disparagement, religious, gender, ethnic discrimination ...).<br>
                                    11. It is strictly forbidden to impersonate or intentionally mislead others into mistaking themselves as another user in the system. Any violations will be dealt with or account forfeiture.<br>
                                    12. MSC-GARMENTS | BAO | CICS - We will not be responsible for any system problems when you install and use the service.<br>
                                    13. When detecting violations such as using cheats, hacks, or other errors, Modern Bag reserves the right to use the information you provide when registering an account to transfer to the authorities for settlement in accordance with the law.<br>
                                    14. In force majeure cases such as electrical shorts, hardware and software damage, or natural disasters, etc., users must accept damages if any.<br>
                                    15. MSC-GARMENTS have the full right to delete, correct or change data and account information in case such person violates the above regulations without the consent of the user.<br>
                                    16. It is strictly forbidden to propagate, sabotage and distort the government, political institutions, and state policies... In case of detection, not only will the account be deleted, but we can also provide that person's information to the authorities for processing according to the law.<br>
                                </td></tr>
                            <tr>
                                <td bgcolor="#38761d">
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: x-small">
                                    All rights reserved by MSC-GARMENTS.<br>
                                    In Cooperation with CICS 2023 <br>
                                </td>
                            </tr>
                        </tbody></table>
                </div>
            </div>
        </div>

        <script src="js/jquery2.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="main.js"></script>

        <script src="js/jquery.js"></script>
        <script src="js/functions.js"></script>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
       <!--   <script src="assets/js/bootstrap.min.js"></script>     -->
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery.li-scroller.1.0.js"></script>
        <script src="assets/js/jquery.newsTicker.min.js"></script>
        <script src="assets/js/jquery.fancybox.pack.js"></script>
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/preloader.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/slider.min.js"></script>
        <script type="text/javascript">
                                                            function Focus(object) {
                                                                object.value = "Test";
                                                            }

                                                            function Blur(object) {
                                                                if (object.value == "")
                                                                    object.value = "Enter keywords";
                                                            }
        </script>
    </body>
</html>



















