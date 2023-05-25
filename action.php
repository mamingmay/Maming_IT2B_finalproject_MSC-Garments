<?php

session_start();
include "db.php";

//Get categories from database
if (isset($_POST["category"])) {
    $category_query = "SELECT * FROM categories";                               //SQL Querry
    $run_query = mysqli_query($con, $category_query)
            or die(mysqli_error($con));
    echo"
            <div class='nav nav-pills nav-stacked'>
                <li class='active '>
                    <a>
                        <h4 class='sizeactive'>OFFERS</h4>
                    </a>
                </li>
            ";
    if (mysqli_num_rows($run_query) > 0) {                                      //Loop
        while ($row = mysqli_fetch_array($run_query)) {
            $cid = $row["cat_id"];
            $cat_name = $row["cat_title"];
            echo"
                    <li>
                        <a href='#' class='category' cid='$cid'>$cat_name</a>
                    </li>
                ";
        }
        echo "</div>";
    }
}

//Get brands from database
if (isset($_POST["brand"])) {
    $brand_query = "SELECT * FROM brands";                                      //SQL Quesrry
    $run_query = mysqli_query($con, $brand_query);
    echo"
            <div class='nav nav-pills nav-stacked'>
                <li class='active '>
                    <a>
                        <h4 class='sizeactive'>Category</h4>
                    </a>
                </li>
            ";
    if (mysqli_num_rows($run_query) > 0) {                                      //Loop
        while ($row = mysqli_fetch_array($run_query)) {
            $bid = $row["brand_id"];
            $brand_name = $row["brand_title"];
            echo"
                    <li>
                        <a href='#' class='selectBrand' bid='$bid'>$brand_name</a>
                    </li>
                ";
        }
        echo "</div>";
    }
}



if (isset($_POST["prohot"])) {
    $brand_query = "SELECT * FROM prohot";                                      //SQL Quesrry
    $run_query = mysqli_query($con, $brand_query);

    if (mysqli_num_rows($run_query) > 0) {                                      //Loop
        while ($row = mysqli_fetch_array($run_query)) {
            $bid = $row["brand_id"];
            $brand_name = $row["brand_title"];
            echo"
                    <li>
                        <a href='#' class='selectBrand' bid='$bid'>$brand_name</a>
                    </li>
                ";
        }
        echo "</div>";
    }
}


//Get product and then division(phân chia) via page   
if (isset($_POST["page"])) {
    $sql = "SELECT * FROM products";                                            //SQL Querry
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    $pageno = ceil($count / 9);                                                 // 9 product/page
    for ($i = 1; $i <= $pageno; $i++) {
        echo "
                            <li><a href='#' page='$i' id='page'>$i</a></li>
                    ";
    }
}

