<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['add_to_cart'])){
        $userid = $_POST['user_id'];
        $productid = $_POST['product_id'];
        $Cart->addToCart($userid, $productid);
    }

    if(isset($_POST['buy_now'])){
        $userid = $_POST['user_id'];
        $productid = $_POST['product_id'];
        $Cart->buyNow($userid, $productid);
    }
}

if(isset($_GET['product_id'])){
$product_id = $_GET['product_id'];
} else {
    header('location:index.php');
}
foreach($product->getData() as $item):
    if($item['product_id'] == $product_id):
?>
    
    <!-- main sections starts -->
    <main class="mt-12 sm:mt-0">
    
    <!-- product image & description container -->
    <div class="w-full flex flex-col sm:flex-row bg-white sm:p-2 relative">

        <!-- image wrapper -->
        <div class="w-full sm:w-2/5 sm:sticky top-16 sm:h-screen">
            <!-- imgbox -->
            <div class="flex flex-col gap-3 m-3">
                <div class="image-box w-full h-96 p-4 border">
                    <img draggable="false" loading="lazy" class="productImg w-full h-full object-contain" src="assets/images/products/<?php echo $item['product_img']; ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
                </div>

                <div class="w-full flex gap-3">
                    <!-- add to cart btn -->
                    <form method="POST" class="w-full">
                    <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                    <input type="hidden" name="user_id" value="<?php foreach($user->getUserData($_SESSION['login']) as $users) { echo $users['id']; }?>">
                    <?php
                    function inCart($item, $Cart, $user) {
                        if(in_array($item['product_id'], $Cart->getCartIds($Cart->getData(getUserId($user),'cart')) ?? [])){
                            return true;
                        } else {
                            return false;
                        }
                    }
                        if(inCart($item, $Cart, $user)){
                        
                        echo '<a href="cart.php" class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-yellow rounded-sm shadow">
                        <span class="material-icons">shopping_cart</span>
                        GO TO CART
                        </a>';
                        
                        } else {
                        
                        echo '<button class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-yellow rounded-sm shadow" type="submit" name="add_to_cart">
                        <span class="material-icons">shopping_cart</span>
                        ADD TO CART
                        </button>';
                        
                        }
                    ?>
                    <!-- <a href="cart.php" class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-yellow rounded-sm shadow">
                        <span class="material-icons">shopping_cart</span>
                        GO TO CART
                    </a> -->

                    <!-- <button class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-yellow rounded-sm shadow" type="submit" name="add_to_cart">
                        <span class="material-icons">shopping_cart</span>
                        ADD TO CART
                    </button> -->
                    </form>
                    <!-- add to cart btn -->

                    <!-- buy now btn -->
                    <form method="POST" class="w-full">
                    <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                    <input type="hidden" name="user_id" value="<?php foreach($user->getUserData($_SESSION['login']) as $users) { echo $users['id']; }?>">
                    <?php
                    if(inCart($item, $Cart, $user)){
                        
                        echo '<a href="cart.php" class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-orange rounded-sm shadow">
                        <span class="material-icons">flash_on</span>
                        BUY NOW
                        </a>';
                        
                        } else {
                        
                        echo '<button type="submit" name="buy_now" class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-orange rounded-sm shadow">
                        <span class="material-icons">flash_on</span>
                        BUY NOW
                        </button>';
                        
                        }
                    ?>
                    <!-- <button type="submit" name="buy_now" class="p-4 w-full flex items-center justify-center gap-2 text-white bg-primary-orange rounded-sm shadow">
                        <span class="material-icons">flash_on</span>
                        BUY NOW
                    </button> -->
                    </form>
                    <!-- buy now btn -->
                </div>

            </div>
            <!-- imgbox -->
        </div>
        <!-- image wrapper -->

        <!-- product desc wrapper -->
        <div class="flex-1 py-2 px-3">

        <!-- whole product description -->
        <div class="flex flex-col gap-2 mb-4">

            <h2 class="text-lg"><?php echo $item['product_title']; ?></h2>
            <!-- rating badge -->
            <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5"><?php echo $item['product_rating_star']; ?> <i class="material-icons md-12">star</i></span>
                <span><?php echo number_format($item['product_rating_count']); ?> Ratings & <?php echo number_format($item['product_review']); ?> Reviews</span>
            </span>
            <!-- rating badge -->

            <!-- price desc -->
            <span class="text-primary-green text-sm font-medium">Special Price</span>
            <div class="flex items-baseline gap-2 text-2xl font-medium">
                <span>₹<?php echo number_format($item['product_price']); ?></span>
                <span class="text-base text-gray-500 line-through">₹<?php echo number_format($item['product_cutted_price']); ?></span>
                <span class="text-base text-primary-green"><?php calcDiscount($item['product_price'], $item['product_cutted_price']) ?>%&nbsp;off</span>
            </div>
            <!-- price desc -->

            <!-- banks offers -->
            <p class="text-sm font-medium">Available offers</p>

            <p class="text-sm flex items-center gap-1">
                <span class="material-icons md-20 text-primary-lightGreen">local_offer</span>
                <span class="font-medium ml-2">Bank Offer</span> 10% off on Axis Bank Credit Cards, up to ₹1500. On orders of ₹5000 and above <a class="text-primary-blue font-medium" href="#">T&C</a>
            </p>
            <p class="text-sm flex items-center gap-1">
                <span class="material-icons md-20 text-primary-lightGreen">local_offer</span>
                <span class="font-medium ml-2">Bank Offer</span> 15% Instant discount on first Flipkart Pay Later order of 500 and above <a class="text-primary-blue font-medium" href="#">T&C</a>
            </p>
            <p class="text-sm flex items-center gap-1">
                <span class="material-icons md-20 text-primary-lightGreen">local_offer</span>
                <span class="font-medium ml-2">Special Price</span> Extra ₹2200 off(price inclusive of discount)<a class="text-primary-blue font-medium" href="#">T&C</a>
            </p>
            <p class="text-sm flex items-center gap-1">
                <span class="material-icons md-20 text-primary-lightGreen">local_offer</span>
                <span class="font-medium ml-2">Bank Offer</span> Flat ₹4000 off on Flipkart Axis Bank Credit Cards. On order of ₹80,000 and above <a class="text-primary-blue font-medium" href="#">T&C</a>
            </p>
            <!-- banks offers -->

            <!-- warranty & brand -->
            <div class="flex gap-8 mt-2 items-center text-sm">
                <img draggable="false" loading="lazy" class="w-20 h-8 border p-1 object-contain" src="assets/images/brands/<?php echo $item['product_brand_logo']; ?>.png" alt="">
                <span><?php echo $item['product_domestic_warranty']; ?> <a class="font-medium text-primary-blue" href="#">Know More</a></span>
            </div>
            <!-- warranty & brand -->

            <!-- delivery details -->
            <div class="flex gap-16 mt-4 items-center text-sm font-medium">
                <p class="text-gray-500">Delivery</p>
                <span>Delivery by 21 Oct, Thursday</span>
            </div>
            <!-- delivery details -->

            <!-- color selection -->
            <div class="flex gap-20 mt-4 items-stretch text-sm font-medium">
                <p class="text-gray-500">Color</p>
                <ul class="flex gap-3">
                    <li class="w-14 h-14 border cursor-pointer hover:border-primary-blue"><img draggable="false" loading="lazy" class="colorImg w-full h-full object-contain" src="<?php echo $item['product_color_thumb1']; ?>" alt=""></li>
                    <li class="w-14 h-14 border cursor-pointer hover:border-primary-blue"><img draggable="false" loading="lazy" class="colorImg w-full h-full object-contain" src="<?php echo $item['product_color_thumb2']; ?>" alt=""></li>
                </ul>
            </div>
            <!-- color selection -->


            <!-- highlights & services details -->
            <div class="flex flex-col sm:flex-row justify-between">
            <!-- highlights details -->
            <div class="flex gap-16 mt-4 items-stretch text-sm">
                <p class="text-gray-500 font-medium">Highlights</p>
                <ul class="list-disc flex flex-col gap-2 w-64">
                    <?php
                    foreach(highlightSplit($item['product_highlights']) as $highlight):
                    ?>
                    <li>
                        <p><?php echo $highlight ?></p>
                    </li>
                    <?php
                    endforeach;
                    ?>
                </ul>
            </div>
            <!-- highlights details -->

            <!-- services details -->
            <div class="flex gap-16 mt-4 mr-6 items-stretch text-sm">
                <p class="text-gray-500 font-medium">Services</p>
                <ul class="flex flex-col gap-2">
                    <li>
                        <p class="flex items-center gap-3"><span class="material-icons md-18 text-primary-blue">verified_user</span> <?php echo $item['product_domestic_warranty']; ?></p>
                    </li>
                    <li>
                        <p class="flex items-center gap-3"><span class="material-icons md-18 text-primary-blue">cached</span> 7 Days Replacement Policy</p>
                    </li>
                    <li>
                        <p class="flex items-center gap-3"><span class="material-icons md-18 text-primary-blue">paid</span> Cash on Delivery available</p>
                    </li>
                </ul>
            </div>
            <!-- services details -->
            </div>
            <!-- highlights & services details -->
            
            <!-- seller details -->
            <div class="flex gap-16 mt-4 items-center text-sm font-medium">
                <p class="text-gray-500">Seller</p>
                <a class="font-medium text-primary-blue ml-3" href="#"><?php echo $item['product_seller'] ?></a>
            </div>
            <!-- seller details -->

            <!-- flipkart plus banner -->
            <div class="sm:w-1/2 mt-4 border">
                <img draggable="false" loading="lazy" class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/lockin/763/305/images/promotion_banner_v2_active.png" alt="">
            </div>
            <!-- flipkart plus banner -->

            <!-- description details -->
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-14 mt-4 items-stretch text-sm">
                <p class="text-gray-500 font-medium">Description</p>
                <span><?php echo $item['product_desc']; ?></span>
            </div>
            <!-- description details -->

    
            <!-- border box -->
            <div class="w-full mt-6 rounded-sm border flex flex-col">
                <h1 class="px-6 py-4 border-b text-2xl font-medium">Product Description</h1>

                <!-- info rows -->
                <div class="flex flex-col sm:flex-row gap-2 sm:gap-7 p-6 items-stretch border-b">
                    <img draggable="false" loading="lazy" class="h-40 sm:h-24 w-full sm:w-44 object-contain" src="https://rukminim1.flixcart.com/image/200/200/cms-rpd-images/919a81e496a24548bbcec5d90c2960ff_16d4db6631c_image.jpeg" alt="">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-lg">Lorem, ipsum dolor</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corporis provident labore soluta vero amet reprehenderit magnam fuga error quod, cupiditate voluptate modi officia ullam nemo. Optio dignissimos laborum ut.</p>
                    </div>
                </div>

                <div class="flex flex-col gap-2 sm:gap-7 sm:flex-row-reverse p-6 items-stretch">
                    <img draggable="false" loading="lazy" class="h-40 sm:h-24 w-full sm:w-44 object-contain" src="https://rukminim1.flixcart.com/image/200/200/cms-rpd-images/919a81e496a24548bbcec5d90c2960ff_16d4db6631c_image.jpeg" alt="">
                    <div class="flex flex-col gap-2">
                        <h2 class="text-lg">Lorem ipsum dolor sit</h2>
                        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt doloribus repellat delectus. Corrupti voluptates, laudantium est veritatis blanditiis qui facilis eligendi modi odio accusamus explicabo!</p>
                    </div>
                </div>
                <!-- info rows -->
            </div>
            <!-- border box -->

            <!-- specifications border box -->
            <div class="w-full mt-4 pb-4 rounded-sm border flex flex-col">
                <h1 class="px-6 py-4 border-b text-2xl font-medium">Specifications</h1>
                <h1 class="px-6 py-3 text-lg">General</h1>

                <!-- specs list -->
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Model Name</p>
                    <p class="flex-1"><?php echo $item['product_model'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Color</p>
                    <p class="flex-1"><?php echo $item['product_color'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Sales Package</p>
                    <p class="flex-1"><?php echo $item['product_sales_package'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Generic Name</p>
                    <p class="flex-1"><?php echo $item['product_generic_name'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Manufactured By</p>
                    <p class="flex-1"><?php echo $item['product_manufactured_by'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Country of Origin</p>
                    <p class="flex-1"><?php echo $item['product_origin_country'] ?></p>
                </div>
                <!-- specs list -->

            </div>
            <!-- specifications border box -->

            <!-- specifications border box -->
            <div class="w-full mt-4 pb-4 rounded-sm border flex flex-col">
                <h1 class="px-6 py-4 border-b text-2xl font-medium">Warranty</h1>

                <!-- specs list -->
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Domestic Warranty</p>
                    <p class="flex-1"><?php echo $item['product_domestic_warranty'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Warranty Summary</p>
                    <p class="flex-1"><?php echo $item['product_warranty_summary'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Covered in Warranty</p>
                    <p class="flex-1"><?php echo $item['product_warranty_covered'] ?></p>
                </div>
                <div class="px-6 py-2 flex items-start text-sm">
                    <p class="text-gray-500 w-3/12">Not Covered in Warranty</p>
                    <p class="flex-1"><?php echo $item['product_warranty_ncovered'] ?></p>
                </div>
                <!-- specs list -->

            </div>
            <!-- specifications border box -->
            
        </div>

        </div>
        <!-- product desc wrapper -->

    </div>
    <!-- product image & description container -->

<?php
endif;
endforeach;
?>

    <div class="flex flex-col gap-3 px-2 mt-6">
    <?php
    include '_you_may_like.php';
    include '_top_rated.php';
    ?>

    </main>
    <!-- main sections starts -->