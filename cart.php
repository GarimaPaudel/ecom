<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegetable Supplier</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div id="top" ><!-- Top bar start-->
        <div class="container"><!--container start-->
            <div class="col-md-6 offer">
                <a href="#" class="btn btn-success btn-sm">Welcome Guest</a>
                <a href="#">Shopping Cart Total Price: Rs 100, Total Items  <?php item(); ?></a> 
            </div>
            <div class="col-md-6 offer">
                <ul class="menu">
                    <li><a href="customer_registration.php">Register</a></li>

                    <li><a href="checkout.php">My Account</a></li>
                    <li><a href="cart.php">Go To Cart</a></li>
                    <li><a href="login.php">Login</a></li>

                </ul>

             </div>
        </div><!--container end-->
    </div><!--top bar end-->
    
    
    <div class="navbar navbar-default" id="navbar"><!--navbar navbar-default start -->
        <div class="container">    
            <div class="navbar-header"><!-- navbar-header start-->
                    <a class="navbar-brand home" href="index.php">
                        <img src="images/logo.jpg" alt="logo" class="hidden-xs">
                        <img src="images/logo.jpg" alt="logo" class="visible-xs">

                    </a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                    <span class="sr-only">Toggle</span>
                    <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only"></span>
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
            </div><!-- navbar-header end-->
            
            <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse start--> 
                <div class="padding-nav"><!-- padding-nav started-->
                    <ul class="nav navbar-nav navbar-left">
                        <li >
                        <a href="index.php" >Home</a>  
                        </li>
                        <li>
                        <a href="shop.php" >Shop</a>  
                        </li>
                        <li>
                        <a href="customer/my_account.php" >My Account</a>  
                        </li>
                        <li class="active">
                        <a href="cart.php" >Shopping cart</a>  
                        </li>
                        <li>
                        <a href="about.php" >About Us</a>  
                        </li>
                        <li>
                        <a href="services.php" >Services</a>  
                        </li>
                        <li>
                        <a href="contactus.php" >Contact Us</a>  
                        </li>
                </div><!-- padding-nav end-->

                <a href="cart.php" class="btn btn-primary navbar-btn right">
                <i class="fa-solid fa-cart-shopping"></i>
                    <span>  <?php item(); ?>Items In cart</span>
                </a>

                <div class="navbar-collapse collapse right"><!--navbar-collapse collapse-right start--> 
                    <button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    <span class="sr-only">Toggle Search</span>
                    </button>
                </div><!--navbar-collapse collapse-right end-->

                    <div class="collapse clearfix" id="search"> <!--collapse clearfix start-->
                    <form class="navbar-form" method="get" action="result.php">
                    <div class="input-group">
                       <input type="text" name="user_query" placeholder="Search" class="form-control" required="">
                      
                            <button type="success" value="Search" class="btn btn-primary">
                            <i class="fa-regular fa-magnifying-glass"></i>    
                            <span class="input-group-btn"></span>                                            
                            </button>
                        
                    </div>
                    </form>                      
                    </div>
                    
                
                </div> <!--collapse clearfix end-->
            </div><!-- navbar-collapse collapse end-->
        </div>    
    </div><!-- navbar navbar-default end-->


    <div id="content">
        <div class="container"><!--Container start-->
            <div class="col-md-12"><!--col-md-12 start-->
                <ul class="breadcrumb">
                    <li><a href="home.php">Home</a></li>
                    <li>Cart</li>
                </ul>
            </div><!--col-md-12 start-->

            <div class="col-md-9" id="cart">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart-form-data">
             
    <h1>Shopping Cart</h1>
    <p class="text-muted">Currently you have 2 items in your cart.</p>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th colspan="2">product</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Production Farm</th>
                    <th colspan="1">Delete</th>   
                    <th colspan="1">Sub Total</th>
</tr>
</thead>
<tbody>
    <tr>

    <td> <img src="images/cauliflower.jpg"></td>
        <td>Cauliflower</td>
        <td>2</td>
        <td>Rs.80</td>
        <td>ABC</td>
        <td><input type="checkbox" name="remove[]"></td>
        <td>Rs.160</td>
    </tr>

    <tr>
    <td> <img src="images/pumpkin.jpg"></td>
        <td>Pumpkin</td>
        <td>1</td>
        <td>Rs.50</td>
        <td>ABC</td>
        <td><input type="checkbox" name="remove[]"></td>
        <td>Rs.50</td>
    </tr>

</tbody>

<tfoot>
    <tr>
        <th colspan="5">Total</th>
        <th colspan="2">Rs.210</th>
    </tr>
</tfoot>

</table>

    </div>

<div class="box-footer">
    <div class="pull-left">
        <a href="index.php" class="btn btn-defult">
            <i class="fa fa-chevron-left"></i>Continue Shopping
        </a>

    </div>
    <div class="pull-right">
       <button class="btn btn-defult" type="submit" name="update" value="Update Cart">
        <i class="fa fa-refresh">Update Cart</i>
       </button>
       <a href="customer/my_account.php" class="btn btn-primary">
        Proceed to checkout<i class="fa fa-chevron-right"></i>
      </a>
    </div>
</div>


</form>
</div>
</div>


<div class="col-md-3">
    <div class="box" id="order-summary">
        <div class="box-header">
            <h3>Order Summary</h3>
  </div>
  <p class="text-muted">
    Delivery cost are calculated on the basis of your area.

  </p>

  <div class="table-responsive">
    <table class="table">
        <tbody>
            <tr>
                <td>Order Subtotal</td>
                <th>Rs.210</th>
            </tr>
            <tr>
                <td>Delivery Charge</td>
                <td>Rs.50</td>
            </tr>
            <tr class="total">
                <td>Total</td>
                <td>Rs.260</td>
            </tr>

        </tbody>
    </table>

  </div>

    </div>

</div>
           
            </div><!--Container end-->
    </div><!--Content end-->


     <!--footer start-->
<?php  
include("Footer/footer.php");
?>
<!--footer end--> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/828e3616f1.js" crossorigin="anonymous"></script>
</body>
</html>