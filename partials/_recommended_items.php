    <!-- recommended items section -->
    <section id="recommended" class="bg-white w-full shadow overflow-hidden">
        <!-- header -->
        <div class="flex px-6 py-4 justify-between items-center">
            <div class="title flex flex-col gap-0.5">
                <h1 class="text-xl font-medium">Recommended Items</h1>
                <p class="text-sm text-gray-400">Inspired by Your Interest</p>
            </div>
            <a href="#" class="bg-primary-blue text-xs font-medium text-white px-5 py-2.5 rounded-sm shadow-lg">VIEW ALL</a>
        </div>
        <hr>
        <!-- header -->
        
        <!-- products container -->
        <div class="flex items-center justify-between owl-carousel owl-theme p-1 relative">

        <?php
        shuffle($product_array);
        foreach($product_array as $item){
        ?>
            <!-- one product -->
            <div class="flex flex-col items-center gap-2 px-2 py-6 relative">
                <!-- image & product title -->
                <a href="<?php printf('%s?product_id=%s','product.php',$item['product_id']); ?>" class="flex flex-col items-center text-center group">
                <div class="w-36 h-36">
                    <img draggable="false" loading="lazy" class="w-full h-full object-contain" src="assets/images/products/<?php echo $item['product_img']; ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
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
                <form method="POST" id="wishlistForm">
                    <input type="hidden" name="user_id" value="<?php echo getUserId($user); ?>">
                    <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                    <?php
                        if(in_array($item['product_id'], $Cart->getCartIds($Cart->getData(getUserId($user),'wishlist')) ?? [])){
                            echo '<button type="submit" name="add_to_wishlist" class="wishlistBtn absolute top-5 right-2 text-gray-300" disabled>
                            <i class="material-icons cursor-pointer text-red-500 md-16">favorite</i>
                            </button>';
                        
                        } else {
                            echo "<button type='submit' name='add_to_wishlist' class='wishlistBtn absolute top-5 right-2 text-gray-300' data-id='". $item['product_id'] ."'>
                            <i class='material-icons cursor-pointer hover:text-red-500 md-16'>favorite</i>
                            </button>";
                        }
                    ?>
                </form>
                <!-- wishlist badge -->

            </div>
        <?php
        }
        ?>

        </div>
        <!-- products container -->
    </section>
    <!-- recommended items section -->