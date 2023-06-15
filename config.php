<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database = "prjct1";

//create the connection
$con = new mysqli($server_name, $username, $password, $database);

//check connection
if($con -> connect_error)
{
    die("Connection failed:" . $con->connect_error);
}
//echo "Connected Successfully";
?>