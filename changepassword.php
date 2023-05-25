<?php

include "db.php";
session_start();

$user_id = $_SESSION["uid"];
$admin_oldpass = $_POST["oldpass"];
$admin_newpass = $_POST["newpass"];
$admin_retypenewpass = $_POST["retypenewpass"];
$sql = "SELECT password FROM user_info WHERE user_id = $user_id";         //SQL querry
$run_query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($run_query);
$pass = $row["password"];

if (empty($admin_oldpass) || empty($admin_newpass) || empty($admin_retypenewpass)) {
    echo "
        <div class='alert alert-warning'>
            <b>The input is empty!</b>
	</div>   
";
    exit();
}elseif ($admin_oldpass != $pass) {
    echo "
        <div class='alert alert-warning'>
            <b>Old password doesn't match!</b>
	</div>";
} elseif (strlen($admin_newpass) < 8) {
    echo "
        <div class='alert alert-warning'>
            <b>The password is too weak!</b>
	</div>";
} elseif ($admin_newpass != $admin_retypenewpass) {
    echo "
        <div class='alert alert-warning'>
            <b>The password re-entered does not match!</b>
	</div>";
} else {
    $sql = "UPDATE `shop`.`user_info` SET `password`='$admin_retypenewpass' WHERE `user_id`='$user_id';";
    $run_query = mysqli_query($con, $sql);
    echo "
        <div class='alert alert-success'>
            <b>Change password successfully!</b>
	</div>
    <script type='text/javascript'>   
        $('#oldpass').val('');
        $('#newpass').val('');
        $('#retypenewpass').val('');
    </script>
";
}
?>

