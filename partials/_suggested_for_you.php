<?php

shuffle($product_array);

// if($_SERVER['REQUEST_METHOD'] == "POST") {
//     if(isset($_POST['top_sale_submit'])){
//     $userid = $_POST['user_id'];
//     $itemid = $_POST['item_id'];
//     $Cart->addToCart($userid, $itemid);
//     }
// }

?>    
    <!-- suggested for you section -->
    <section id="recommended" class="bg-white w-full shadow overflow-hidden">
        <!-- header -->
        <div class="flex px-6 py-4 justify-between items-center">
            <div class="title flex flex-col gap-0.5">
                <h1 class="text-xl font-medium">Suggested for You</h1>
                <p class="text-sm text-gray-400">Based on Your Interest</p>
            </div>
            <a href="#" class="bg-primary-blue text-xs font-medium text-white px-5 py-2.5 rounded-sm shadow-lg">VIEW ALL</a>
        </div>
        <hr>
        <!-- header -->
        
        <!-- products container -->
        <div class="flex items-center justify-between owl-carousel owl-theme p-1 relative">

        <?php
        foreach($product_array as $item){
        ?>
            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="<?php printf('%s?product_id=%s','product.php',$item['product_id']); ?>" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="assets/images/products/<?php echo $item['product_id']; ?>.png" alt="gvgW">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue"><?php if(strlen($item['product_title']) > 50) {echo substr($item['product_title'],0,50)."...";} else { echo $item['product_title']; } ?></h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
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
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>
        <?php
        }
        ?>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="#" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img class="w-full h-full object-contain" src="https://rukminim1.flixcart.com/image/312/312/jxp08sw0/water-purifier/r/z/s/eureka-forbes-aquasure-from-aquaguard-desire-ro-mc-original-imafg3hwgn8p7brg.jpeg" alt="">
                </div>
                <h2 class="text-sm mt-4 group-hover:text-primary-blue">Eureka Forbes Aquasure Desire Water Purifier Aquagaurd</h2>
                </a>
                <!-- image & product title -->

                <!-- product description -->
                <div class="flex flex-col gap-2 items-center">
                        <!-- rating badge -->
                        <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                            <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5">4.3 <i class="material-icons md-12">star</i></span>
                            <span>(7,345)</span>
                        </span>
                        <!-- rating badge -->

                        <!-- price container -->
                        <div class="flex items-center gap-1.5 text-md font-medium">
                            <span>₹16,790</span>
                            <span class="text-gray-500 line-through text-xs">₹18,890</span>
                            <span class="text-xs text-primary-green">15%&nbsp;off</span>
                        </div>
                        <!-- price container -->
                </div>
                <!-- product description -->

                <!-- wishlist badge -->
                <i class="material-icons absolute top-5 right-2 text-gray-300 cursor-pointer hover:text-red-500 md-16">favorite</i>
                <!-- wishlist badge -->

            </div>

        </div>
        <!-- products container -->
    </section>
    <!-- suggested for you section -->