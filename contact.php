<?php include('header.php') ?>
   <?php
$href = '';
if(isset($_GET['cs'])) {
    $success = 'Send successfully';
}
else {
    $success = '';
}
if(isset($_GET['cf'])) {
    $fail = "Send fail;";
}
else {
     $fail = '';
}
?>

<div class="container">
    <div class="row">
        <iframe src='https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=Panfilo%20M.%20Manguerra%20Sr.%20%20Road%2C%20Tanza%2C%20Boac%2C%204900%20Marinduque%2C%20Philippines+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed' 
                                    width='100%' 
                                    height='400' 
                                    frameborder='0' 
                                    style='border:0' 
                                    allowfullscreen>
                            </iframe>
 


    </div>
</div> <!-- container-fluid -->
<div class="container">
    <div class = "row">
        <div class = "contact-info">
        <div class = "col-md-5 col-sm-5 col-xs-12">
            <h3> CONTACT INFORMATION </h3>
            <br>
              <p>Born in 1942, just from a MSC-uniform store, up to now <strong>MSC-GARMENTS </strong>has constantly developed and become commercially inclined department specializing in production and commercial business ....<br></p>
              <strong>If you have any questions, please contact</strong>
              <address><strong><p style="color:#38761d ; font-size: 15px;">MSC-GARMENTS </p>
                Panfilo M. Manguera Sr. Road Barangay Tanza, <br>
                   Boac, Marinduque, Philippines</strong><br>
                    Phone No: 09813757730</br>
                    E-mail: <a href="">mscgarments@gmail.com</a><br>
              </address><!-- address (end) -->
        </div>
            <div class = "col-md-6 col-sm-6 col-xs-12">
                <div class = "title">
                    <h3> CONTACT </h3>
                </div>
                <span style="color:red"><?php echo $success. $fail?></span>
                <form action ="contact-back.php" method ="POST">
                    <div class="content">
                        <form action=""  method="post" accept-charset="utf-8"></div>
                    <div class="form-group">
                        <label>Full name:<span>*</span></label>

                        <input name="contact-name" placeholder="Enter your name here" class="form-control" required="required" maxlength="255" type="text" id="contact-name">	
                    </div>
                    <div class="form-group">
                        <label>Email:<span>*</span></label>

                        <input name="contact-email" placeholder="Enter your email here" class="form-control" required="required" maxlength="255" type="email" id="contact-email">	
                    </div>
                    <div class="form-group">
                        <label>Subject:<span>*</span></label>

                        <input name="contact-subject" placeholder="Enter topic of your concern" class="form-control" required="required" maxlength="255" type="text" id="contact-subject">	
                    </div>
                    <div class="form-group">
                        <label>Content: <span>*</span></label>
                        <textarea name="contact-content" placeholder="Enter your concerns..." class="form-control" rows="4" id="ContactContent" required>	
                        </textarea>			
                    </div>
                    <button style="background-color:#38761d ; float: right; color: white" type="submit" name ="sendcontact" class="btn btn-default">Send contact</button>
                    <br>
                </form>
            </div>

        </div>
        
    </div>
</div>
<br>	
	<?php include("footer.php") ?>
</body>
</html>