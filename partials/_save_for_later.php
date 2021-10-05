<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['remove_from_save_later'])){
        $Cart->deleteCartItem($_POST['user_id'], $_POST['product_id'],'save_for_later');
    }

    if(isset($_POST['move_to_cart'])){
        $Cart->saveForLater($_POST['user_id'], $_POST['product_id'],'cart','save_for_later');
    }
}

?>


<!-- saved for later items container -->
<div class="flex flex-col mt-5 shadow bg-white">
                <span class="font-medium text-lg px-2 sm:px-8 py-4 border-b">Saved For Later (<?php echo count($Cart->getData(getUserId($user),'save_for_later')); ?>)</span>

                <?php 
                foreach($Cart->getData(getUserId($user),'save_for_later') as $item):
                    // echo var_dump($item);
                    $cart = $product->getProducts($item['product_id']);
                    $sub[] = array_map(function($item) use ($user){
                ?>

                <!-- saved for later item -->
                <div class="flex flex-col gap-3 py-5 pl-2 sm:pl-6 border-b">

                    <a class="flex flex-col sm:flex-row gap-5 items-stretch w-full group" href="product.php?product_id=<?php echo $item['product_id']; ?>">
                        <!-- product image -->
                        <div class="flex-shrink-0 sm:flex-shrink w-full sm:w-1/6 h-28">
                            <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="assets/images/products/<?php echo $item['product_img']; ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
                        </div>
                        <!-- product image -->

                        <!-- description -->
                        <div class="flex flex-col gap-1 sm:gap-5 w-full p-1 pr-6">
                            <!-- product title -->
                            <div class="flex justify-between items-start pr-5">
                                <div class="flex flex-col gap-0.5 w-11/12 sm:w-3/5">
                                    <p class="truncate group-hover:text-primary-blue"><?php if(strlen($item['product_title']) > 50) {echo substr($item['product_title'],0,50)."...";} else { echo $item['product_title']; } ?></p>
                                    <span class="text-sm text-gray-500">Seller:<?php echo $item['product_seller']; ?></span>
                                </div>
                            </div>
                            <!-- product title -->

                            <!-- price desc -->
                            <div class="flex items-baseline gap-2 text-xl font-medium">
                                <span>₹<?php echo number_format($item['product_price']); ?></span>
                                <span class="text-sm text-gray-500 line-through font-normal">₹<?php echo number_format($item['product_cutted_price']); ?></span>
                                <span class="text-sm text-primary-green"><?php calcDiscount($item['product_price'], $item['product_cutted_price']) ?>%&nbsp;off</span>
                            </div>
                            <!-- price desc -->

                        </div>
                        <!-- description -->
                    </a>

                    <!-- move to cart -->
                    <div class="flex justify-evenly sm:justify-start sm:gap-6">
                        <!-- quantity -->
                        <div class="flex gap-1 items-center">
                            <div class="w-7 h-7 text-3xl font-light bg-gray-50 text-primary-grey rounded-full border p-1 flex items-center justify-center cursor-not-allowed">-</div>
                            <input type="text" class="w-11 border outline-none text-center text-primary-grey rounded-sm py-0.5 font-medium text-sm" value="1" disabled>
                            <div class="w-7 h-7 text-xl font-light bg-gray-50 text-primary-grey rounded-full border p-1 flex items-center justify-center cursor-not-allowed">+</div>
                        </div>
                        <!-- quantity -->
                        <form method="POST">
                            <input type="hidden" name="user_id" value="<?php echo getUserId($user); ?>">
                            <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                            <button type="submit" name="move_to_cart" class="font-medium hover:text-primary-blue">MOVE TO CART</button>
                        </form>

                        <form method="POST">
                            <input type="hidden" name="user_id" value="<?php echo getUserId($user); ?>">
                            <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                            <button type="submit" name="remove_from_save_later" class="font-medium hover:text-primary-blue">REMOVE</button>
                        </form>
                    </div>
                    <!-- move to cart -->

                </div>
                <!-- saved for later item -->

                <?php
                return $item['product_price'];}, $cart);
                endforeach;
                ?>

</div>
<!-- saved for later container -->