<?php
    require'config.php';

    session_start();

    if(isset($_POST['submit']))
    {
        $pickup = $_POST["Pick-Up"];
        $drop = $_POST["Drop-Off"];
        $dob = date('Y-m-d', strtotime($_POST['dateofbirth']));
        $time = $_POST["Pick-up-time"];

        $selected = $_POST["typ"];
       if(!empty($_POST['Fruit1'])) 
       {
           $selected1 = $_POST['Fruit1'];
           //echo 'You have chosen: ' . $selected1;
       } 
       else 
       {
           //echo 'Please select the value.';
       }
        $_SESSION['Pick-Up'] = $pickup;
        $_SESSION['Drop-Off'] = $drop;
        $_SESSION['typ'] =  $selected;
    }
    $id = $_SESSION['userid'];
    $_SESSION['offer'] = $selected1;
    

    $sql  = "insert into booking VALUES( $id,'$pickup','$drop','$dob','$time','$selected','$selected1','0')";

    if($con->query($sql)){
        //echo "<script> alert('inserted successfully') </script>";
        header("Location:offers.php");
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
?>