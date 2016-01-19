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
                getProd();
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