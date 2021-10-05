<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['personalInfoSubmit'])) {
        $fname = mysqli_real_escape_string($db->con, $_POST['fname']);
        $lname = mysqli_real_escape_string($db->con, $_POST['lname']);
        $email = mysqli_real_escape_string($db->con, $_POST['useremail']);
        $gender = mysqli_real_escape_string($db->con, $_POST['gender']);
        $user->updateInfo($fname, $lname, $email, $gender);
    }

    if(isset($_POST['mobileSubmit'])){
        $mobile = mysqli_real_escape_string($db->con, $_POST['mobile']);
        $email = mysqli_real_escape_string($db->con, $_POST['useremail']);
        $user->updateMobile($mobile, $email);
    }
}

?>

<!-- main sections starts -->
    <main class="w-full mt-12 sm:mt-0">

        <!-- row -->
        <div class="flex gap-3.5 sm:w-11/12 sm:mt-4 m-auto mb-7">
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
                    <a class="p-3 pl-14 bg-blue-50 text-primary-blue font-medium" href="profile.html">Profile Information</a>
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
                    <a class="p-3 pl-14 hover:bg-blue-50 hover:text-primary-blue" href="wishlist.php">My Wishlist</a>
                    </div>
                    <!-- my stuff tab -->

                    <!-- logout tab -->
                    <div class="flex items-center gap-5 px-4 py-4 border-b">
                        <span class="material-icons text-primary-blue">power_settings_new</span>
                        <a class="flex w-full justify-between font-medium text-gray-500 hover:text-primary-blue" href="#">
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
                        <a href="profile.html">Change Password</a>
                        <a href="orders.html">Track Order</a>
                        <a href="https://www.flipkart.com/helpcentre">Help Center</a>
                    </div>
                </div>
                <!-- frequenty visited tab -->
            </div>
            <!-- sidebar column  -->

            <!-- details column -->
            <div class="flex-1 overflow-hidden shadow bg-white">
                <!-- edit info container -->
                <div class="flex flex-col gap-12 m-4 sm:mx-8 sm:my-6">

                    <form method="post" id="personalInfoForm">

                        <!-- personal info -->
                        <div class="flex flex-col gap-5 items-start">
                            <span class="font-medium text-lg">Personal Information <span class="text-sm text-primary-blue font-medium ml-8 cursor-pointer" id="editPersonalBtn">Edit</span></span>
    
                            <div class="flex flex-col sm:flex-row items-center gap-3" id="personalInputs">
                                <div class="flex flex-col gap-0.5 w-64 px-3 py-1.5 rounded-sm border inputs cursor-not-allowed bg-gray-100 focus-within:border-primary-blue">
                                    <label for="fname" class="text-xs text-gray-500">First Name</label>
                                    <input type="text" name="fname" value="<?php foreach($user->getUserData($_SESSION['login']) as $users) {echo $users['first_name'];} ?>" class="text-sm outline-none border-none cursor-not-allowed text-gray-500" disabled required>
                                </div>
                                <div class="flex flex-col gap-0.5 w-64 px-3 py-1.5 rounded-sm border inputs cursor-not-allowed bg-gray-100 focus-within:border-primary-blue">
                                    <label for="lname" class="text-xs text-gray-500">Last Name</label>
                                    <input type="text" name="lname" value="<?php foreach($user->getUserData($_SESSION['login']) as $users) {echo $users['last_name'];} ?>" class="text-sm outline-none border-none cursor-not-allowed text-gray-500" disabled required>
                                </div>
                                <input type="hidden" name="useremail" value="<?php echo $_SESSION['login'] ?>">
                                <button class="hidden w-full sm:w-auto px-11 py-3 bg-primary-blue border rounded text-white font-medium hover:bg-blue-600 transition-colors duration-75" id="personalSaveBtn" type="submit" name="personalInfoSubmit">SAVE</button>
                            </div>
    
                            <!-- gender -->
                            <div class="flex flex-col gap-2">
                                <h2 class="text-sm">Your Gender</h2>
                                <div class="flex items-center gap-8" id="radioInput">
                                    <div class="flex items-center gap-4 inputs text-gray-500 cursor-not-allowed">
                                    <input type="radio" name="gender" value="male" <?php if(isMale($user)){echo "checked";} ?> id="male" class="h-4 w-4 cursor-not-allowed" disabled required>
                                    <label for="male" class="cursor-not-allowed">Male</label>
                                    </div>
                                    <div class="flex items-center gap-4 inputs text-gray-500 cursor-not-allowed">
                                    <input type="radio" name="gender" value="female" <?php if(!isMale($user)){echo "checked";} ?> id="female" class="h-4 w-4 cursor-not-allowed" disabled required>
                                    <label for="female" class="cursor-not-allowed">Female</label>
                                    </div>
                                </div>
                            </div>
                            <!-- gender -->
    
                        </div>
                        <!-- personal info -->

                    </form>

                    <!-- email address info -->
                    <div class="flex flex-col gap-5 items-start">
                        <span class="font-medium text-lg">Email Address 
                            <span class="text-sm text-primary-blue font-medium ml-3 sm:ml-8 cursor-pointer">Edit</span>
                            <a class="text-sm text-primary-blue font-medium ml-3 sm:ml-8" href="#">Change Password</a>
                        </span>

                        <div class="flex items-center gap-3">
                            <div class="flex flex-col gap-0.5 sm:w-64 px-3 py-1.5 rounded-sm border bg-gray-100 cursor-not-allowed focus-within:border-primary-blue" id="emailInputs">
                                <label for="email" class="text-xs text-gray-500 cursor-not-allowed">Email Address</label>
                                <input type="email" value="<?php echo ($_SESSION['login']); ?>" class="text-sm outline-none border-none cursor-not-allowed text-gray-500" disabled>
                            </div>
                            <button class="hidden flex-1 px-11 py-3 bg-primary-blue border rounded text-white font-medium hover:bg-blue-600 transition-colors duration-75" id="emailSaveBtn">SAVE</button>
                        </div>

                    </div> 
                    <!-- email address info -->

                    <form method="post" id="mobUpdateForm">
                    <!-- mobile number info -->
                    <div class="flex flex-col gap-5 items-start">
                        <span class="font-medium text-lg">Mobile Number 
                            <span class="text-sm text-primary-blue font-medium ml-3 sm:ml-8 cursor-pointer" id="mobEditBtn">Edit</span>
                        </span>

                        <div class="flex items-center gap-3">
                            <div class="flex flex-col gap-0.5 sm:w-64 px-3 py-1.5 rounded-sm border bg-gray-100 cursor-not-allowed focus-within:border-primary-blue" id="mobInputs">
                                <label for="phone" class="text-xs text-gray-500">Mobile Number</label>
                                <input type="tel" pattern="[6-9]{1}[0-9]{9}" maxlength="10" name="mobile" value="<?php foreach($user->getUserData($_SESSION['login']) as $users) {echo $users['mobile'];} ?>" class="text-sm outline-none border-none text-gray-500 cursor-not-allowed" disabled required>
                            </div>
                            <input type="hidden" name="useremail" value="<?php echo $_SESSION['login'] ?>">
                            <button class="hidden px-11 py-3 bg-primary-blue border rounded text-white font-medium hover:bg-blue-600 transition-colors duration-75" id="mobSaveBtn" type="submit" name="mobileSubmit">SAVE</button>
                        </div>

                    </div>
                    <!-- mobile number info -->
                    </form>

                    <!-- faqs -->
                    <div class="flex flex-col gap-4 mt-4">
                        <span class="font-medium text-lg mb-2">FAQS</span>
                        <h4 class="text-sm font-medium">What happens when I update my email address (or mobile number)?</h4>
                        <p class="text-sm">Your login email id (or mobile number) changes, likewise. You'll receive all your account related communication on your updated email address (or mobile number).</p>
                   
                        <h4 class="text-sm font-medium">When will my Flipkart account be updated with the new email address (or mobile number)?</h4>
                        <p class="text-sm">It happens as soon as you confirm the verification code sent to your email (or mobile) and save the changes.</p>
                   
                        <h4 class="text-sm font-medium">What happens to my existing Flipkart account when I update my email address (or mobile number)?</h4>
                        <p class="text-sm">Updating your email address (or mobile number) doesn't invalidate your account. Your account remains fully functional. You'll continue seeing your Order history, saved information and personal details.</p>
                   
                        <h4 class="text-sm font-medium">Does my Seller account get affected when I update my email address?</h4>
                        <p class="text-sm">Flipkart has a 'single sign-on' policy. Any changes will reflect in your Seller account also.</p>
                   
                    </div>
                    <!-- faqs -->

                    <!-- deactivate account -->
                    <a class="text-sm text-primary-blue font-medium" href="#">Deactivate Account</a>
                    <!-- deactivate account -->
                </div>
                <!-- edit info container -->
                
                <img draggable="false" loading="lazy" class="w-full object-contain" src="assets/images/profile-footer.png" alt="Profile Footer">
            </div>
            <!-- details column -->
        </div>
        <!-- row -->

    </main>
    <!-- main sections starts -->

<script>
    // $('#personalInfoForm').on('submit',function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         url: "updateInfo.php",
    //         type: "post",
    //         data: $('#personalInfoForm').serialize(),
    //         success: function(result){
    //             if(result="done"){
    //                 location.reload();
    //             }
    //         }
    //     });

    // });

    // $('#mobUpdateForm').on('submit',function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         url: "updateMobile.php",
    //         type: "post",
    //         data: $('#mobUpdateForm').serialize(),
    //         success: function(result){
    //             if(result="done"){
    //                 location.reload();
    //             }
    //         }
    //     });
    // });

</script>