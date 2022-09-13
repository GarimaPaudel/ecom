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


</head>

<body>
    <div class="sidebar">
        <nav class="navbar navbar-inverse navbar-fixed-top" style="background: black">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a href="index.php?dashboard" class="navbar-brand active">Admin Panel</a>

            </div>
            <ul class="nav navbar-right top-nav">
                <!--navbar-right top-nav start -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa-solid fa-user"></i><?php echo $admin_name ?>
                    </a>

                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?user_profile?id=<?php echo $admin_id ?>
                                <i class="fa-solid fa-user"></i>Profile
                            </a>

                        <li>
                            <a href="index.php?view_product">
                                <i class="fa-solid fa-leafy-green"></i>Products
                                <span class="badge"><?php echo $count_pro ?></span> 
                            </a>
                        </li>
                        <li>
                            <a href="index.php?view_customer">
                                <i class="fa-solid fa-user"></i>Customer
                                <span class="badge"><?php echo $count_cust ?></span> 
                            </a>
                        </li>
                        <li>
                            <a href="index.php?pro_cat">
                                <i class="fa-solid fa-user"></i>Product Categories
                                <span class="badge"><?php echo $count_p_cat ?></span>
                            </a>
                        </li>


                </li>
                <li class="divider"> </li>
                <li>
                    <a href="logout.php">Log Out
                        <i class="fa-solid fa-power-off"></i>
                    </a>
            </ul>
            </li>


            </ul>
            <!--navbar-right top-nav end -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="nav-item">
                        <a href="index.php?dashboard">
                            <i class="fa fa-fw fa-dashboard"></i>Dashboard</a>
                    </li>


                    <li>
                        <!--Start Here -->
                        <a href="#" data-toggle="collapse" data-target="#products">
                            <i class="fa-solid fa-table-cells"></i>
                            Products <i class="fa-solid fa-caret-down"></i></a>


                        <ul id="products" class="collapse">
                            <li>
                                <a href="index.php?insert_product">Insert Product</a>
                            </li>
                            <li>
                                <a href="index.php?view_product">View Product</a>
                            </li>
                        </ul>

                    </li><!-- end here-->

                    <li>
                        <!--Start Here -->
                        <a href="#" data-toggle="collapse" data-target="#products_cat">
                            <i class="fa-solid fa-table-cells"></i>
                            Product Categories<i class="fa-solid fa-caret-down"></i></a>


                        <ul id="products_cat" class="collapse">
                            <li>
                                <a href="index.php?insert_product_cat">Insert Product Categories</a>
                            </li>
                            <li>
                                <a href="index.php?view_product_cat">View Product Categories</a>
                            </li>
                        </ul>

                    </li><!-- end here-->
                    <li>
                        <!--Start Here -->
                        <a href="#" data-toggle="collapse" data-target="#category">
                            <i class="fa-solid fa-table-cells"></i>
                            Category <i class="fa-solid fa-caret-down"></i></a>


                        <ul id="category" class="collapse">
                            <li>
                                <a href="index.php?insert_category">Insert Categories</a>
                            </li>
                            <li>
                                <a href="index.php?view_category">View Categories</a>
                            </li>
                        </ul>

                    </li><!-- end here-->
                    <li>
                        <!--Start Here -->
                        <a href="#" data-toggle="collapse" data-target="#slider">
                            <i class="fa-solid fa-table-cells"></i>
                            Slider <i class="fa-solid fa-caret-down"></i></a>


                        <ul id="slider" class="collapse">
                            <li>
                                <a href="index.php?insert_slider">Insert Slider</a>
                            </li>
                            <li>
                                <a href="index.php?view_slider">View Slider</a>
                            </li>
                        </ul>

                    </li><!-- end here-->

                    <li>
                        <a href="index.php?view_customer">
                            <i class="fa-solid fa-list"></i>View Customer</a>
                    </li>
                    <li>
                        <a href="index.php?view_order">
                            <i class="fa-solid fa-pen-to-square"></i>View Order</a>
                    </li>
                    <li>
                        <a href="index.php?view_payments">
                            <i class="fa-solid fa-money-check-dollar"></i>View Payment</a>
                    </li>
                    <li>
                        <!--Start Here -->
                        <a href="#" data-toggle="collapse" data-target="#users">
                            <i class="fa-solid fa-table-cells"></i>
                            Users <i class="fa-solid fa-caret-down"></i></a>


                        <ul id="users" class="collapse">
                            <li>
                                <a href="index.php?insert_users">Insert User</a>
                            </li>
                            <li>
                                <a href="index.php?view_users">View User</a>
                            </li>
                            <li>
                                <a href="index.php?user_profile?id= <?php echo $admin_id ?>">Edit Profile</a>
                            </li>
                        </ul>

                    </li><!-- end here-->


                </ul>

            </div>

        </nav>
    </div>

    
</body>

</html>
<?php } ?>
