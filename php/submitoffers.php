<?php
    require 'dbdata.php';

    $offid = $_POST["offer_id"];
    $offdesc = $_POST["offer_description"];
    $offprecentage = $_POST["offer_precentage"];

    $sql = "INSERT into offer(offer_id,offer_description,offer_precentage)
    VALUES ('$offid','$offdesc','$offprecentage')";

    if($conn->query($sql)){
        echo "<script> alert('inserted successfully') </script>";
    }
    else{
        echo "<script> alert('error') </script>";
    }
    $conn->close();
?>
