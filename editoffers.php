<?php
    require 'config.php';
?>
<html>
    <body>
        <form method="POST" action="submitupdateoffers.php">
            <label for="Offer id">Offer_id : </label>
            <input type="text" name="offer_id"><br><br>
            Enter the details to update<br>
        
            <label for="offer description ">offer_description :</label>
            <input type="text" name="offer_description"><br><br>

            <label for="Offer precentage">offer_precentage :</label>
            <input type="text" name="offer_precentage"><br><br>

            <input type="submit" name="update_offer" value="Update">
        </form>

        <form method="POST" action="deleteoffers.php">
            <button type="submit" name="deleteoffer">Delete Offers</button>
        </form>
    </body>
</html>