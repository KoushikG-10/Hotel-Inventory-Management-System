<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>HOTEL INVENTORY </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <!-- <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                    </form>
                                </div>
                            </div> -->
                        </div>

                        <!-- <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="list-unstyled">
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-user"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Martin</strong> has added a <strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-shopping-cart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Jennifer</strong> purchased Light Dashboard 2.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="danger"><i class="ti-bookmark"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>Robin</strong> marked a <strong>ticket</strong> as unsolved.
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="primary"><i class="ti-heart"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong>David</strong> purchased Light Dashboard 1.0.</p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                        <li class="media dropdown-item">
                                            <span class="success"><i class="ti-image"></i></span>
                                            <div class="media-body">
                                                <a href="#">
                                                    <p><strong> James.</strong> has added a<strong>customer</strong> Successfully
                                                    </p>
                                                </a>
                                            </div>
                                            <span class="notify-time">3:20 am</span>
                                        </li>
                                    </ul>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <i class="mdi mdi-account"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul> -->
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first"><a href="index.php">Main Menu</a></li>
                    <li class="nav-label">Masters</li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-app-store"></i><span class="nav-text">Masters</span></a>
                        <ul aria-expanded="false">
                            <li><a  href="./product.php">Products</a></li>
                            <li><a  href="./supplier.php">supplier</a></li>
                            <li><a  href="./outlet.php">Outlet</a></li>
                        </ul>
                    </li>
                    <li><a href="purchase.php" aria-expanded="false"><i class="icon icon-chart-bar-33"></i><span class="nav-text">Purchase</span></a>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-world-2"></i><span class="nav-text">Issue</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./outlet1.php">Outlet</a></li>
                        </ul>
                    <!-- <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-plug"></i><span class="nav-text">Plugins</span></a> -->
                    <li><a href="has-arrow" href="javascript:void()"aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Reports</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./purchasereport.php">Purchase Report</a></li>
                            <li><a href="./issuereport.php">Issue Report</a></li>
                        </ul>

</li>

                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false"><i class="icon icon-single-copy-06"></i><span class="nav-text">Setting</span></a>
                        <ul aria-expanded="false">
                            <li><a href="./changepassword.php">Change Password</a></li>
                            <!-- <li><a href="./page-register.html">Change Email</a></li> -->
                            <li><a href="./logout.php">Logout</a></li>

                        </ul>
</li>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="col-xl-6 col-xxl-12">

                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">PRODUCTS</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form method="post">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">product ID</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="prod" placeholder="Product id">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">NAME</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name" placeholder="Enter the name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">REORDER</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="reorder" placeholder="Reorder">
                                            </div>
                                        </div>
                                        <div class="form-group row">

                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-xxl-12">

                    <div class="card">
                        <!-- <section id="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4>Table Basic </h4>

                                        </div>
                                        <div class="">
                                            <div style="width: 402px;">
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th>PRODUCT ID</th>
                                                            <th>Name</th>
                                                            <th>REORDER</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                         <?php
                                                        include "dbconnection.php";
                                                        $query = "select * from tblproduct";
                                                        $result = mysqli_query($link, $query);
                                                        while ($rows = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <tr>
                                                                <td><?php echo $rows['product_ID']; ?></td>
                                                                <td><?php echo $rows['name']; ?></td>
                                                                <td><?php echo $rows['reorder']; ?></td>

                                                            </tr>

                                                        <?php
                                                        }
                                                        ?> 

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                             /# column 
                    </div>
                


                    </section> -->


                </div>
            </div>

        <div class="row">
        <!-- <div class="col-xl-6 col-xxl-12">

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">SUPPLIER</h4>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <form method="post">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Supplier Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="supp" placeholder="Supplier name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" name="date" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Invoice No</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="invc" placeholder="Invoice no">
                                </div>
                            </div>
                            <div class="form-group row">

                                <div class="form-group row">
                                    <div class="col-sm-10">
                                        <button type="submit" name="sub" class="btn btn-primary">ADD TO STOCK</button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>

                
            </div> -->

            

        </div>
        </div>
        <!-- <div class="col-xl-6 col-xxl-12">

                    <div class="card">
                        <section id="main-content">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card">
                                        <div class="card-title">
                                            <h4>Table Basic </h4>

                                        </div>
                                        <div class="">
                                            <div style="width: 402px;">
                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th>Supplier Name</th>
                                                            <th>Date</th>
                                                            <th>Invoice no</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        include "dbconnection.php";
                                                        $s=$_POST['prod'];
                                                        $d=$_POST['name'];
                                                        $i=$_POST['reorder'];

                                                        $query = "select * from tblsupp where supplier_name='$s'";
                                                        $result = mysqli_query($link, $query);
                                                        while ($rows = mysqli_fetch_assoc($result)) {
                                                        ?>
                                                            <tr>
                                                                <td><?php  ?></td>
                                                                <td><?php  ?></td>
                                                                <td><?php  ?></td>

                                                            </tr>

                                                        <?php
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                /# column -->

                                <!-- /# column -->

                                <!-- /# column -->

                                <!-- /# card -->
                            </div>
                            <!-- /# column -->
                    </div>
                    <!-- /# row -->


                    </section>


                </div> 
        </div>

    </div>
    <?php
    include "dbconnection.php";
    if (isset($_POST['submit'])) {
        $pr = $_POST['prod'];
        $n = $_POST['name'];
        $re = $_POST['reorder'];

        $query = "insert into tblproduct values('$pr','$n','$re')";
        $result = mysqli_query($link, $query);
        if ($result) {
            echo "<script> alert('Data inserted succesfully'); </script>";
        } else {
            echo "<script> alert('Data not inserted succesfully'); </script>";
            header("location:product.php");
        }
    }
    ?>
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    <!-- <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
            </div>
        </div> -->
    <!--**********************************
            Footer end
        ***********************************-->

    <!--**********************************
           Support ticket button start
        ***********************************-->

    <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
    <script src="./js/quixnav-init.js"></script>
    <script src="./js/custom.min.js"></script>

</body>

</html>