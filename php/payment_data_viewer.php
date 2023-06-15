<?php
// connection
require 'dbdata.php';

//  exexuter string goes here
$execute_string = "SELECT user_id,card_no,exp_year,exp_month FROM payments";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {
    echo "<tr><td>".$row["user_id"]."</td><td>".$row["card_no"]
      ."</td><td>".$row["exp_year"] ."</td><td class='a_fee'>".$row["exp_month"]
       ."</td></tr>";

        }

      }else{
        echo '<script>alert("NO DATA FOUND IN THE PAYMENT")</script>';

      }
      $conn -> close();
      ?>
