<?php
// connection
require 'dbdata.php';


//  exexuter string goes here
$execute_string = "SELECT * from booking WHERE total = 0";
$result = mysqli_query($conn,$execute_string);
//code goes here
if ($result -> num_rows > 0){
  //fetching data to the tabel

  while ($row = $result ->fetch_assoc()) {

    echo
    "<form method = \"POST\" action=\"php/total_inserter.php\"  target=\"total_interter_iframe\">
      <tr><td name=\"user_id\" id>".$row["user_id"]
    ."</td><td>".$row["Pick_up"]
    ."</td><td>".$row["Drop_off"]
    ."</td><td name=\"book_date\">".$row["Date"]
    ."</td>


    <td>  <input type=\"search\" required name=\"a_tot\" id=\"a_tot\" class=\"a_tot\" maxlength=\"30\"></td>

    <td>  <button type=\"Submit\" id=\"a_button\"  name=\"button\">Enter Total</button></td>

    </form>"


  ."</td></tr>";




     }

      }else{

        echo '<script>alert("NO DATA FOUND IN THE TOTAL COUNTER")</script>';

      }
      $conn -> close();
      ?>
