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
                        <span class="font-medium px-4">ORDER STATUS</span>

                        <!-- checkboxes -->
                        <div class="flex flex-col gap-3 px-4 mt-3 pb-3 border-b">
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="ontw" class="h-4 w-4">
                                <label for="ontw">On the way</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="devlivered" class="h-4 w-4">
                                <label for="devlivered">Delivered</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="cancelled" class="h-4 w-4">
                                <label for="cancelled">Cancelled</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="returned" class="h-4 w-4">
                                <label for="returned">Returned</label>
                            </div>
                        </div>
                        <!-- checkboxes -->

                    </div>
                    <!-- order status checkboxes -->

                    <!-- order time checkboxes -->
                    <div class="flex flex-col pb-2 text-sm">
                        <span class="font-medium px-4">ORDER TIME</span>

                        <!-- checkboxes -->
                        <div class="flex flex-col gap-3 px-4 mt-3 pb-3">
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="last30" class="h-4 w-4">
                                <label for="last30">Last 30 days</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="2020" class="h-4 w-4">
                                <label for="2020">2020</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="2019" class="h-4 w-4">
                                <label for="2019">2019</label>
                            </div>
                            <div class="flex gap-2 items-center">
                                <input type="checkbox" name="" id="older" class="h-4 w-4">
                                <label for="older">Older</label>
                            </div>
                        </div>
                        <!-- checkboxes -->

                    </div>
                    <!-- order time checkboxes -->


                </div>
                <!-- nav tiles -->

            </div>
            <!-- sidebar column  -->

            <!-- orders column -->
            <div class="flex-1">

                <!-- orders container -->
                <div class="flex flex-col gap-3 sm:mr-4 overflow-hidden sm:p-1">

                    <!-- searchbar -->
                    <div class="flex justify-between items-center mx-1 sm:mx-0 sm:w-10/12 bg-white border rounded">
                        <input type="text" name="search" id="" placeholder="Search your orders here" class="p-2 text-sm outline-none flex-1 rounded-l">
                        <button class="text-sm px-1 sm:px-4 py-2 text-white bg-primary-blue rounded-r flex items-center gap-0.5">
                            <span class="material-icons md-22">search</span>
                            Search Orders
                        </button>
                    </div>
                    <!-- searchbar -->

                    <?php 
                    foreach(array_reverse($Cart->getData(getUserId($user),'orders')) as $order):
                    // echo var_dump($order);
                    // $orders = $product->getProducts($order['product_id']);

                    // array_map(function($order) use($Cart, $user){
                    ?>

                    <!-- ordered item -->
                    <a class="flex flex-col sm:flex-row p-4 items-start bg-white border rounded gap-2 sm:gap-0 hover:shadow-lg" href="#">
                        <!-- image container -->
                        <div class="w-full sm:w-32 h-20">
                            <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="assets/images/products/<?php echo $order['product_img'] ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
                        </div>
                        <!-- image container -->

                        <!-- order desc container -->
                        <div class="flex flex-col sm:flex-row justify-between w-full">

                            <div class="flex flex-col gap-1 overflow-hidden">
                                <p class="text-sm"><?php if(strlen($order['product_title']) > 50) {echo substr($order['product_title'],0,50)."...";} else { echo $order['product_title']; } ?></p> 
                                <p class="text-xs text-gray-500 mt-2">Color: <?php echo $order['product_color'] ?></p>
                                <p class="text-xs text-gray-500">Seller: <?php echo $order['product_seller'] ?></p>
                            </div>
    
                            <div class="flex flex-col sm:flex-row mt-1 sm:mt-0 gap-2 sm:gap-20 sm:w-1/2">
                                <p class="text-sm">₹<?php echo number_format($order['product_price']) ?></p>
        
                                <div class="flex flex-col gap-1.5">
                                    <p class="text-sm font-medium flex items-center gap-2">
                                        <span class="material-icons text-primary-green md-14">circle</span>
                                        Ordered on <?php echo date_format(date_create($order['order_on']), 'M d') ?>
                                    </p>
                                    <p class="text-xs ml-1">Your item has been ordered</p>
                                </div>
                            </div>

                        </div>
                        <!-- order desc container -->

                    </a>
                    <!-- ordered item -->

                    <?php
                    // }, $orders);
                    endforeach;
                    ?>

                </div>
                <!-- orders container -->
                
            </div>
            <!-- orders column -->
        </div>
        <!-- row -->

    </main>
    <!-- main sections starts -->