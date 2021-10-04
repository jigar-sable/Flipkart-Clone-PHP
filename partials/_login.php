<?php

$error = false;
if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(isset($_POST['loginBtn'])) {

        $email = mysqli_real_escape_string($db->con, $_POST['email']);
        $password = mysqli_real_escape_string($db->con, $_POST['password']);
    
        $user->loginUser($email, $password);

        if(!$user->loginUser($email, $password)) {
            $error = true;
        } else {
            $error = false;
        }
    }

}

?>

<!-- main sections starts -->
<main class="w-full mt-12 sm:mt-0">

<!-- row -->
<div class="flex sm:w-4/6 sm:mt-4 m-auto mb-7 bg-white shadow-lg">

            <!-- sidebar column  -->
            <div class="loginSidebar bg-primary-blue p-10 pr-12 hidden sm:flex flex-col gap-4 w-2/5">
                <h1 class="font-medium text-white text-3xl">Login</h1>
                <p class="text-gray-200 text-lg">Get access to your Orders, Wishlist and Recommendations</p>
            </div>
            <!-- sidebar column  -->

            <!-- login column -->
            <div class="flex-1 overflow-hidden">

                <!-- edit info container -->
                <div class="text-center py-10 px-14">
                    
                    <!-- input container -->
                    <form method="POST">
                    <div class="flex flex-col w-full gap-4">

                        <!-- email input -->
                        <div class="flex flex-col gap-1">
                        <h2 class="text-xs text-primary-grey text-left">Enter Email</h2>
                        <input type="email" name="email" placeholder="Enter Email" class="py-2 outline-none border-b rounded-sm focus:border-primary-blue" required>

                        <?php
                        if($error) {
                            echo '<span class="text-xxs text-red-500 font-medium text-left mt-0.5">Please enter valid Email ID</span>';
                        } else {
                            echo '<span class="text-xxs text-red-500 font-medium text-left mt-0.5 invisible">Please enter valid Email ID</span>';
                        }
                        ?>
                        </div>
                        <!-- email input -->

                        <!-- password input -->
                        <div class="flex flex-col gap-1">
                            <h2 class="text-xs text-primary-grey text-left">Enter Password</h2>
                            <input type="password" name="password" minlength="8" maxlength="23" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter Password" class="py-2 outline-none border-b rounded-sm focus:border-primary-blue" required>

                            <?php
                        if($error) {
                            echo '<span class="text-xxs text-red-500 font-medium text-left mt-0.5">Please enter valid Password</span>';
                        } else {
                            echo '<span class="text-xxs text-red-500 font-medium text-left mt-0.5 invisible">Please enter valid Password</span>';
                        }
                        ?>
                        </div>
                        <!-- password input -->

                        <!-- button container -->
                        <div class="flex flex-col gap-2.5 mt-2 mb-36">
                            <p class="text-xs text-primary-grey text-left">By continuing, you agree to Flipkart's <a href="https://www.flipkart.com/pages/terms" class="text-primary-blue"> Terms of Use</a> and <a href="https://www.flipkart.com/pages/privacypolicy" class="text-primary-blue"> Privacy Policy.</a></p>
                            <button type="submit" name="loginBtn" class="text-white py-3 w-full bg-primary-orange shadow rounded-sm font-medium">Login</button>
                        </div>
                        <!-- button container -->
    
                    </div>
                    </form>
                    <!-- input container -->

                    <a href="signup.php" class="font-medium text-sm text-primary-blue">New to Flipkart? Create an account</a>
                </div>
                <!-- edit info container -->
                
            </div>
            <!-- login column -->
</div>
<!-- row -->

</main>
<!-- main sections ends -->