<?php
    require 'config.php';

    $email = $_POST['mail'];
    $password = $_POST['pw'];

    session_start();

    $sql = "SELECT * FROM users";
    $result = $con -> query($sql);

    $sql1 = "SELECT * FROM admin";
    $result1 = $con -> query($sql1); 

    if($result -> num_rows > 0)
    {
        while($row = $result -> fetch_assoc())
        {
            if($email == $row['email'])
            {
                $_SESSION['userid'] = $row['user_id'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['phone'] = $row['phone'];
                header('Location:Home after log in.php');
            }
            if($result1 -> num_rows > 0)
            {
                while($row = $result1 -> fetch_assoc())
                {
                    if($email == $row['Email'])
                    {
                        $_SESSION['adminid'] = $row['user_id'];
                        header('Location:ADMIN DASHBOARD.php');
                        //header('Location:add totalbill.php');
                        //admin page link must be here.
                    }
                    else
                    {
                        header('Location:signIn.html');
                    } 
                }
            }
        }
    }
    
?>