//Get products from database
if (isset($_POST["getProduct"])) {
    $limit = 9;                                                                 // 9 product/page
    if (isset($_POST["setPage"])) {
        $pageno = $_POST["pageNumber"];
        $start = ($pageno * $limit) - $limit;
    } else {
        $start = 0;
    }
    $product_query = "SELECT * FROM products LIMIT $start,$limit";              //SQL querry
    $run_query = mysqli_query($con, $product_query);
    if (mysqli_num_rows($run_query) > 0) {
        while ($row = mysqli_fetch_array($run_query)) {
            $pro_id = $row['product_id'];
            $pro_cat = $row['product_cat'];
            $pro_brand = $row['product_brand'];
            $pro_title = $row['product_title'];
            $pro_price = $row['product_price'];
            $pro_image = $row['product_image'];
            $pro_des = $row['product_desc'];
            echo"
                <div class='col-md-4'>
        <div class='panel panel-info' style='height: 362px;'>
            <ul class='grid cs-style-4'>
                <li style='width: 250px; margin-left: -24px; margin-top: -25px;'>
                    <figure>
                        <div><img style='width: 210px; height:215px;' src='product_images/$pro_image' alt=''></div>
                        <figcaption>
                            <h4 style='color: yellow;' class='center'>$pro_title</h4>
                            <h3 class='center lightyellow style='font-size: 15px;'>Price: $pro_price PHP </h3><br>
                            <h5 style='color:  lightyellow;' class='center'>Describe: $pro_des</h5>
                        </figcaption>
                    </figure>
                </li>
                <h4 class='center' style='margin-top: -13px;'>$pro_title</h4>
                <h3 class='center lightyellow' style='    margin-top: 0px; font-size: 15px;'>Price: $pro_price PHP </h3><br>
                <button 
                                pid='$pro_id' 
                                id='product' style='margin-left: 0px;
                                width: 93px;
                                height: 36px;
                                font-size: 15px;
                                background: #38761d;
                                color: #fff;
                                border: 1px solid #ffffff;
                                border-radius: 5px;' 
                                class='fa fa-shopping-cart'> 
                                Buy Now
                            </button>
                <a href='product-detail.php?id=$pro_id'> 
                <button 
                                pid='$pro_id' 
                                id='' style='margin-left: 0px;
                                width: 90px;
                                height: 36px;
                                float: right;
                                font-size: 15px;
                                background:#38761d;
                                color: #fff;
                                border: 1px solid #ffffff;
                                border-radius: 5px;' 
                                class='fa fa-shopping-cart'> 
                                Detail
                            </button></a>
            </ul>
            
        </div>
    </div>
    
<div style='z-index: 1;' id='detail' class='overlay'>
        <div class='popup_changepassword'>
            <h2>Detail</h2>
            <a class='close' href='profile.php'>&times;</a>
            
            <div class='content'>
                <div><img style='width: 210px; height:215px;' src='product_images/$pro_image' alt=''></div><br>
                <label>Product name: <b style='color: #fe980f'>$pro_title</b></label><br>
                <label>Price: <b style='color: #fe980f'>$pro_price PHP</b></label><br>
                <label>Describe: <b style='color: #fe980f'>$pro_des</b></label><br>
            </div>
        </div>
    </div>


            ";
        }
    }
}

//Get products via search or categories/brand when you click mouse
if (isset($_POST["get_seleted_Category"]) ||
        isset($_POST["selectBrand"]) ||
        isset($_POST["search"])) {
    if (isset($_POST["get_seleted_Category"])) {
        $id = $_POST["cat_id"];
        $sql = "SELECT * FROM products WHERE product_cat = '$id'";              //SQL querry
    } else if (isset($_POST["selectBrand"])) {
        $id = $_POST["brand_id"];
        $sql = "SELECT * FROM products WHERE product_brand = '$id'";            //SQL querry
    } else {
        $keyword = $_POST["keyword"];
        $sql = "SELECT * FROM products WHERE product_keywords LIKE '%$keyword%'"; //SQL querry
    }

    $run_query = mysqli_query($con, $sql);
    while ($row = mysqli_fetch_array($run_query)) {
        $pro_id = $row['product_id'];
        $pro_cat = $row['product_cat'];
        $pro_brand = $row['product_brand'];
        $pro_title = $row['product_title'];
        $pro_price = $row['product_price'];
        $pro_image = $row['product_image'];
        $pro_des = $row['product_desc'];
        echo "
             <div class='col-md-4'>
        <div class='panel panel-info' style='height: 362px;'>
            <ul class='grid cs-style-4'>
                <li style='width: 250px; margin-left: -24px; margin-top: -25px;'>
                    <figure>
                        <div><img style='width: 210px; height:215px;' src='product_images/$pro_image' alt=''></div>
                         <figcaption>
                            <h4 style='color: yellow;' class='center'>$pro_title</h4>
                            <h3 class='center lightyellow style='font-size: 15px;'>Price: $pro_price PHP </h3><br>
                            <h5 style='color:  lightyellow;' class='center'>Describe: $pro_des</h5>
                        </figcaption>
                    </figure>
                </li>
                <h4 class='center' style='margin-top: -13px;'>$pro_title</h4>
                <h3 class='center lightyellow' style='    margin-top: 0px; font-size: 15px;'>Price: $pro_price PHP</h3><br>
                <button 
                                pid='$pro_id' 
                                id='product' style='margin-left: 0px;
                                width: 93px;
                                height: 36px;
                                font-size: 15px;
                                background:#38761d;
                                color: #fff;
                                border: 1px solid #ffffff;
                                border-radius: 5px;' 
                                class='fa fa-shopping-cart'> 
                                Buy Now
                            </button>
                <a href='product-detail.php?id=$pro_id'> 
                <button 
                                pid='$pro_id' 
                                id='' style='margin-left: 0px;
                                width: 90px;
                                height: 36px;
                                float: right;
                                font-size: 15px;
                                background: #38761d;
                                color: #fff;
                                border: 1px solid #ffffff;
                                border-radius: 5px;' 
                                class='fa fa-shopping-cart'> 
                                Detail
                            </button></a>
            </ul>
            
        </div>
    </div>
    
<div style='z-index: 1;' id='detail' class='overlay'>
        <div class='popup_changepassword'>
            <h2>Detail</h2>
            <a class='close' href='profile.php'>&times;</a>
            
            <div class='content'>
                <div><img style='width: 210px; height:215px;' src='product_images/$pro_image' alt=''></div><br>
                <label>Product name: <b style='color: #fe980f'>$pro_title</b></label><br>
                <label>Price: <b style='color: #fe980f'>$pro_price PHP</b></label><br>
                <label>Describe: <b style='color: #fe980f'>$pro_des</b></label><br>
            </div>
        </div>
    </div>
        ";
    }
}

