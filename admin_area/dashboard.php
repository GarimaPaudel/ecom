<?php if(!isset( $_SESSION['admin_email'])){
  echo"<script>window.open('login.php','_self')</script>";
}
else{

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class='container'>
        <?php 
include 'includes/sidebar.php';
 ?>
    </div>
    <?php 
 echo "<br><br>";
 ?>
    <div class="row">
        <!-- 1st Row Start -->
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
            <ol class="breadcrump">
                <li class="active">
                    <i class="fa fa-fw fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div><!-- 1st Row End -->

    <div class="row">
        <!-- 2nd Row Start -->
        <div class="col-lg-3 col-md-6">
            <!--col-lg-3 col-md-6 start -->
            <div class="panel panel-primary">
                <!-- panel panel-primary start -->
                <div class="panel-heading">
                    <!--panel heading start-->
                    <div class="row">
                        <!--paanel heading row start-->
                        <div class="col-xs-3">
                            <!--col-xs-3 start-->
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <!--col-xs-3 end-->
                        <div class="col-xs-9 text-right">
                            <!-- col-xs-9 text-right starts -->
                            <div class="huge"><?php echo $count_pro ?></div>
                            <div>Products</div>
                        </div><!-- col-xs-9 text-right ends -->
                    </div>
                    <!--paanel heading row ends-->
                </div>
                <!--panel heading ends-->
                <a href="index.php?view_product">
                    <div class="panel-footer">
                        <!--panel-footer starts -->
                        <span class="pull-left">View Details </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    <!--Panel-footer-ends-->
                </a>
            </div><!-- panel panel-primary ends -->
        </div>
        <!--col-lg-3 col-md-6 ends -->

        <div class="col-lg-3 col-md-6">
            <!--col-lg-3 col-md-6 starts -->
            <div class="panel panel-green">
                <!--panel panel-green starts-->
                <div class="panel-heading">
                    <!--panel heading starts-->
                    <div class="row">
                        <!--panel heading row starts-->
                        <div class="col-xs-3">
                            <!-- col-xs-3 starts-->
                            <i class="fa fa-comment fa-5x"></i>
                        </div><!-- col-xs-3 end-->
                        <div class="col-xs-9 text-right">
                            <!--col-xs-9 text-right start -->
                            <div class="huge"><?php echo $count_cust ?></div>
                            <div>Customers</div>
                        </div>
                        <!--col-xs-9 text-right ends -->
                    </div>
                    <!--panel heading row ends -->
                </div>
                <!--panel row ends-->
                <a href="index.php?view_customer">
                    <div class="panel-footer">
                        <!--panel-footer starts -->
                        <span class="pull-left">View Details </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    <!--Panel-footer-ends-->
                </a>
            </div>
            <!--panel panel-green ends-->
        </div>
        <!--col-lg-3 col-md-6 ends -->

        <div class="col-lg-3 col-md-6">
            <!--col-lg-3 col-md-6 starts -->
            <div class="panel panel-yellow">
                <!--panel panel-yellow starts-->
                <div class="panel-heading">
                    <!--panel heading starts-->
                    <div class="row">
                        <!--panel heading row starts-->
                        <div class="col-xs-3">
                            <!-- col-xs-3 starts-->
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div><!-- col-xs-3 end-->
                        <div class="col-xs-9 text-right">
                            <!--col-xs-9 text-right start -->
                            <div class="huge"><?php echo $count_p_cat ?></div>
                            <div>Product Categories</div>
                        </div>
                        <!--col-xs-9 text-right ends -->
                    </div>
                    <!--panel heading row ends -->
                </div>
                <!--panel row ends-->
                <a href="index.php?view_product_cat">
                    <div class="panel-footer">
                        <!--panel-footer starts -->
                        <span class="pull-left">View Details </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    <!--Panel-footer-ends-->
                </a>
            </div>
            <!--panel panel-yellow ends-->
        </div>
        <!--col-lg-3 col-md-6 ends -->

        <div class="col-lg-3 col-md-6">
            <!--col-lg-3 col-md-6 starts -->
            <div class="panel panel-red">
                <!--panel panel-red starts-->
                <div class="panel-heading">
                    <!--panel heading starts-->
                    <div class="row">
                        <!--panel heading row starts-->
                        <div class="col-xs-3">
                            <!-- col-xs-3 starts-->
                            <i class="fa fa-support fa-5x"></i>
                        </div><!-- col-xs-3 end-->
                        <div class="col-xs-9 text-right">
                            <!--col-xs-9 text-right start -->
                            <div class="huge"><?php echo $count_order ?></div>
                            <div>Orders</div>
                        </div>
                        <!--col-xs-9 text-right ends -->
                    </div>
                    <!--panel heading row ends -->
                </div>
                <!--panel row ends-->
                <a href="index.php?view_orders">
                    <div class="panel-footer">
                        <!--panel-footer starts -->
                        <span class="pull-left">View Details </span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                    <!--Panel-footer-ends-->
                </a>
            </div>
            <!--panel panel-red ends-->
        </div>
        <!--col-lg-3 col-md-6 ends -->
    </div><!-- 2nd row ends-->
    </div>


    <div class="row">
        <!-- 3rd row starts-->
        <div class="col-lg-8">
            <!-- col-lg-8 starts -->
            <div class="panel panel-primary">
                <!-- panel panel-primary starts -->
                <div class="panel-heading">
                    <!--panel-heading starts -->
                    <h3 class="panel-title">
                        <!--panel-title-starts -->
                        <i class="fa-sharp fa-solid fa-money-check-dollar"></i>New Orders
                    </h3>
                </div>
                <!--panel-title-ends -->

                <!--panel-heading ends -->
                <div class="panel-body">
                    <!--panel-body starts -->
                    <div class="table-responsive">
                        <!--table responsive starts-->
                        <table class="table table-bordered table-hover table-striped">
                            <!-- table table-bordered table-hover table-striped starts -->
                            <thead>
                                <!--thead starts -->
                                <tr>
                                    <th>Customer No: </th>
                                    <th>Customer ID: </th>
                                    <th>Invoice No: </th>
                                    <th>Total: </th>
                                    <th>Date:</th>
                                    <th>Status:</th>

                                </tr>

                                </thread>
                                <!--thread ends -->

                            <tbody>
                                <!--tbody starts-->

                                <?php
                                $i=0;
                                $get_order = "select * from customer_order order by 1 DESC LIMIT 0,5";
                                $run_order = mysqli_query($con,$get_order);
                                while($row_order =mysqli_fetch_array(  $run_order )){
                                    $order_id = $row_order['order_id'];
                                    $customer_id = $row_order['customer_id'];
                                    $invoice_no= $row_order['invoice_no'];
                                    $qty= $row_order['qty'];
                                    $size = $row_order['size'];
                                    $order_status = $row_order['order_status'];


                               
                                
                                
                                ?>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>

                                <?php  } ?>
                            </tbody>
                            <!--tbody ends -->
                        </table> <!-- table table-bordered table-hover table-striped ends -->
                    </div>
                    <!--table responsive ends -->

                    <div class="text-right">
                        <!--text-right starts -->
                        <a href="ïndex.php?view_orders">View All Orders
                            <i class="fa fa-arrow-circle-right"></i>
                        </a>
                    </div><!-- text-right ends -->
                </div>
            </div>
            <!--panel-body ends -->
        </div>
        <!--col-lg-8 ends -->

        <div class="col-md-4">
            <!-- col-md-4 starts -->
            <div class="panel">
                <!--panel starts -->
                <div class="panel-body">
                    <!--panel-body starts -->
                    <div class="thumb-info-mb-md">
                        <!--thumb-info mb-md starts -->
                        <img src="admin_images/garima.png" class="rounded img-responsive">
                        <div class="thumb-info-title">
                            <!--thumb-info-title starts -->
                            <span class="thumb-info-inner">Admin Name </span>
                            <span class="thumb-info-type">Admin Job </span>
                        </div>
                        <!--thumb-info-title ends -->
                    </div>
                    <!--thumb-info mb-md ends -->

                    <div class="mb-md">
                        <!--mb-md starts -->
                        <div class="widget-content-expanded">
                            <!--widget-content-expanded starts -->
                            <i class="fa fa-user"></i> <span>Email: </span> Admin Email<br>
                            <i class="fa fa-user"></i> <span>Country: </span> Admin Country<br>
                            <i class="fa fa-user"></i> <span>Contact: </span> Admin Contact<br>
                        </div>
                        <!--widget-content-expanded ends -->

                        <hr class="dotted short">

                        <h5 class="text-muted">About </h5>
                        <p>Admin About </p>
                    </div><!-- mb-md Ends -->
                </div><!-- panel-body Ends -->
            </div><!-- panel Ends -->
        </div><!-- col-md-4 Ends -->
    </div><!-- 3 row Ends -->
    </div>
    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>

</body>

</html>

<?php } ?>
