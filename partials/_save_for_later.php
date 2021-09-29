<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['remove_from_cart'])){
        $removedItem = $Cart->deleteCartItem($_POST['user_id'], $_POST['product_id']);
    }

    if(isset($_POST['save_for_later'])){
        $Cart->saveForLater($_POST['user_id'], $_POST['product_id']);
    }
}

?>


<!-- saved for later items container -->
<div class="flex flex-col mt-5 shadow bg-white">
                <span class="font-medium text-lg px-2 sm:px-8 py-4 border-b">Saved For Later (<?php echo count($Cart->getData(getUserId($user),'save_for_later')); ?>)</span>

                <?php 
                foreach($Cart->getData(getUserId($user),'cart') as $item):
                    // echo var_dump($item);
                    $cart = $product->getProducts($item['product_id']);
                    $subTotal[] = array_map(function($item) use ($user){
                ?>

                <!-- saved for later item -->
                <div class="flex flex-col gap-3 py-5 pl-2 sm:pl-6 border-b">

                    <div class="flex flex-col sm:flex-row gap-5 items-stretch w-full" href="#">
                        <!-- product image -->
                        <div class="flex-shrink-0 sm:flex-shrink w-full sm:w-1/6 h-28">
                            <img class="h-full w-full object-contain" src="https://rukminim1.flixcart.com/image/224/224/kh9gbrk0/computer/e/6/d/asus-na-thin-and-light-laptop-original-imafxbj7gbsraqzk.jpeg" alt="">
                        </div>
                        <!-- product image -->

                        <!-- description -->
                        <div class="flex flex-col gap-1 sm:gap-5 w-full p-1 pr-6">
                            <!-- product title -->
                            <div class="flex justify-between items-start pr-5">
                                <div class="flex flex-col gap-0.5 w-11/12 sm:w-3/5">
                                    <p class="truncate">realme 8 (Cyber Black, 128 GB) realme 8 (CyberBlack, 128 GB)</p>
                                    <span class="text-sm text-gray-500">Seller:RetailNet</span>
                                </div>
                            </div>
                            <!-- product title -->

                            <!-- price desc -->
                            <div class="flex items-baseline gap-2 text-xl font-medium">
                                <span>₹16,790</span>
                                <span class="text-sm text-gray-500 line-through font-normal">₹18,890</span>
                                <span class="text-sm text-primary-green">15%&nbsp;off</span>
                            </div>
                            <!-- price desc -->

                        </div>
                        <!-- description -->
                    </div>

                    <!-- move to cart -->
                    <div class="flex justify-evenly sm:justify-start sm:gap-6">
                        <!-- quantity -->
                        <div class="flex gap-1 items-center">
                            <div class="w-7 h-7 text-3xl font-light bg-gray-50 rounded-full border p-1 flex items-center justify-center cursor-pointer">-</div>
                            <input type="text" class="w-11 border outline-none text-center rounded-sm py-0.5 font-medium text-sm" id="qtyInput" disabled>
                            <div class="w-7 h-7 text-xl font-light bg-gray-50 rounded-full border p-1 flex items-center justify-center cursor-pointer">+</div>
                        </div>
                        <!-- quantity -->
                        <button class="font-medium hover:text-primary-blue">MOVE TO CART</button>
                        <button class="font-medium hover:text-primary-blue">REMOVE</button>
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