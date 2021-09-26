    <!-- main sections starts -->
    <main class="w-full mt-12 sm:mt-0">

        <!-- row -->
        <div class="flex sm:w-4/6 sm:mt-4 m-auto mb-7 bg-white shadow-lg">
            <!-- sidebar column  -->
            <div class="loginSidebar bg-primary-blue px-9 py-10 hidden sm:flex flex-col gap-4 w-2/5">
                <h1 class="font-medium text-white text-3xl">Looks like you're new here!</h1>
                <p class="text-gray-200 text-lg pr-2">Sign up with your mobile number to get started</p>
            </div>
            <!-- sidebar column  -->

            <!-- signup column -->
            <div class="flex-1 overflow-hidden">

                <!-- otp signup container -->
                <div class="text-center py-10 px-6 sm:px-14" id="otpForm">
                    
                    <!-- form container -->
                    <form action="" method="post">
                    <div class="flex flex-col w-full gap-3">

                        <!-- email input -->
                        <div class="flex flex-col gap-1">
                        <h2 class="text-xs text-primary-grey text-left">Enter Email</h2>
                        <input type="email" id="emailInput1" placeholder="Enter Email" class="py-2 outline-none border-b rounded-sm focus:border-primary-blue">
                        <span class="text-xxs text-red-500 font-medium text-left mt-0.5 emailError"></span>
                        </div>
                        <!-- email input -->

                        <!-- otp input -->
                        <div class="flex flex-col gap-1 hidden" id="otpInputDiv">
                            <h2 class="text-xs text-primary-grey text-left">Enter OTP</h2>
                            <input type="text" id="otpInput" placeholder="Enter OTP" class="py-2 px-2 outline-none border rounded-sm focus:border-primary-blue">
                            <span class="text-xxs text-red-500 font-medium text-left mt-0.5 otpError"></span>
                        </div>
                        <!-- otp input -->

                        <!-- button container -->
                        <div class="flex flex-col gap-2.5 mt-1 mb-40">
                            <p class="text-xs text-primary-grey text-left">By continuing, you agree to Flipkart's <a href="https://www.flipkart.com/pages/terms" class="text-primary-blue"> Terms of Use</a> and <a href="https://www.flipkart.com/pages/privacypolicy" class="text-primary-blue"> Privacy Policy.</a></p>
                            <button type="button" class="text-white py-3 w-full bg-primary-orange shadow rounded-sm font-medium" id="continueBtn">Continue</button>

                            <a href="login.html" class="text-primary-blue py-3 mt-2 w-full shadow border rounded-sm font-medium">Existing User? Log in</a>
                        </div>
                        <!-- button container -->
    
                    </div>
                    </form>
                    <!-- form container -->

                </div>
                <!-- otp signup container -->

                <!-- personal info procedure container -->
                <div class="p-5 sm:p-10 hidden" id="signupForm">
                    <!-- personal info procedure -->
                    <div class="flex flex-col gap-5 items-start">

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="fname" class="text-xs text-gray-500">First Name</label>
                                <input type="text" placeholder="Enter First Name" class="outline-none">
                            </div>
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="lname" class="text-xs text-gray-500">Last Name</label>
                                <input type="text" placeholder="Enter First Name" class="outline-none">
                            </div>
                        </div>
                        <!-- input container column -->

                        <!-- gender input -->
                        <div class="flex gap-4 items-center">
                            <h2 class="text-sm">Your Gender :</h2>
                            <div class="flex items-center gap-6" id="radioInput">
                                <div class="flex items-center gap-2">
                                <input type="radio" name="gender" id="male" class="h-4 w-4">
                                <label for="male">Male</label>
                                </div>
                                <div class="flex items-center gap-2">
                                <input type="radio" name="gender" id="female" class="h-4 w-4">
                                <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <!-- gender input -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border bg-gray-100 cursor-not-allowed focus-within:border-primary-blue">
                                <label for="fname" class="text-xs text-gray-500 cursor-not-allowed">Email</label>
                                <input type="text" value="jigarsable@gmail.com" class="outline-none cursor-not-allowed text-gray-500" disabled>
                            </div>

                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="lname" class="text-xs text-gray-500">Mobile Number</label>
                                <input type="text" placeholder="Enter Mobile Number" class="outline-none">
                            </div>
                        </div>
                        <!-- input container column -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="fname" class="text-xs text-gray-500">Password</label>
                                <input type="text" placeholder="Enter Password" class="outline-none">
                            </div>
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="lname" class="text-xs text-gray-500">Confirm Password</label>
                                <input type="text" placeholder="Enter Password" class="outline-none">
                            </div>
                        </div>
                        <!-- input container column -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="fname" class="text-xs text-gray-500">Address</label>
                                <input type="text" placeholder="Enter Address" class="outline-none">
                            </div>
                        </div>
                        <!-- input container column -->

                        <button type="submit" class="text-white py-3 w-full bg-primary-orange shadow rounded-sm font-medium">Signup</button>
                        <a href="login.html" class="text-primary-blue text-center py-3 w-full shadow border rounded-sm font-medium">Existing User? Log in</a>

                    </div>
                    <!-- personal info procedure -->


                </div>
                <!-- personal info procedure container -->
                
            </div>
            <!-- signup column -->
        </div>
        <!-- row -->

    </main>
    <!-- main sections ends -->

<script type="text/javascript">
    $(document).ready(function() {


            $('#continueBtn').click(function() {
                // var emailInput1 = $('#emailInput1').val();
                // var continueBtn = $('#continueBtn');
                // var emailError = $('.emailError');

                if($('#continueBtn').html()=='Continue') {
    
                function validateEmail() {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                    return emailReg.test($('#emailInput1').val());
                }
    
                if($('#emailInput1').val()==""){
                    $('.emailError').html('Please enter valid Email ID');
                } else if(!validateEmail()){
                    $('.emailError').html('Please enter valid Email ID');
                } else {
                    $('#continueBtn').html('Sending OTP');
                    $('#continueBtn').attr('disabled',true);
                    $('#continueBtn').addClass('bg-gray-400');
                    $('#continueBtn').removeClass('bg-primary-orange');
                    $('#otpInputDiv').toggleClass('hidden');
                    send_otp();
                }

                } else if($('#continueBtn').html()=='Submit OTP') { 
                    if($('#otpInput').val()==""){
                        $('.otpError').html('Please enter valid OTP');
                    } else {
                        check_otp();
                    }
                }
            });

        function send_otp() {
            var email = $('#emailInput1').val();

            $.ajax({
                url:'send_otp.php',
                type:'post',
                data:'email='+email,
                success:function(result){
                    if(result=="yes") {
                        $('#continueBtn').html('Submit OTP');
                        $('#continueBtn').removeAttr('disabled',true);
                        $('#continueBtn').addClass('bg-primary-orange');
                        $('#continueBtn').removeClass('bg-gray-600');
                    } else {

                    }
                }
            });
        }

        function check_otp() {
            var otp = $('#otpInput').val();
            var email = $('#emailInput1').val();

            $.ajax({
                url:'check_otp.php',
                type:'post',
                data:'otp='+otp+'email='+email,
                success:function(result){
                    if(result=="yes") {
                        $('#continueBtn').html('OTP Verified');
                        // $('#continueBtn').removeAttr('disabled',true);
                        // $('#continueBtn').addClass('bg-primary-orange');
                        // $('#continueBtn').removeClass('bg-gray-600');
                    } else {

                    }
                }
            });
        }

    });
   
</script>