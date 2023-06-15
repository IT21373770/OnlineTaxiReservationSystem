<?php
    require 'config.php';
?>
<html>
    <body>
        <form method="POST" action="deleteoffers.php">
            <label for="Offer id">Offer_id : </label>
            <input type="text" name="offer_id"><br><br>
            <input type="SUBMIT" name="delete">
        </form>

        <?php
            if(isset($_POST['delete']))
            {
                $delid = $_POST['offer_id'];
                $sql = "DELETE FROM offer WHERE offer_id = '$delid'";

                if($con->query($sql)){
                    echo "<script> alert('Deleted successfully') </script>";
                }
                else{
                    echo "<script> alert('Error in Deleteing') </script>";
                }
                $con-> close();
            }
        ?>  
        