//Add a product into cart
if (isset($_POST["addToProduct"])) {
    if (isset($_SESSION["uid"])) {
        $p_id = $_POST["proId"];
        $user_id = $_SESSION["uid"];
        $sql = "SELECT * FROM cart WHERE p_id = '$p_id' AND user_id = '$user_id'"; //SQL querry
        $run_query = mysqli_query($con, $sql);
        $count = mysqli_num_rows($run_query);

        if ($count > 0) {
            echo "
                    <div class='alert alert-warning'>
                        <a href='#' 
                            class='close' 
                            data-dismiss='alert' 
                            aria-label='close'>&times;
                        </a>
                        <b>The product already exists in <a style='color: #38761d' href='cart.php'>shopping cart</a> your!</b>
                     </div>
                ";                                                                  //Not in video
        } else {
            $sql = "SELECT * FROM products WHERE product_id = '$p_id'";         //SQL querry
            $run_query = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run_query);
            $id = $row["product_id"];
            $pro_name = $row["product_title"];
            $pro_image = $row["product_image"];
            $pro_price = $row["product_price"];                                 //SQL querry

            $sql_user = "SELECT *FROM user_info WHERE user_id = $user_id";
            $run_query_user = mysqli_query($con, $sql_user);
            $row1 = mysqli_fetch_array($run_query_user);

            $user_name = $row1["first_name"];
            $user_address = $row1["address1"];
            $user_phone = $row1["mobile"];
            $user_email = $row1["email"];

            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $time = time();
            $date_order = date("d-m-Y H:i:s", $time);


            $sql = "INSERT INTO `cart`                                          
                    (`id`, `p_id`, `date_order`, `user_id`,`user_name`,`user_address`,`user_phone`,`user_email`, `product_title`,
                    `product_image`, `qty`, `price`, `total_amt`)
                    VALUES (NULL, '$p_id', '$date_order', '$user_id','$user_name','$user_address','$user_phone','$user_email', '$pro_name', 
                    '$pro_image', '1', '$pro_price', '$pro_price')";
            if (mysqli_query($con, $sql)) {
                echo "
                <div class='alert alert-success'>
                    <a 
                        href='#' 
                        class='close'
                        data-dismiss='alert' 
                        aria-label='close'>&times;
                    </a>
                    <b>The product already exists in <a style='color: #38761d' href='cart.php'>shopping cart</a> your!</b>
                </div>
                    ";
            }
        }
    } else {

        $p_id = $_POST["proId"];

        $sqlok1 = "SELECT * FROM products WHERE product_id = '$p_id'";         //SQL querry
        $sqlok2 = "SELECT * FROM Guest WHERE Pro_ID = '$p_id'";         //SQL querry

        $run_queryok1 = mysqli_query($con, $sqlok1);
        $run_queryok2 = mysqli_query($con, $sqlok2);

        $rowok1 = mysqli_fetch_array($run_queryok1);
        $id = $rowok1["product_id"];
        $pro_name = $rowok1["product_title"];
        $pro_image = $rowok1["product_image"];
        $pro_price = $rowok1["product_price"];

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeok = time();
        $date_orderok = date("d-m-Y H:i:s", $timeok);

        $count1 = mysqli_num_rows($run_queryok2);
        if ($count1 > 0) {
            echo "
                    <div class='alert alert-warning'>
                        <a href='#' 
                            class='close' 
                            data-dismiss='alert' 
                            aria-label='close'>&times;
                        </a>
                        <b>The product already exists in shopping cart your!</b>
                     </div>
                ";                                                                  //Not in video
        } else {

            $sqlok = "INSERT INTO Guest(`ID`, `Pro_ID`,`Pro_name`,`Date_order`,`Product_image`,`Qty`,`Price`,`Total_amt`) "
                    . "VALUES (NULL,'$p_id','$pro_name','$date_orderok','$pro_image','1','$pro_price','$pro_price');";
            $run_queryok = mysqli_query($con, $sqlok);

            echo "
           <div class='alert alert-success'>
                <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                <b>You're making a purchase in guest mode!. You can <b>sign in</b> or Register <a href='customer_registration.php' style='color: #38761d '>Register</a> new account.</b>
            </div>
                    <script type='text/javascript'>
	init_reload();
	function init_reload(){
	    setInterval( function() {
	               window.location.reload();
	      },100);
	}
	</script>";
        }
    }
}


