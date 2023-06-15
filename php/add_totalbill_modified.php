<html>
    <head>

    </head>
    <body>
        <?php

             require'Config.php';

             $sql = "SELECT * from booking WHERE total = 0 ";
             $result = $con->query($sql);
             if($result -> num_rows > 0)
             {
                 while($row = $result ->fetch_assoc())
                 {
                    
                    $pickuplocation =  $row['Pick_up'];
                    $droplocation =   $row['Drop_off'];
                    $ppkg = $row['package'];
                    $id=$row['user_id'];

                    // echo $id ;
                    // echo $pickuplocation .'<br>' ;
                    // echo $droplocation .'<br>';
                    // echo $ppkg .'<br>';

                    echo'<form method = "POST" action="add totalbill.php">

                             enter total bill :<input type="text" name="tot" value="" ><br>
                             <input type="submit" name="submit">
                    
                        </form>';
                 }
             }
             else
             {
                 echo "<script>alert('No records')</script>";
             }
                $tot=$_POST['tot'];
                //echo 'kk';
                $sql = "UPDATE booking SET total=$tot WHERE user_id = '$id'";
                if($con->query($sql))
                {      
                    //echo "Inserted successfully";
                }
                else
                {
                    echo "Error:". $con->error;
                }
        ?>
    </body>
</html>
