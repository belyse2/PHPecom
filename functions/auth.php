<?php
session_start();

include ('../config/dbcon.php');

if(isset($_POST['register-btn'])){

    $name = mysqli_real_escape_string($con,$_POST['name']);
    $phone = mysqli_real_escape_string($con,$_POST['phone']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $pass = mysqli_real_escape_string($con,$_POST['password']);
    $cpass = mysqli_real_escape_string($con,$_POST['confpassword']);

    //Checking if the user already exist

    $check_email_query = "SELECT email from Users where email= '$email'";
    $check_email_query_run = mysqli_query($con,$check_email_query);

    if(mysqli_num_rows($check_email_query_run) > 0)
    {
        $_SESSION['message'] = "Email Already Exist";
        header('location:../register.php'); // Redirect after successful insertion
        exit(); // 
    }
    else{
        if($pass ==  $cpass)
    {
        // insert into the database in table called users
        $insert_query = "INSERT INTO Users (name,phone,email,password) Values ('$name','$phone','$email','$pass')";
        $insert_query_run = mysqli_query($con,$insert_query);
        if($insert_query_run){
            $_SESSION['message'] = "Successfully Registered";
            header('location:../login.php'); // Redirect after successful insertion
            exit(); // Ensure script termination after redirection
        }
        else{
            $_SESSION['message'] = "Something went wrong !! Try again";
            header('Location:../register.php'); // Redirect in case of insertion failure
            exit(); // Ensure script termination after redirection
        }
    }
    else{
        $_SESSION['message'] = "Password do not match";
        header('location:../register.php'); // Redirect if passwords do not match
        exit(); // Ensure script termination after redirection
    }
    }
    
}

?>