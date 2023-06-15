<?php
    require 'config.php';

    $name = $_POST["fname"];
    $mail = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["Mobile"];
    $password = $_POST["password"];

    $sql = "insert into users(name,email,address,phone,password)
    VALUES('$name', '$mail','$address',$phone,'$password')";

    if($con->query($sql)){
        echo "<script> alert('inserted successfully') </script>";
        header("Location:Home after log in.php");
    }
    else{
        echo "<script> alert('error') </script>";
    }
?>  