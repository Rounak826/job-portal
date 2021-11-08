<?php
    
    $server = 'localhost';
    $username = 'root';
    $password='';
    $database='jobs';



$conn= mysqli_connect($server, $username, $password, $database);


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO `users`(`name`, `email`, `password`,`phone_no`) VALUES ('$name', '$email', '$password', '$number')";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
    if($result){
        echo "Registered Successfully";
    }else{
        echo "failed";
    }
    
    
}
session_start();
if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $query = "Select * from users where `email`='$email' and `password`='$password'";
    $result = mysqli_query($conn,$query);
    
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if(mysqli_num_rows($result)==1){
        header("location:index.php");   
    }    
    else{
        $error= "user email id or password is incorrect";
    }
    
    
}
if(isset($_POST['postJobs'])){
    $companyName = $_POST['companyName'];
    $position = $_POST['position'];
    $description = $_POST['description'];
    $ctc = $_POST['ctc'];
    $skills = $_POST['skills'];
    
    $sql = "INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `ctc`) VALUES ('$companyName','$position','$description','$skills','$ctc')";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
    
    if($result){
        echo "Posted Successfully";
    }else{
        echo "failed";
    }
    
}
if(isset($_POST['send'])){
    $name = $_POST['name'];
    $qual = $_POST['qualification'];
    $year = $_POST['year'];
    $applyFor = $_POST['apply'];

    $sql = "INSERT INTO `candidates`(`name`, `qual`, `year`, `apply`) VALUES ('$name','$qual','$year','$applyFor')";
    $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

    if($result){
        echo "Apllied Successfully";
    }else{
        echo "failed";
    }


 }


?>