
<html>
<head>
    <title>Danishop.My</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include('connection.php');
?>
    
<div class="container">
    <div class="row" align="center">
        <div class="col-sm-4 box">
    <center><h3>Database1 </h3></center>
    <?php
    $data1=mysqli_query($connection1,"select * from users");
    $result1=mysqli_fetch_assoc($data1);
    echo "<pre>"; print_r($result1);
    ?>
        </div>
    <div class="col-sm-4 box">
        <center><h3>Database2 </h3></center>
        <?php
    $data2=mysqli_query($connection2,"select * from users");
    $result2=mysqli_fetch_assoc($data2);
    echo "<pre>"; print_r($result2);
    ?>
        </div>
    <div class="col-sm-4 box">
        <center><h3>Database3 </h3></center>
        <?php
    $data3=mysqli_query($connection3,"select * from users");
    $result3=mysqli_fetch_assoc($data3);
    echo "<pre>"; print_r($result3);
    ?>
    </div>
    </div>
    </div>
</body>
</html>
<style>
.box{
    height: 350px;
    padding: 10px;
    margin-top: 110;
    border-radius: 100px 15px 15px;
    border: 1px solid #ccc;
    color: black;}
</style>