//Get cart via user
if (isset($_POST["get_cart_product"]) || isset($_POST["cart_checkout"])) {
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE user_id = '$uid'";                         //SQL querry
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    if ($count > 0) {
        $no = 1;
        $total_amt = 0;
        while ($row = mysqli_fetch_array($run_query)) {
            $id = $row["id"];
            $pro_id = $row["p_id"];
            $pro_name = $row["product_title"];
            $pro_image = $row["product_image"];
            $qty = $row["qty"];
            $pro_price = $row["price"];
            $total = $row["total_amt"];
            $price_array = array($total);
            $total_sum = array_sum($price_array);
            $total_amt = $total_amt + $total_sum;
//            setcookie("ta", $total_amt, strtotime("+1 day"), "/", "", "", TRUE);
            if (isset($_POST["get_cart_product"])) {
                echo "
<div class='row'>
    <div class='col-md-3 col-xs-3'>$no</div>
    <div class='col-md-3 col-xs-3'>
        <img src='product_images/$pro_image' width='60px' height='50px'>
    </div>
    <div class='col-md-3 col-xs-3'>$pro_name</div>
    <div class='col-md-3 col-xs-3'>$pro_price PHP</div>
</div>
";
                $no = $no + 1;
            } else {
                echo "
<div class='row'>
    <div class='col-md-2 col-sm-2'>
        <img src='product_images/$pro_image' width='50px' height='60'>
    </div>
    <div class='col-md-2 col-sm-2'>$pro_name</div>
    <div class='col-md-2 col-sm-2'>
        <input 
            type='text' 
            class='form-control qty' 
            pid='$pro_id' id='qty-$pro_id' value='$qty' >
    </div>
    <div class='col-md-2 col-sm-2'>
        <div class='btn-group'>
            <a 
                style='background: #ffffff;
                border-radius: 0;
                color: #38761d;' 
                href='' 
                update_id='$pro_id' 
                class='btn btgreen btn-xs update'>
                <span class='glyphicon glyphicon-ok-sign'></span>
            </a>
            <a 
                style='background: #ffffff;
                border-radius: 0;
                color: red; 
                margin-top: 22px;' 
                href='#' 
                remove_id='$pro_id' 
                class='btn btn-xs remove'>
                <span class='glyphicon glyphicon-trash'></span>
            </a>
        </div>
    </div>
    <div class='col-md-2 col-sm-2'>
        <input 
            type='text' 
            class='form-control price' 
            pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled>
    </div>
    <div class='col-md-2 col-sm-2'>
        <input 
            type='text' 
            class='form-control total' 
            pid='$pro_id' id='total-$pro_id' value='$total' disabled>
    </div>
</div>
";
            }
        }
        if (isset($_POST["cart_checkout"])) {
            $namepay = $_SESSION["name"];
            $querrypay = "SELECT *FROM user_info WHERE first_name = '$namepay';";    // Thanh toán theo tên
            $rpay = mysqli_query($con, $querrypay);
            $rowpay = mysqli_fetch_array($rpay);

            $lastname = $rowpay['last_name'];
            $addresspay = $rowpay['address1'];
            $phonepay = $rowpay['mobile'];
            $emailpay = $rowpay['email'];


            echo "
                <div class='row'>
                    <div class='col-md-8'></div>
                    <div class='col-md-4'>
                    <h4>Total: $total_amt PHP </h4>
                </div>
                <div class='row'>
                    <div class='col-md-8'></div>
                    <div class='col-md-4'>
                        <h1 style=' margin-left: 43px;'>
                            <a href='#popup2' 
                            type='button'>
                                <img title='Pay here' src='images/pay.png' 
                                width='100px' 
                                height='60px'>
                            </a>
                        </h1>
                    </div>
                </div>
                <div style='z-index: 9999;' id='popup2' class='overlay'>
                    <div class='pay_popup'>
                        <h2>Bill</h2>
                        <a class='close' href='#'>&times;</a>
                        <div class='content'>
                            <h4><u>Customer Information</u></h4>
                            <h5>Customer:<b style='color:#38761d'> $namepay $lastname</b></h5>
                            <h5>Address: <b style='color: #38761d'> $addresspay</b></h5>
                            <h5>Phone number: <b style='color: #38761d'> $phonepay</b></h5>
                            <h5>Email: <b style='color: #38761d'> $emailpay</b></h5>
                            <hr>
                            <h4><u>Order Information</u></h4>
                            ";
            echo "<table border='1'>
                <tr>
                    <th class='center'>Sequence number</th>
                    <th class='center'>Product name</th>
                    <th class='center'>Amount</th>
                    <th class='center'>Price</th>
                    
        </tr>";
            $allguest = "SELECT * FROM cart WHERE user_id = '$uid'";
            $rfinished = mysqli_query($con, $allguest);
            $stt = 1;
            while ($rowfinished = mysqli_fetch_array($rfinished)) {
                $nameokkkk = $rowfinished['product_title'];
                $priceokkk = $rowfinished['price'];
                $qtyokkkkk = $rowfinished['qty'];

                echo "
                    <tr>
                        <td class='center'>$stt</td>
                        <td>$nameokkkk</td>
                        <td class='center'>$qtyokkkkk</td>
                        <td class='center'>$priceokkk</td>
                    </tr>";
                $stt = $stt + 1;
            }

            echo "
                            
                    <tr>
                        <td colspan='3'><b style='color: #38761d'>Total Funds</b></td>
                        <td><b style='color: #38761d'>$total_amt</b></td>
                    </tr>
                            </table>
                        </div>
                        <hr>  
                             <input  type='button' class='btn btn-primary1' id='buttonout' value='Invoice'>
                    </div>
                </div>";
        }                                              //Profile
    }
}

