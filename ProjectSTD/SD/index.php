<?php 

$con = mysqli_connect("localhost", "nish","1234", "projectstd");
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    
    $result=mysqli_query($con,"select * from loginstaff where username='".$uname."'AND password='".$password."' limit 1");
    
    if(mysqli_num_rows($result)==1){
        header('Location: loginketuaunit.php');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>PENILAIAN TAHUNAN STAF</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/icon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/kulogin1.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(images/bg-01.jpg);">
			<div class="wrap-login100" style="background-color:black;">
				<form class="login100-form validate-form" action="#" method="post">
					<br><span class="login100-form-logo" style="margin-top:-64px;">
						<img src="images/kspng4.jpg" style="width:150px;height:130px; ">
					</span>
                    <br><div style="text-align:center;color:black;background:white;width:50px;margin:auto;font=">
                    <b>STAF</b>
                    </div>

					<span class="login100-form-title p-b-34 p-t-27" style="margin-bottom:-15px">
				        Selamat Datang ke Penilaian Tahunan Staf
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="username" name="username" placeholder="E-mel">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="password" name="password" placeholder="Kata Laluan">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
				<div style="margin-top:-20px;">
				<a href="ForgotPassword/forgotpass.php" style="color:white;">Terlupa Kata Laluan?</a>
				</div>

					<br><div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Log Masuk
						</button>
					</div>
                    <br><div style="text-align:center;">
                     <a href="loginketuaunit.php">Anda adalah Ketua Unit?</a>
                    </div>
                    <div style="text-align:center;margin-top:-40px;">
                     <a href="loginadmin.php">Anda adalah Admin?</a>
                    </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>