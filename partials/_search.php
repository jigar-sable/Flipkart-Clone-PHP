<?php
    if(isset($_GET['q'])) {
        $search = mysqli_real_escape_string($db->con, $_GET['q']);
        // echo $search;
        // $arr = $product->searchProducts($search);
        // echo var_dump($arr);
    } else {
        header('location:index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(isset($_POST['add_to_wishlist'])){
            $userid = $_POST['user_id'];
            $productid = $_POST['product_id'];
            $Cart->addToCart($userid, $productid, 'wishlist');
        }
    }
?>

<!-- main sections starts -->
<main class="w-full mt-16 sm:mt-0">

    <!-- row -->
    <div class="flex gap-3.5 mt-2 sm:mt-6 sm:mx-3 m-auto mb-7">

        <!-- sidebar column  -->
        <div class="hidden sm:flex flex-col w-1/5 px-1">

            <!-- nav tiles -->
            <div class="flex flex-col bg-white rounded-sm shadow">

                <!-- filters header -->
                <div class="flex items-center gap-5 px-4 py-2 border-b">
                    <p class="flex w-full justify-between text-lg font-medium">Filters</p>
                </div>
                <!-- order status checkboxes -->
                <div class="flex flex-col py-3 text-sm">
                    <span class="font-medium text-xs px-4">PICK A CATEGORY</span>
                    <!-- checkboxes -->
                    <div class="flex flex-col gap-2 px-8 font-medium mt-3 pb-3">
                        <a href="#">Lorem, ipsum dolor.</a>
                        <a href="#">Lorem, ipsum dolor.</a>
                        <a href="#">Lorem, ipsum dolor.</a>
                        <a href="#">Lorem, ipsum dolor.</a>
                        <a href="#">Lorem, ipsum dolor.</a>
                    </div>
                    <!-- checkboxes -->
                </div>
                <!-- order status checkboxes -->

            </div>
            <!-- nav tiles -->

        </div>
        <!-- sidebar column  -->

        <!-- search column -->
        <div class="flex-1">

        <?php
        if($search != ""){ 
        if(count($product->searchProducts($search)) > 0) { ?>

            <!-- searches container -->
            <div class="grid grid-cols-4 overflow-hidden bg-white rounded-sm">

            <?php
                foreach($product->searchProducts($search) as $item):
            ?>

            <!-- one product -->
            <div class="flex flex-col items-start gap-2 px-4 py-6 relative hover:shadow-lg rounded-sm">
                <!-- image & product title -->
                <a href="<?php printf('%s?product_id=%s','product.php',$item['product_id']); ?>" class="flex flex-col items-center text-center group">
                <div class="w-44 h-48">
                    <img class="w-full h-full object-contain" src="assets/images/products/<?php echo $item['product_img']; ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue text-left"><?php if(strlen($item['product_title']) > 50) {echo substr($item['product_title'],0,50)."...";} else { echo $item['product_title']; } ?></h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-start">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5"><?php echo $item['product_rating_star']; ?> <i class="material-icons md-12">star</i></span>
                            <span>(<?php echo number_format($item['product_rating_count']); ?>)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹<?php echo number_format($item['product_price']); ?></span>
                            <span class="text-gray-500 line-through text-xs">₹<?php echo number_format($item['product_cutted_price']); ?></span>
                            <span class="text-xs text-primary-green"><?php calcDiscount($item['product_price'], $item['product_cutted_price']) ?>%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <form method="POST" id="wishlistForm">
                    <input type="hidden" name="user_id" value="<?php echo getUserId($user); ?>">
                    <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                    <?php
                        if(in_array($item['product_id'], $Cart->getCartIds($Cart->getData(getUserId($user),'wishlist')) ?? [])){
                            echo '<button type="submit" name="add_to_wishlist" class="wishlistBtn absolute top-6 right-6 text-gray-300" disabled>
                            <i class="material-icons cursor-pointer text-red-500 md-16">favorite</i>
                            </button>';
                        
                        } else {
                            echo "<button type='submit' name='add_to_wishlist' class='wishlistBtn absolute top-6 right-6 text-gray-300' data-id='". $item['product_id'] ."'>
                            <i class='material-icons cursor-pointer hover:text-red-500 md-16'>favorite</i>
                            </button>";
                        }
                    ?>
                </form>
                <!-- wishlist badge -->

            </div>
            <!-- one product -->

            <?php
            endforeach;
            ?>

            </div>
            <!-- searches container -->
        
        <?php } else { ?>
                <!-- search not found -->
                <div class="flex flex-col items-center justify-center gap-3 bg-white shadow-sm rounded-sm p-6 sm:p-16">
                    <img draggable="false" class="w-1/2 h-44 object-contain" src="assets/images/error-no-search-results.png" alt="Search Not Found">
                    <h1 class="text-2xl font-medium text-gray-900">Sorry, no results found!</h1>
                    <p class="text-xl text-center text-primary-grey">Please check the spelling or try searching for something else</p>
                </div>
                <!-- search not found -->
        <?php } } ?>
                
        </div>
        <!-- search column -->
    </div>
    <!-- row -->

</main>
<!-- main sections starts -->