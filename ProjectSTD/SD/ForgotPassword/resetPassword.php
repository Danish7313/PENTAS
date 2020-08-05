<?php
    if (isset($_GET["email"]) && isset($_GET["code"])){
        $connection = new mysqli("localhost","nish","1234","projectstd");
        
        $email = $connection->real_escape_string($_GET["email"]);
        $code = $connection->real_escape_string($_GET["code"]);
        
        $data = $connection->query("SELECT * FROM loginstaff WHERE email='$email' AND code='$code'");
        
        if ($data->num_rows > 0){
            $str = "012345abcde";
            $str = str_shuffle($str);
            $str = substr($str, 0 , 5);
            
            $password = sha1($str);
            
            $connection->query("UPDATE loginstaff SET password = '$password', code='' WHERE email='$email'");
            
            echo "Your new password is:$str";
            
        }else{
            echo "Please check your link";
        }
    }else{
        header("Location: index.php");
        exit();
    }
?>