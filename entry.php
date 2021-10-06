<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Product Entry!</title>
  </head>
  <body class="bg-dark text-white">

<form action="entry.php" method="post" class="m-5">
    <div class="container">

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Title</label>
            <input required name="product_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Rating Star Count</label>
          <input required name="product_rating_star_count" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Image</label>
            <input required name="product_img" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Image Alt</label>
          <input required name="product_img_alt" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Review Count</label>
            <input required name="product_review_count" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Price</label>
          <input required name="product_price" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Cutted Price</label>
            <input required name="product_cutted_price" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Seller</label>
          <input required name="product_seller" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Model</label>
            <input required name="product_model" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Rating Count</label>
          <input required name="product_rating_count" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Brand Logo</label>
            <input required name="product_brand_logo" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Desc</label>
          <input required name="product_desc" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Color</label>
            <input required name="product_color" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Sales Package</label>
          <input required name="product_sales_package" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Warranty Summary</label>
            <input required name="product_warranty_summary" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Domestic Warranty</label>
          <input required name="product_domestic_warranty" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Covered in Warranty</label>
            <input required name="product_warranty_covered" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Not Covered in Warrantyy</label>
          <input required name="product_warranty_ncovered" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Generic Name</label>
            <input required name="product_generic" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Manufactured By</label>
          <input required name="product_manf" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Country of Origin</label>
            <input required name="product_origin" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Highlights Array</label>
          <input required name="product_highlights" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <div class="d-flex justify-content-between">
        <div class="mb-3 col-5">
            <label for="formGroupExampleInput" class="form-label">Product Color 1</label>
            <input required name="product_color1" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
        </div>
        <div class="mb-3 col-5">
          <label for="formGroupExampleInput2" class="form-label">Product Color 2</label>
          <input required name="product_color2" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder">
        </div>
    </div>

    <button type="submit" name="submit" class="rounded p-2 btn-primary">Submit Bhai</button>

    </div>

</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>


<?php
require('database/DBController.php');

$db = new DBController();

if(isset($_POST['submit'])){

$title = $_POST['product_title'];
$img = $_POST['product_img'];
$img_alt = $_POST['product_img_alt'];
$reviews = $_POST['product_review_count'];
$cprice = $_POST['product_cutted_price'];
$model = $_POST['product_model'];
$brand = $_POST['product_brand_logo'];
$color = $_POST['product_color'];
$warranty_summary = $_POST['product_warranty_summary'];
$covered_warranty = $_POST['product_warranty_covered'];
$ncovered_warranty = $_POST['product_warranty_ncovered'];
$generic_name = $_POST['product_generic'];
$country_origin = $_POST['product_origin'];
$color1 = $_POST['product_color1'];
$color2 = $_POST['product_color2'];
$starcount = $_POST['product_rating_star_count'];
$price = $_POST['product_price'];
$seller = $_POST['product_seller'];
$ratingcount = $_POST['product_rating_count'];
$desc = $_POST['product_desc'];
$sales_package = $_POST['product_sales_package'];
$domesticwarranty = $_POST['product_domestic_warranty'];
$manfby = $_POST['product_manf'];
$highlights = $_POST['product_highlights'];


// $con = mysqli_connect('localhost','root','','flipkart_clone');

$query = "INSERT INTO `products` (
`product_title`,
`product_img`,
`product_img_alt`, 
`product_rating_star`, 
`product_review`, 
`product_price`, 
`product_cutted_price`, 
`product_seller`, 
`product_model`, 
`product_rating_count`, 
`product_brand_logo`, 
`product_highlights`, 
`product_desc`, 
`product_color`, 
`product_color_thumb1`, 
`product_color_thumb2`, 
`product_sales_package`, 
`product_generic_name`, 
`product_manufactured_by`, 
`product_origin_country`, 
`product_warranty_summary`, 
`product_domestic_warranty`, 
`product_warranty_covered`, 
`product_warranty_ncovered`) VALUES 
('$title', '$img', '$img_alt', '$starcount', '$reviews', '$price', '$cprice', '$seller', '$model', '$ratingcount', '$brand', '$highlights', '$desc', '$color', '$color1', '$color2', '$sales_package', '$generic_name', '$manfby', '$country_origin', '$warranty_summary', '$domesticwarranty', '$covered_warranty', '$ncovered_warranty');";

$result = mysqli_query($db->con, $query);
echo mysqli_error($db->con);
if($result){
  echo "Done Bhai!!";
} else {
  echo "error aaya bhai!";
}

}
?>




</html>