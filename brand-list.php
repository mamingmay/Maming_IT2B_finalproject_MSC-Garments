<?php include('header.php'); ?>
<?php
if (isset($_POST['insertBrand'])) {
    if ($_POST['txtBrandName']) {
        $brandName = $_POST['txtBrandName'];
        $sqlInsertBrand = "insert into brands(brand_title) values('$brandName')";

        $resCate = mysqli_query($conn,$sqlInsertBrand);
    }
}


if (isset($_POST['updateBrand'])) {
    if($_POST['idBrand']) {
        $idBrand = $_POST['idBrand'];


    if ($_POST['txtBrandName']) {
        $brandName = $_POST['txtBrandName'];
        $sqlUpdateBrand = "update brands set brand_title = '$brandName' where brand_id =$idBrand";
        echo $sqlUpdateBrand;

        $resCate = mysqli_query($conn,$sqlUpdateBrand);
    }
    }
}


$sql = "select * from brands";
$res = mysqli_query($conn,$sql);
$fail = $success = '';
if (isset($_GET['cs'])) {
    $success = "You have successfully deleted";
}
if (isset($_GET['cf'])) {
    $fail = "Can't delete a product";
}
?>


<!-- Page Content -->

<div class="col-md-10 content">
  			<div class="panel panel-default">
            <div class="panel-heading">
            	<h2>CATEGORIES</h2>
            </div>
        	<div class="panel-body">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <?php
?>
                    <h4><a href="brand-list.php?addBrand=hh" style="color: #38761d; text-decoration: underline;">Categories </a></h4>
                    <?php if(isset($_GET['addBrand'])) {
                        ?>

                    <form action ="brand-list.php?addBrand=hh" method="POST">
                        <div class="form-group">
                            <label>Categories (Type)</label>
                            <input class="form-control" name="txtBrandName" placeholder="Please enter the Product Category name" />
                        </div>

                        <button type="submit" name ="insertBrand" class="btn btn-warning">Add</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    </form>
                    <?php }?>
                </div>
                <?php
                if (isset($_GET['idBrand'])) {
                    $idBrand = $_GET['idBrand'];
                    $sqlSelectEachCategory = "select * from brands where brand_id = $idBrand";
                    $resEachCategory = mysqli_query($conn,$sqlSelectEachCategory);
                    while($rowEach = mysqli_fetch_array($resEachCategory)) {

                ?>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <h4>Collection </h4>
                    <form action ="brand-list.php" method="POST">
                        <div class="form-group">
                            <label>Categories (Type)</label>
                            <input class="form-control" name="txtBrandName"  value="<?php echo $rowEach['brand_title'];?>" />           <input type="hidden" name="idBrand" value="<?php echo $rowEach['brand_id']?>">

                        </div>

                        <button type="submit" name ="updateBrand" class="btn btn-warning">Edit </button>

                    </form>
                </div>
                <?php }}
                ?>
            </div>
            <hr/>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="myTable">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Product Categories</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    if ($res) {
                        while ($row = mysqli_fetch_array($res)) {
                            ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $row['brand_id']; ?></td>

                                <td>
                                    <div class="form-group">
                                        <input class="form-control" name ="txtBrandName" type="text" value="     <?php echo $row['brand_title']; ?>" style="background: transparent; border: none;"/>
                                    </div>
                                </td>

                                <td class="center">
                                    <i class="fa fa-pencil fa-fw">
                                    </i>
                                    <a href="brand-list.php?idBrand=<?php echo $row['brand_id']; ?>">Edit</a>
                                </td>



                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="deleterow.php?idBrand=<?php echo $row['brand_id']; ?>">Delete</a></td>

                            </tr>
                            <?php
                        }
                    }
                    ?>
                </tbody>

            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<?php include('footer.php'); ?>
