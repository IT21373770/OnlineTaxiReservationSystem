<?php
// connection
require 'dbdata.php';

//  exexuter string goes here
$execute_string = "SELECT user_id,name,email,address,phone FROM users";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {
    echo "<tr><td>".$row["user_id"]
        ."</td><td>".$row["name"]
        ."</td><td>".$row["email"]
        ."</td><td>".$row["address"]
        ."</td><td>".$row["phone"]."</td></tr>";

        }

      }else{
        echo '<script>alert("NO DATA FOUND FOR USERS")</script>';

      }
      $conn -> close();
      ?>
