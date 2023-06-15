<?php

require 'Config.php';
$a_tot = $_POST['a_tot'];

$sql = "SELECT * from booking WHERE total = 0 ";
            $result = $con->query($sql);
            if($result -> num_rows > 0)
            {
                while($row = $result ->fetch_assoc())
                {

                   $pickuplocation =  $row['Pick_up'];
                   $droplocation =   $row['Drop_off'];
                   $ppkg = $row['package'];
                   $user_id=$row['user_id'];

                }
            }
            else
            {
                echo "<script>alert('No records')</script>";
            }

               //echo 'kk';
               $sql = "UPDATE booking SET total=$a_tot WHERE user_id RLIKE '$user_id'";
               if($con->query($sql))
               {
                   //echo "Inserted successfully";
                   header("Location:ADMIN DASHBOARD.php");
               }
               else
               {
                   echo "Error:". $con->error;
               }



?>
