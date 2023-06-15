<?php

// databse details =========================
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prjct1";
 //connection==============================
   $con = mysqli_connect($servername,$username,$password,$dbname);
   if (mysqli_connect_error()){
     die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
   }

 ?>
