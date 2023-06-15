
<?php
$user_id = $_POST['user_id'];
$email = $_POST['user_email'];


// Create connection
require 'dbdata.php';

//conn string

//INSERT INTO `driver_details`(`driver_nic`, `driver_lic`, `driver_name`, `driver_address`, `driver_phone`)
//VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')
//DELETE FROM `driver_details` WHERE driver_nic="" AND driver_lic="";
// exe string

// Check connection
if (!$conn) {

  die("Connection failed: " . mysqli_connect_error());

}else {

// if conn dosent fails what happens goes here

//  echo '<script>alert("Successfully Connected to the database.")</script>';++


  if ($user_id == " " ){

// what happesn if a one input is empty

    echo '<script>alert("Please enter User ID and Email to delete the record.")</script>';


  }elseif(  $email == " " ){
  // what happesn if a one input is empty

	echo '<script>alert("Please enter driver NIC number and driver license number to delete the record.")</script>';

  }else{

	$insertstring = mysqli_query($conn,"DELETE FROM users WHERE user_id='$user_id' and email='$email';");


      if ($insertstring== TRUE){

          // what happesn if data string is Successfully executed

              echo '<script>alert("Record deleted.")</script>';


              }else{
          // what happesn if data string is did not executed

              echo '<script>alert("Request did not completed.")</script>';

              }



  //header("Location:ADMIN DASHBOARD.php");

	}



}










/*

  if ($insertstring== TRUE){

// what happesn if data string is Successfully executed

    echo '<script>alert("Record deleted successfully.")</script>';


  }else{
    // what happesn if data string is did not executed


  echo '<script>alert("Data did not insert.")</script>';


  }

// if conn dosent fails what happens goes here

}


*/


?>