//View cart
if (isset($_POST["cart_count"]) AND isset($_SESSION["uid"])) {
    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM cart WHERE user_id = '$uid'";                         //SQL querry
    $run_query = mysqli_query($con, $sql);
    echo mysqli_num_rows($run_query);
}

//Remove a product from cart
if (isset($_POST["removeFromCart"])) {
    $pid = $_POST["removeId"];
    $uid = $_SESSION["uid"];
    $sql = "DELETE FROM cart WHERE user_id = '$uid' AND p_id = '$pid'";         //SQL querry
    $run_query = mysqli_query($con, $sql);
    if ($run_query) {
        echo "
    <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
          <b>The product already exists in shopping cart your!</b>
    </div>
    ";
    }
}

//Update information when you remove a product
if (isset($_POST["updateProduct"])) {
    $uid = $_SESSION["uid"];
    $pid = $_POST["updateId"];
    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $total = $_POST["total"];

    $sql = "UPDATE cart SET qty = '$qty',price='$price',total_amt='$total' 
    WHERE user_id = '$uid' AND p_id='$pid'";
    $run_query = mysqli_query($con, $sql);
    if ($run_query) {
        echo "
    <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>The product has been updated... Return to <a style='color:#38761d' href='index.php'>home page</a> to continue with the purchase!</b>

    </div>
    ";
    }
}

