<?php
session_start();
include('../include/dbController.php');
$db_handle = new DBController();

if(isset($_POST['update'])){
    $info=$_POST['info'];
    $bottom_info=$_POST['bottom_info'];

    $query = "UPDATE `settings` SET `details`='$info' WHERE `sid`=1";
    $update= $db_handle->insertQuery($query);

    $query = "UPDATE `settings` SET `details`='$bottom_info' WHERE `sid`=2";
    $update= $db_handle->insertQuery($query);

    ?>
    <script>
        alert('Update Info');
        window.location.href='settings.php';
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration - Ark Life Education House</title>

    <?php require_once 'include/css.php'; ?>

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php require_once 'include/sidebar.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <?php require_once 'include/topbar.php'; ?>

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Settings Data</h1>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Settings Data</h6>
                    </div>
                    <div class="card-body">

                        <?php

                        $query = "SELECT * FROM settings";
                        $data = $db_handle->runQuery($query);

                        $info=$data[0]['details'];
                        $bottom_info=$data[1]['details'];
                        ?>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="info">Info <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="5" name="info" id="info" required><?php echo $info; ?></textarea>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="bottom_info">Bottom Info <span class="text-danger">*</span></label>
                                    <textarea class="form-control" rows="5" name="bottom_info" id="bottom_info" required><?php echo $bottom_info; ?></textarea>
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <button class="btn btn-primary" type="submit" name="update">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <?php require_once 'include/footer.php'; ?>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'include/js.php'; ?>

</body>

</html>
