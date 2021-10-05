<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['remove_from_wishlist'])){
        $Cart->deleteCartItem($_POST['user_id'], $_POST['product_id'], 'wishlist', 'wishlist.php');
    }
}

?>

<!-- main sections starts -->
    <main class="w-full mt-14 sm:mt-0">

        <!-- row -->
        <div class="flex gap-3.5 px-1 sm:px-0 sm:w-11/12 mt-4 m-auto mb-7">
            <!-- sidebar column  -->
            <div class="hidden sm:flex flex-col gap-4 w-1/4 px-1">

                <!-- profile card -->
                <div class="flex items-center gap-4 p-3 bg-white rounded-sm shadow">
                    <!-- user icon -->
                    <div class="w-12 h-12 rounded-full">
                        <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="https://static-assets-web.flixcart.com/www/linchpin/fk-cp-zion/img/profile-pic-male_4811a1.svg" alt="">
                    </div>
                    <!-- user icon -->
                    <div class="flex flex-col gap-1">
                        <p class="text-xs">Hello,</p>
                        <h2 class="font-medium">
                        <?php
                        foreach($user->getUserData($_SESSION['login']) as $users) {
                        echo $users['first_name'] . " " . $users['last_name'];
                        }
                        ?>
                        </h2>
                    </div>
                </div>
                <!-- profile card -->

                <!-- nav tiles -->
                <div class="flex flex-col bg-white rounded-sm shadow">

                    <!-- my orders tab -->
                    <div class="flex items-center gap-5 px-4 py-4 border-b">
                        <span class="material-icons text-primary-blue">folder</span>
                        <a class="flex w-full justify-between font-medium text-gray-500 hover:text-primary-blue" href="orders.php">
                            MY ORDERS
                            <span class="material-icons">chevron_right</span>
                        </a>
                    </div>
                    <!-- my orders tab -->

                    <!-- account settings tab -->
                    <div class="flex items-center gap-5 px-4 py-4">
                        <span class="material-icons text-primary-blue">person</span>
                        <p class="flex w-full justify-between font-medium text-gray-500">ACCOUNT SETTINGS</p>
                    </div>
                    <div class="flex flex-col pb-3 border-b text-sm">
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="profile.php">Profile Information</a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">Manage Addresses</a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">PAN Card Information</a>
                    </div>
                    <!-- account settings tab -->

                    <!-- payments tab -->
                    <div class="flex items-center gap-5 px-4 py-4">
                        <span class="material-icons text-primary-blue">account_balance_wallet</span>
                        <p class="flex w-full justify-between font-medium text-gray-500">PAYMENTS</p>
                    </div>
                    <div class="flex flex-col pb-3 border-b text-sm">
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue flex justify-between pr-6" href="#">Gift Cards <span class="font-medium text-primary-green">₹0</span></a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">Saved UPI</a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">Saved Cards</a>
                    </div>
                    <!-- payments tab -->

                    <!-- my chats tab -->
                    <div class="flex items-center gap-5 px-4 py-4 border-b">
                        <span class="material-icons text-primary-blue">chat</span>
                        <a class="flex w-full justify-between font-medium text-gray-500 hover:text-primary-blue" href="#">
                            MY CHATS
                            <span class="material-icons">chevron_right</span>
                        </a>
                    </div>
                    <!-- my chats tab -->

                    <!-- my stuff tab -->
                    <div class="flex items-center gap-5 px-4 py-4">
                        <span class="material-icons text-primary-blue">account_balance_wallet</span>
                        <p class="flex w-full justify-between font-medium text-gray-500">MY STUFF</p>
                    </div>
                    <div class="flex flex-col pb-3 border-b text-sm">
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">My Coupons</a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">My Reviews & Ratings</a>
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="#">All Notifications</a>
                    <a class="p-3 pl-14 bg-blue-50 font-medium text-primary-blue" href="#">My Wishlist</a>
                    </div>
                    <!-- my stuff tab -->

                    <!-- logout tab -->
                    <div class="flex items-center gap-5 px-4 py-4 border-b">
                        <span class="material-icons text-primary-blue">power_settings_new</span>
                        <a class="flex w-full justify-between font-medium text-gray-500 hover:text-primary-blue" href="logout.php">
                            Logout
                            <span class="material-icons">chevron_right</span>
                        </a>
                    </div>
                    <!-- logout tab -->

                </div>
                <!-- nav tiles -->

                <!-- frequenty visited tab -->
                <div class="flex flex-col items-start gap-2 p-4 bg-white rounded-sm shadow">
                    <span class="text-xs font-medium">Frequently Visited:</span>
                    <div class="flex gap-2.5 text-xs text-gray-500">
                        <a href="profile.php">Change Password</a>
                        <a href="orders.php">Track Order</a>
                        <a href="https://www.flipkart.com/helpcentre">Help Center</a>
                    </div>
                </div>
                <!-- frequenty visited tab -->
            </div>
            <!-- sidebar column  -->

            <!-- wishlist column -->
            <div class="flex-1 shadow bg-white">
                <!-- wishlist container -->
                <div class="flex flex-col">
                    <span class="font-medium text-lg px-4 sm:px-8 py-4 border-b">My Wishlist (<?php if(count($Cart->getData(getUserId($user),'wishlist')) > 0) { echo count($Cart->getData(getUserId($user),'wishlist')); } else { echo 0; } ?>)</span>

                    <?php 
                    foreach(array_reverse($Cart->getData(getUserId($user),'wishlist')) as $item):
                    // echo var_dump($item);
                    $wishlist = $product->getProducts($item['product_id']);

                    array_map(function($item) use ($user){
                    ?>
                    <!-- wishlist item -->
                    <a class="flex gap-4 items-stretch border-b p-4 sm:pb-8 w-full group" href="<?php printf('%s?product_id=%s','product.php',$item['product_id']); ?>">
                        <div class="w-1/6 h-28 p-1">
                            <img draggable="false" loading="lazy" class="h-full w-full object-contain" src="assets/images/products/<?php echo $item['product_img'] ?>.png" alt="<?php echo $item['product_img_alt']; ?>">
                        </div>

                        <!-- description -->
                        <div class="flex flex-col gap-5 w-full p-1">
                            <!-- product title -->
                            <div class="flex justify-between items-start sm:pr-5">
                                <div class="flex flex-col gap-0.5">
                                    <p class="group-hover:text-primary-blue truncate"><?php echo $item['product_title'] ?></p>
                                    <!-- rating badge -->
                                    <span class="text-sm text-gray-500 font-medium flex gap-2 items-center">
                                        <span class="text-xs px-1.5 py-0.5 bg-primary-green rounded-sm text-white flex items-center gap-0.5"><?php echo $item['product_rating_star']; ?> <i class="material-icons md-12">star</i></span>
                                        <span>(<?php echo number_format($item['product_rating_count']); ?>)</span>
                                    </span>
                                    <!-- rating badge -->
                                </div>

                                <form action="" method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo getUserId($user); ?>">
                                    <input type="hidden" name="product_id" value="<?php echo $item['product_id']; ?>">
                                    <button type="submit" name="remove_from_wishlist" class="text-gray-400 hover:text-red-500"><span class="material-icons">delete</span></button>
                                </form>
                            </div>
                            <!-- product title -->

                            <!-- price desc -->
                            <div class="flex items-center gap-2 text-2xl font-medium">
                                <span>₹<?php echo number_format($item['product_price']); ?></span>
                                <span class="text-sm text-gray-500 line-through font-normal">₹<?php echo number_format($item['product_cutted_price']); ?></span>
                                <span class="text-sm text-primary-green"><?php calcDiscount($item['product_price'], $item['product_cutted_price']) ?>%&nbsp;off</span>
                            </div>
                            <!-- price desc -->

                        </div>
                        <!-- description -->
                    </a>
                    <!-- wishlist item -->


                    <?php
                    }, $wishlist);
                    endforeach;
                    ?>

                </div>
                <!-- wishlist container -->
                
            </div>
            <!-- wishlist column -->
        </div>
        <!-- row -->

    </main>
    <!-- main sections starts -->