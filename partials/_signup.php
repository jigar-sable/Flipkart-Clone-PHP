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
                    <form method="post" id="otpForm">
                    <div class="flex flex-col w-full gap-3">

                        <!-- email input -->
                        <div class="flex flex-col gap-1">
                        <h2 class="text-xs text-primary-grey text-left">Enter Email</h2>
                        <input type="email" id="emailInput1" placeholder="Enter Email" class="py-2 outline-none border-b rounded-sm focus:border-primary-blue">
                        <span class="text-xxs text-red-500 font-medium text-left mt-0.5 emailError"></span>
                        </div>
                        <!-- email input -->

                        <style>
                            input[type=number]::-webkit-inner-spin-button, 
                            input[type=number]::-webkit-outer-spin-button { 
                            -webkit-appearance: none; 
                            margin: 0; 
                        }
                        </style>

                        <!-- otp input -->
                        <div class="flex flex-col gap-1 hidden" id="otpInputDiv">
                            <h2 class="text-xs text-primary-grey text-left">Enter OTP</h2>
                            <input type="number" maxlength="6" id="otpInput" placeholder="Enter OTP" class="py-2 px-2 outline-none border rounded-sm focus:border-primary-blue">
                            <span class="text-xxs text-red-500 font-medium text-left mt-0.5 otpError"></span>
                        </div>
                        <!-- otp input -->

                        <!-- button container -->
                        <div class="flex flex-col gap-2.5 mt-1 mb-40">
                            <p class="text-xs text-primary-grey text-left">By continuing, you agree to Flipkart's <a href="https://www.flipkart.com/pages/terms" class="text-primary-blue"> Terms of Use</a> and <a href="https://www.flipkart.com/pages/privacypolicy" class="text-primary-blue"> Privacy Policy.</a></p>
                            <button type="button" class="text-white py-3 w-full bg-primary-orange shadow rounded-sm font-medium" id="continueBtn">Continue</button>

                            <a href="login.php" class="text-primary-blue py-3 mt-2 w-full shadow border rounded-sm font-medium">Existing User? Log in</a>
                        </div>
                        <!-- button container -->
    
                    </div>
                    </form>
                    <!-- form container -->

                </div>
                <!-- otp signup container -->

                <!-- personal info procedure container -->
                <div class="p-5 sm:p-10 hidden" id="signupFormDiv">
                    <form action="signup_req.php" method="POST" id="signupForm">
                    
                    <!-- personal info procedure -->
                    <div class="flex flex-col gap-5 items-start">

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="fname" class="text-xs text-gray-500">First Name</label>
                                <input type="text" name="fname" placeholder="Enter First Name" class="outline-none" required>
                            </div>
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="lname" class="text-xs text-gray-500">Last Name</label>
                                <input type="text" name="lname" placeholder="Enter First Name" class="outline-none" required>
                            </div>
                        </div>
                        <!-- input container column -->

                        <!-- gender input -->
                        <div class="flex gap-4 items-center">
                            <h2 class="text-sm">Your Gender :</h2>
                            <div class="flex items-center gap-6">
                                <div class="flex items-center gap-2">
                                <input type="radio" name="gender" value="male" id="male" class="h-4 w-4" required>
                                <label for="male">Male</label>
                                </div>
                                <div class="flex items-center gap-2">
                                <input type="radio" name="gender" value="female" id="female" class="h-4 w-4" required>
                                <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <!-- gender input -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border bg-gray-100 cursor-not-allowed focus-within:border-primary-blue">
                                <label for="email" class="text-xs text-gray-500 cursor-not-allowed">Email</label>
                                <input type="email" name="email" id="emailInput2" value="" class="outline-none cursor-not-allowed text-gray-500" disabled>
                            </div>

                            <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="mobile" class="text-xs text-gray-500">Mobile Number</label>
                                <input type="tel" pattern="[6-9]{1}[0-9]{9}" maxlength="10" name="mobile" placeholder="Enter Mobile Number" class="outline-none" required>
                            </div>
                        </div>
                        <!-- input container column -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full">
                            <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                                <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                    <label for="password" class="text-xs text-gray-500">Password</label>
                                    <input type="password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="password" id="password" placeholder="Enter Password" class="outline-none" required>
                                </div>
    
                                <div class="flex flex-col w-full sm:w-1/2 gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                    <label for="cpassword" class="text-xs text-gray-500">Confirm Password</label>
                                    <input type="password" minlength="8" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" name="cpassword" id="cpassword" placeholder="Enter Password" class="outline-none" required>
                                </div>
                            </div>

                            <span class="text-xxs text-red-500 font-medium text-center ml-36 mt-0.5 cpasswordError"></span>

                        </div>
                        <!-- input container column -->

                        <!-- input container column -->
                        <div class="flex flex-col w-full justify-between sm:flex-row gap-3 items-center">
                            <div class="flex flex-col w-full gap-0.5 px-3 py-1.5 rounded-sm border focus-within:border-primary-blue">
                                <label for="address" class="text-xs text-gray-500">Address</label>
                                <textarea name="address" rows="2" placeholder="Enter Address" class="outline-none resize-none" required></textarea>
                            </div>
                        </div>
                        <!-- input container column -->

                        <button type="submit" id="signupBtn" class="text-gray-500 py-3 w-full bg-gray-200 shadow rounded-sm font-medium cursor-not-allowed" disabled>Signup</button>
                        <a href="login.php" class="text-primary-blue text-center py-3 w-full shadow border rounded-sm font-medium">Existing User? Log in</a>

                    </div>
                    <!-- personal info procedure -->

                    </form>

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
                    check_mail_exist();                    
                }

                } else if($('#continueBtn').html()=='Submit OTP') { 
                    if($('#otpInput').val()==""){
                        $('.otpError').html('Please enter valid OTP');
                    } else {
                        check_otp();
                    }
                }
        });


        function check_mail_exist() {
            var email = $('#emailInput1').val();

            $.ajax({
                url:'check_email_exist.php',
                type:'post',
                data:'email='+email,
                success:function(result){
                    if(result=="exist") {
                        $('.emailError').html('Email already exists. Kindly Login');
                        
                    } else {
                        $('.emailError').html('');
                        $('#continueBtn').html('Sending OTP');
                        $('#continueBtn').attr('disabled',true);
                        $('#continueBtn').addClass('bg-gray-400 cursor-not-allowed');
                        $('#continueBtn').removeClass('bg-primary-orange');
                        $('#otpInputDiv').toggleClass('hidden');
    
                        $('#emailInput1').attr('disabled',true);
                        $('#emailInput1').addClass('cursor-not-allowed text-gray-500');
    
                        send_otp();
                    }
                }
            });
        }

        function send_otp() {
            var email = $('#emailInput1').val();

            $.ajax({
                url:'send_otp.php',
                type:'post',
                data:'email='+email,
                success:function(result){
                    if(result=="mailed") {
                        $('#continueBtn').html('Submit OTP');
                        $('#continueBtn').removeAttr('disabled',true);
                        $('#continueBtn').addClass('bg-primary-orange');
                        $('#continueBtn').removeClass('bg-gray-600 cursor-not-allowed');
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
                    if(result=="verified") {
                        $('#continueBtn').html('OTP Verified');
                        $('.otpError').html('');
                        $('#otpForm').addClass('hidden');
                        $('#signupFormDiv').removeClass('hidden');
                        $('#emailInput2').val(email);
                    } else {
                        $('.otpError').html('Please enter valid OTP');
                    }
                }
            });
        }

        $('#password').change(function(){
            validate_pw();
        });
        $('#cpassword').change(function(){
            validate_pw();
        });

        function validate_pw() {
            
            if ($('#password').val() == $('#cpassword').val()) {
                $('#signupBtn').addClass('bg-primary-orange text-white').removeClass('bg-gray-200 text-gray-500 cursor-not-allowed');
                $('.cpasswordError').html("");
                $('#signupBtn').prop('disabled',false);
            } else {
                $('.cpasswordError').html("Password Doesn't Match");
                $('#signupBtn').removeClass('bg-primary-orange text-white').addClass('bg-gray-200 text-gray-500 cursor-not-allowed');
                $('#signupBtn').prop('disabled',true);
            }
        }

    });
   
</script>