if (isset($_POST["get_cart_product1"])) {

    $sql = "SELECT * FROM Guest";                         //SQL querry
    $run_query = mysqli_query($con, $sql);
    $count = mysqli_num_rows($run_query);
    if ($count > 0) {
        $no = 1;
        $total_amt = 0;
        while ($row = mysqli_fetch_array($run_query)) {
            $id = $row["ID"];
            $pro_id = $row["Pro_ID"];
            $pro_name = $row["Pro_name"];
            $pro_image = $row["Product_image"];
            $qty = $row["Qty"];
            $pro_price = $row["Price"];
            $total = $row["Total_amt"];
            $price_array = array($total);
            $total_sum = array_sum($price_array);
            $total_amt = $total_amt + $total_sum;

//            -------------------------------------------------------------------
            if (isset($_POST["get_cart_product1"])) {
                echo "
                    <div class='row'>
                        <div class='col-md-2 col-xs-2'>$no) <b>$pro_name</b></div>
                        <div class='col-md-2 col-xs-2'>
                            <img src='product_images/$pro_image' width='60px' height='50px'>
                        </div>
                        <div class='col-md-2 col-sm-2'>
                            <input 
                            type='text' 
                            class='form-control qty' 
                            pid='$pro_id' id='qty-$pro_id' value='$qty' >
                        </div>
                        <div class='btn-group col-md-1 col-sm-1'>
                            <a 
                                style='background: #ffffff;
                                border-radius: 0;
                                color: #38761d;
                                margin-top: 10px;'
                                update_id_guest='$id' 
                                update_id_guest1='$pro_id'
                                class='btn btgreen btn-xs updateguest'>
                                <span class='glyphicon glyphicon-ok-sign'></span>
                            </a>
                        </div>
                        <div class='btn-group col-md-1 col-sm-1'>
                            <a 
                                style='background: #ffffff;
                                border-radius: 0;
                                color: #38761d; 
                                margin-top: 10px;' 
                                remove_id_guest='$id' 
                                class='btn btn-xs removeguest'>
                                <span class='glyphicon glyphicon-trash'></span>
                            </a>
                        </div>
                        <div class='col-md-2 col-sm-2'>
                            <input 
                            type='text' 
                            class='form-control price' 
                            pid='$pro_id' id='price-$pro_id' value='$pro_price' disabled>
                        </div>
                        <div class='col-md-2 col-sm-2'>
                            <input 
                            type='text' 
                            class='form-control total' 
                            pid='$pro_id' id='total-$pro_id' value='$total' disabled>
                        </div>
                    </div>
                    
";

                $no = $no + 1;
//                -------------------------------------------------------
            }
        }
        echo "
            <hr><br>
            <div class='row'>
                <div class='col-md-4'>
                </div>
                
                <div class='col-md-3'>
                    <h4>Total: $total_amt PHP </h4>
                </div>
                
                <div class='col-md-1' style='margin-left: -47px; margin-top: 5px;'>
                    <a href=''>
                        <img src='images/reload.jpg' title='Reload the page' style='width: 20px;'></a>
                </div>	
                
                <div class='col-md-2'>
                    <input 
                    class='btn' 
                    type='button' 
                    id='deleteall' 
                    value='Delete a cart' 
                    style='margin-top: 0px;
                    border-color: red;
                    font-family: cursive;
                    color: red ;'>
                </div>
                <div class='col-md-2'>
                    <input 
                    class='btn' 
                    type='button' 
                    id='google' 
                    value='Update' 
                    style='margin-top: 0px;
                    font-family: cursive;
                    border-color:#38761d;
                    color: #38761d;'>
                </div>
            </div>";
//Guest 

        if (isset($_POST["cart_checkout"])) {
            echo "
                <div class='row'>
                <div class='col-md-8'></div>
                    <div class='col-md-4'>
                        <h4>Total: $total_amt PHP </h4>
                    </div>
                </div>";
        }                                                 //Pay
    }
}


