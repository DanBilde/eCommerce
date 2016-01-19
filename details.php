<!DOCTYPE>
<?php include_once "functions/functions.php" ?>
<html>
<head>
    <title>My online shop</title>
    <link rel="stylesheet" href="styles/style.css" media="all"/>
</head>
<body>
<!-- Start of main container -->
<div class="main_wrapper">

<!-- header starts here -->
<div class="header_wrapper">
   <img id="logo" src="images/logo.png"/>
   <img  id="banner" src="images/banner.png"/>
</div> <!-- end of header -->

<!-- Navbar starts here -->
<div class="navbar">
<ul id="menu">
<li><a href="#">Home</a></li>
<li><a href="#">All products</a></li>
<li><a href="#">My Account</a></li>
<li><a href="#">Sign Up</a></li>
<li><a href="#">Shopping Cart</a></li>
<li><a href="#">Contact Us</a></li>

<div id="form">
<form method="get" action="results.php" encrtype="multipart/form-data">
<input type="text" name="user_query" placeholder="Search a product" />
<input type="submit" name="search" value="Search" />
</form>
</div>
</ul>
</div> <!-- end of navbar -->

<!-- start of content wrapper -->
<div class="content_wrapper">

<!-- start of sidebar -->
<div id="sidebar">
        <div id="sidebar_title">
            Categories
        </div>

        <ul id="cats">
        <?php
            getCats();
        ?>
        </ul>

        <div id="sidebar_title">
            Brands
        </div>

        <ul id="cats">
        <?php
            getBrands();
        ?>
        </ul>

</div> <!-- end of sidebar -->

<!-- start of content area -->
<div id="content_area">

    <div id="shopping_cart">
        <span style="float:right">Welcome, Guest! <b style="color:yellow"> Shopping Cart - </b> Total Items: Total Price: <a href="cart.php" style="color:yellow"> Go to cart </a></span>
    </div>

    <div id="products_box">
<?php

if(isset($_GET['prod_id'])) {

    $product_id = $_GET['prod_id'];

 $get_prod = "select * from products where product_id='$product_id' ";
    $run_prod = mysqli_query($conn,$get_prod);

    while($row_prod = mysqli_fetch_array($run_prod)) {

        $prod_id = $row_prod['product_id'];
        $prod_title = $row_prod['product_title'];
        $prod_price = $row_prod['product_price'];
        $prod_image = $row_prod['product_image'];
        $prod_desc= $row_prod['product_desc'];


        echo "

            <div id='single_product'>

                <h3> $prod_title</h3>

                <img src='admin_area/product_images/$prod_image' width='400px' height='300px'/>

                <p><b> $ $prod_price </b></p>

                <p> $prod_desc </p>

                 <a href='index.php' style='float:left'> Go back</a>
                <a href='index.php?prod_id=$prod_id'><button style='float:right'> Add to cart </button></a>

            </div>


        ";

    }
}

    ?>

    </div>
</div> <!-- end of content area -->

<div id="footer">
    <h2 style="text-align:center;padding-top:30px;">&copy;2016 by Dan Bilde </h2>
</div>
</div> <!-- end of content wrapper -->
</div> <!-- end of main wrapper -->

</body>
</html>