
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="rec1.jpeg" alt="" class="bg">
    <div class="container">

        <h1>Welcome to Ramgarh Engineering College</h1>
        <p>Enter your details for Registration in REC</p>
        <p class="para">Thanks for submiting</p>

<form action="index.php" method="post">

    <input type="text" name="name" id="name" placeholder="Enter your Name">
    <input type="text" name="branch" id="branch" placeholder="Enter your branch">
    <input type="text" name="session" id="session" placeholder="Enter your session">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your Phone No">
    <textarea name="other" id="other" rows="10" cols="20" placeholder="Writing something about REC"></textarea>
    <button name="submit" id="submit" class="btn">Submit</button>
</form>
    </div>
</body>
</html>





<?php

if(isset($_POST['name'])){
   
    
        $server = "localhost";
        $username = "root";
        $password = ""; 
        
    
        $con = mysqli_connect($server, $username , $password);
    
        if(!$con){
            die("connection to the database failed due to ". mysqli_connect_error());
        }
// echo "Database connection successfully ";

$name =$_POST["name"];
$branch =$_POST["branch"];
$session =$_POST['session'];
$email =$_POST["email"];
$phone =$_POST["phone"];
$other =$_POST["other"];

$sql = "INSERT INTO `rec` . `rec_form` ( `name`, `branch` , `session` , `email` , `phone` , `other` , `dt`) VALUES ('$name','$branch' , '$session ','$email','$phone','$other', current_timestamp());";
// echo $sql;



if($con->query($sql) == true){
    echo "<script> alert ('inserted successfully')</script>";
}else{
    echo "ERROR: $sql <br> $con->error";
}

$con->close();

}
?>