
<?php include('header.php'); ?>
<?php
$sql = "select * from  products order by product_id  ASC  ";
 $res = mysqli_query($conn,$sql) or die($sql);
$fail = $success = '';
if(isset($_GET['ps'])) {
    $success = "You have successfully deleted";
}
if(isset($_GET['pf'])) {
    $fail = "Can't delete a product";
}
?>

  		<div class="col-md-10 content">
  			<div class="panel panel-default">
            <div class="panel-heading">
            	<h2>Product List</h2>
            </div>
        	<div class="panel-body">
	       	  <form name="form1" method="post" action="">
                 <table class="table table-striped table-bordered table-hover" id="myTable">
                <p><?php echo $success. $fail;?></p>
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Product name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Describe</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res) ) {
                            if ($row['product_image'] == null || $row['product_image'] == '') {
                                $thumbImage = "";
                            } else {
                                $thumbImage = "../product_images/" . $row['product_image'];
                            }
                    ?>
                    <tr class="odd gradeX" align="center">
                                <td ><?php echo $row["product_id"]; ?></td>
                                <td ><?php echo $row["product_title"]; ?></td>
                               <td><img src = "<?php echo $thumbImage?>" width =80px; height = 80px;> </td>
                                <td ><?php echo $row["product_price"]; ?></td>
                                <td ><?php echo $row["product_desc"]; ?></td>
                                <td class="center"><a href="product-update.php?idProduct=<?php echo $row['product_id'];?>"><i class="fa fa-pencil fa-fw"></i> Detail</a></td>
                                <td class="center"><a href="deleterow.php?idProducts=<?php echo $row['product_id'];?>"> <i class="fa fa-trash-o  fa-fw"></i>Delete</a></td>
                       
                    </tr>
                    <?php 
                    }
                    }else {
                        echo 'error';
                    }
                    ?>

                </tbody>
            </table>
              </form>
	        </div>
            </div>
  		</div>

<?php include('footer.php') ?>
