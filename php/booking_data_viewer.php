<?php
// connection
require 'dbdata.php';

//  exexuter string goes here
$execute_string = "SELECT user_id,Pick_up,Drop_off,Date,Time,vehicle_type,package FROM booking";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {
    echo
    "<tr><td>".$row["user_id"]
    ."</td><td>".$row["Pick_up"]
    ."</td><td>".$row["Drop_off"]
    ."</td><td>".$row["Date"]
    ."</td><td>".$row["Time"]
    ."</td><td>".$row["vehicle_type"]
    ."</td><td>".$row["package"]

  ."</td></tr>";

     }

      }else{
        echo '<script>alert("NO DATA FOUND IN THE BOOKING")</script>';

      }
      $conn -> close();
      ?>
