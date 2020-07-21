<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('connection.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['firstname'])){
        // removes backslashes
 $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
 $firstname = mysqli_real_escape_string($con,$firstname);
 $lastname = stripslashes($_REQUEST['lastname']);
 $lastname = mysqli_real_escape_string($con,$lastname);
 $gender = stripslashes($_REQUEST['gender']);
 $gender = mysqli_real_escape_string($con,$gender);
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
    
        $query = "INSERT INTO `regstaff` (firstname,lastname,gender, email,password)
VALUES ('$firstname','$lastname','$gender,'$email', '".md5($password)."' )";
        $result = mysqli_query($con,$query);
    
if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
}
?>
<div class="form">
<h1>Registration</h1>
<form name="registration" action="" method="post">
<input type="text" name="firstname" placeholder="Firstname" required />
<input type="text" name="lastname" placeholder="Lastname" required />
<input type="text" name="gender" placeholder="Gender" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>
</body>
</html>