<?php

// Create connection
$conn =  mysqli_connect ("localhost","newuser","qwerty","ecommerce");

// Check connection

if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
}
echo "Connected succesfully to the db";

//getting the categories from the database

function getCats() {

    global $conn;

    $get_cats = "SELECT * FROM categories";

    $run_cats = mysqli_query($conn,$get_cats);

    while($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title= $row_cats['cat_title'];

        echo "<li><a href='#'>$cat_title</a></li>";

    }

}

function getBrands(){

    global $conn;

    $get_brands = "SELECT * FROM brands";

    $run_brands = mysqli_query($conn,$get_brands);

    while($row_brands = mysqli_fetch_array($run_brands)){

        $brand_id = $row_brands['brand_id'];
        $brand_title= $row_brands['brand_title'];

        echo "<li><a href='#'>$brand_title</a></li>";

    }

}

function getProd(){
    global $conn;

    $get_prod = "select * from products order by RAND() LIMIT 0,6";
    $run_prod = mysqli_query($conn,$get_prod);

    while($row_prod = mysqli_fetch_array($run_prod)) {

        $prod_id = $row_prod['product_id'];
        $prod_cat = $row_prod['product_cat'];
        $prod_brand = $row_prod['product_brand'];
        $prod_title = $row_prod['product_title'];
        $prod_price = $row_prod['product_price'];
        $prod_image = $row_prod['product_image'];


        echo "

            <div id='single_product'>

                <h3> $prod_title</h3>

                <img src='admin_area/product_images/$prod_image' width='180px' height='180px'/>

                <p><b> $ $prod_price </b></p>

                <a href='details.php?prod_id=$prod_id' style='float:left'> Details </a>
                <a href='index.php?prod_id=$prod_id'><button style='float:right'> Add to cart </button></a>

            </div>


        ";

    }
}

?>