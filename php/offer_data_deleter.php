
<?php

// Create connection
require 'dbdata.php';

//conn string

// Check connection
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}else {

// if conn dosent fails what happens goes here

//  echo '<script>alert("Successfully Connected to the database.")</script>';++

  if ($offer_id == " " ){

// what happesn if a one input is empty
    echo '<script>alert("Please enter a offer ID to delete the record.")</script>';

  }else{
  // what happesn if a one input is empty
	$insertstring = mysqli_query($conn,"DELETE FROM offer WHERE offer_id = '$offer_id'");


  if ($insertstring== TRUE){

      // what happesn if data string is Successfully executed

          echo '<script>alert("Record deleted.")</script>';


          }else{
      // what happesn if data string is did not executed

          echo '<script>alert("Request did not completed.")</script>';

          }
	}

}




?>
