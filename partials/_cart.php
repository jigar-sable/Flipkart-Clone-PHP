<!-- main sections starts -->
<main class="w-full mt-20">

    <!-- row -->
    <div class="flex flex-col sm:flex-row gap-3.5 w-full sm:w-11/12 mt-0 sm:mt-4 m-auto sm:mb-7">

        <!-- cart column -->
        <div class="flex-1">

            <!-- cart items container -->
            <div class="flex flex-col shadow bg-white">
                <span class="font-medium text-lg px-2 sm:px-8 py-4 border-b">My Cart (<?php echo count($Cart->getData(getUserId($user),'cart')); ?>)</span>
                <?php 
                // function getUserId($user) {
                //     foreach($user->getUserData($_SESSION['login']) as $users) { return $users['id']; }
                // }
                // echo getUserId($user);

                foreach($Cart->getData(getUserId($user),'cart') as $item):
                    // echo var_dump($item);
                    $cart = $product->getProducts($item['product_id']);
                    $subTotal[] = array_map(function($item){
                ?>

                <!-- cart item -->
                <div class="flex flex-col gap-3 py-5 pl-2 sm:pl-6 border-b overflow-hidden">

                    <div class="flex flex-col sm:flex-row gap-5 items-stretch w-full" href="#">
                        <!-- product image -->
                        <div class="w-full sm:w-1/6 h-28 flex-shrink-0 sm:flex-shrink">
                            <img class="h-full w-full object-contain" src="assets/images/products/<?php echo $item['product_id']; ?>.png" alt="">
                        </div>
                        <!-- product image -->

                        <!-- description -->
                        <div class="flex flex-col sm:gap-5 w-full p-1 pr-6">
                            <!-- product title -->
                            <div class="flex flex-col sm:flex-row justify-between items-start pr-5 gap-1 sm:gap-0">
                                <div class="flex flex-col gap-0.5 w-11/12 sm:w-3/5">
                                    <p class="truncate"><?php echo $item['product_title']; ?></p>
                                    <span class="text-sm text-gray-500">Seller: <?php echo $item['product_seller']; ?></span>
                                </div>

                                <div class="flex flex-col sm:gap-2">
                                    <p class="text-sm">Delivery by Mon Sep 27 | <span class="text-primary-green">Free</span> <span class="line-through">₹40</span></p>
                                    <span class="text-xs text-gray-500">7 Days Replacement Policy</span>
                                </div>

                            </div>
                            <!-- product title -->

                            <!-- price desc -->
                            <div class="flex items-baseline gap-2 text-xl font-medium">
                                <span>₹<?php echo number_format($item['product_price']); ?></span>
                                <span class="text-sm text-gray-500 line-through font-normal">₹<?php echo number_format($item['product_cutted_price']); ?></span>
                                <span class="text-sm text-primary-green">15%&nbsp;off</span>
                            </div>
                            <!-- price desc -->

                        </div>
                        <!-- description -->
                    </div>

                    <!-- save for later -->
                    <div class="flex justify-evenly sm:justify-start sm:gap-6">
                        <!-- quantity -->
                        <div class="flex gap-1 items-center">
                            <div class="w-7 h-7 text-3xl font-light bg-gray-50 rounded-full border p-1 flex items-center justify-center cursor-pointer" id="qtyDown">-</div>
                            <input type="text" class="w-11 border outline-none text-center rounded-sm py-0.5 font-medium text-sm" id="qtyInput" value="1" disabled>
                            <div class="w-7 h-7 text-xl font-light bg-gray-50 rounded-full border p-1 flex items-center justify-center cursor-pointer" id="qtyUp">+</div>
                        </div>
                        <!-- quantity -->
                        <button class="font-medium hover:text-primary-blue">SAVE FOR LATER</button>
                        <button class="font-medium hover:text-primary-blue">REMOVE</button>
                    </div>
                    <!-- save for later -->

                </div>
                <!-- cart item -->

                <?php
                return $item['product_price'];}, $cart);
                endforeach;
                ?>
                
                <!-- place order btn -->
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center px-2 sm:px-6 py-4 gap-2 sm:gap-0">
                    <div class="flex flex-col gap-1">
                        <p class="font-medium">Delivery Address :</p>
                        <span class="text-sm">B-106, Shreenathji Park, Chanod, Vapi, Gujarat - <span class="font-medium">396195</span></span>
                    </div>
                    <button class="w-full sm:w-auto px-16 py-3 font-medium text-white bg-primary-orange shadow rounded-sm">PLACE ORDER</button>
                </div>
                <!-- place order btn -->

            </div>
            <!-- cart items container -->

            <!-- saved for later items container -->
            <div class="flex flex-col mt-5 shadow bg-white">
                <span class="font-medium text-lg px-2 sm:px-8 py-4 border-b">Saved For Later (9)</span>

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

            </div>
            <!-- saved for later container -->
            
        </div>
        <!-- cart column -->

        <!-- price sidebar column  -->
        <div class="flex sticky top-16 sm:h-screen flex-col sm:w-4/12 sm:px-1">

            <!-- nav tiles -->
            <div class="flex flex-col bg-white rounded-sm shadow">
                <h1 class="px-6 py-3 border-b font-medium text-gray-500">PRICE DETAILS</h1>

                <div class="flex flex-col gap-4 p-6 pb-3">
                    <p class="flex justify-between">Price (1 item) <span>₹85,988</span></p>
                    <p class="flex justify-between">Discount <span class="text-primary-green">- ₹10,000</span></p>
                    <p class="flex justify-between">Delivery Charges <span class="text-primary-green">FREE</span></p>

                    <div class="border border-dashed"></div>
                    <p class="flex justify-between text-lg font-medium">Total Amount <span>₹75,998</span></p>
                    <div class="border border-dashed"></div>

                    <p class="font-medium text-primary-green">You will save ₹10,000 on this order</p>

                </div>
                
            </div>
            <!-- nav tiles -->

        </div>
        <!-- price sidebar column  -->
    </div>
    <!-- row -->

</main>
<!-- main sections ends -->