if (isset($_POST["updateProductguest"])) {
    $id = $_POST["updateId"];

    $qty = $_POST["qty"];
    $price = $_POST["price"];
    $total = $_POST["total"];

    $sql = "UPDATE Guest SET Qty = '$qty',Price='$price',Total_amt='$total' 
    WHERE ID='$id'";
    $run_query = mysqli_query($con, $sql);
    if ($run_query) {
        echo "
    <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>The product has been updated</b>
    </div>
    ";
    }
}


if (isset($_POST["removeFromCart_guest"])) {
    $id = $_POST["removeId"];
    $sql = "DELETE FROM Guest WHERE ID = '$id'";         //SQL querry
    $run_query = mysqli_query($con, $sql);
    if ($run_query) {
        echo "
    <div class='alert alert-danger'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>The product has been removed from your cart!</b>
    </div>
    ";
    }
}

if (isset($_POST["outhistory"])) {
    $namepay = $_SESSION["name"];
    $querrypay = "SELECT *FROM user_info WHERE first_name = '$namepay';";  // Transaction history
    $rpay = mysqli_query($con, $querrypay);
    $rowpay = mysqli_fetch_array($rpay);

    $cus_id = $rowpay['user_id'];

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $timeok = time();
    $date_orderok = date("d-m-Y H:i:s", $timeok);

    $uid = $_SESSION["uid"];
    $sql1 = "SELECT * FROM cart WHERE user_id = '$uid'";                         //SQL querry
    $run_query = mysqli_query($con, $sql1);
    $count = mysqli_num_rows($run_query);
    if ($count > 0) {
        $no = 1;
        $total_amt = 0;
        while ($row = mysqli_fetch_array($run_query)) {
            $qty = $row["qty"];
            $pro_price = $row["price"];
            $total = $row["total_amt"];
            $price_array = array($total);
            $total_sum = array_sum($price_array);
            $total_amt = $total_amt + $total_sum;
        }
    }

    $sqlquery = "INSERT INTO history VALUES('NULL','$namepay',$total_amt,'Paid','$date_orderok');";
    $run55 = mysqli_query($con, $sqlquery);
    if ($run55) {
        echo "
    <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>
            <a href='index.php'>
                <b style='color:#38761d '>[MSC-GARMENTS]</b>
            </a> Payment successful. See you soon!
        </b>
    </div><script>alert('[MSC-GARMENTS] Payment successful. See you soon!')</script>
    ";
    }
    $end = "DELETE FROM Cart WHERE user_id =$uid;";
    $runend = mysqli_query($con, $end);
}

if (isset($_POST["deleteallguest"])) {
    $q1 = "DROP TABLE IF EXISTS `Guest`;";
    $q2 = "
    CREATE TABLE Guest
    (
	ID INT(100),
        Pro_ID INT(100),
        Pro_name VARCHAR(255),
        Date_order VARCHAR(255),
        Product_image VARCHAR(255),
        Qty INT(100),
        Price INT(100),
        Total_amt INT(100)
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;";
    $q3 = "ALTER TABLE Guest ADD PRIMARY KEY (ID);";
    $q4 = "ALTER TABLE Guest MODIFY ID INT(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;";

    $r1 = mysqli_query($con, $q1);
    $r2 = mysqli_query($con, $q2);
    $r3 = mysqli_query($con, $q3);
    $r4 = mysqli_query($con, $q4);

    if ($r4) {
        echo "
    <div class='alert alert-success'>
        <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
        <b>
            <a href='index.php'>
                <b style='color:#38761d'>[MSC-GARMENTS]</b>
            </a>Delete successfully. Automatic cart refresh system later <b>3s</b>...
        </b>
        <script type='text/javascript'>
            init_reload();
            function init_reload(){
                setInterval( function() {
	               window.location.reload();
	      },4000);
	}
	</script>
    ";
    }
}

if (isset($_POST["sentgoogle"])) {
    include 'connectpay.php';
}

if (isset($_POST["sentgoogleok"])) {
    include 'Google.php';
}
?>