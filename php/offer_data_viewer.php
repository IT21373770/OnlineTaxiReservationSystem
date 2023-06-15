<?php
// connection
require 'dbdata.php';

//  exexuter string goes here
$execute_string = "SELECT offer_id,offer_description,offer_precentage FROM offer";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {
    echo "<tr><td>".$row["offer_id"]
        ."</td><td>".$row["offer_description"]
        ."</td><td>".$row["offer_precentage"] ."</td></tr>";

        }

      }else{
        echo '<script>alert("NO DATA FOUND FOR OFFERS")</script>';

      }
      $conn -> close();
      ?>
