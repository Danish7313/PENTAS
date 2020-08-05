<?php 
    if (isset($_POST["forgotPass"])){
        $connection = new mysqli("localhost","nish","1234","projectstd");
        
        $email = $connection->real_escape_string($_POST["email"]);
        
        $data = $connection->query("SELECT * FROM loginstaff WHERE email='$email'");
        
        if($data -> num_rows > 0){
            $str = "012345abcde";
            $str = str_shuffle($str);
            $str = substr($str, 0 , 5);
            $url = "http//domain.com/ForgotPassword/resetPassword.php?code=$str&email=$email";
            
            
            mail($email, "Reset Password", "To reset your password, please visit this: $url", "From: myanotheremail@domain.com\r\n");
            
            $connection->query("UPDATE loginstaff SET code='$str' WHERE email='$email'");
            
            echo "Please check your email";
            
        }else{
            echo "Please check your inputs";
            
        }
            
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../../Login_v3/ForgotPassword/images/icons/key2.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/css/util.css">
	<link rel="stylesheet" type="text/css" href="../../Login_v3/ForgotPassword/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="#" method="POST">
					<span class="login100-form-title p-b-26">
						FORGOT PASSWORD
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit" name="forgotPass">
								UPDATE
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Not forgot your password?
						</span>

						<a class="txt2" href="#">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/bootstrap/js/popper.js"></script>
	<script src="../../Login_v3/ForgotPassword/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/daterangepicker/moment.min.js"></script>
	<script src="../../Login_v3/ForgotPassword/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../../Login_v3/ForgotPassword/js/main.js"></script> 
    
    
</body>
</html>