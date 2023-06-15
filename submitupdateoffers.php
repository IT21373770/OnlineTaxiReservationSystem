<?php
    require'config.php';

    $submitid = $_POST['offer_id'];
    $submitdesc = $_POST['offer_description'];
    $submitprecentage = $_POST['offer_precentage'];

    $sql = "UPDATE offer
            SET offer_description = '$submitdesc' , offer_precentage = '$submitprecentage'
            WHERE offer_id = '$submitid'";

    if($con -> query ($sql)){
        header("Location:editoffers.php");
    }
    else{
        echo"<script>alert('Error in updating')</script>";
    }
    $con->close();
?>
