<!DOCTYPE html>

<html>
    <head>
        <style>
          .overlay {
  position:fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}


.log_but{

  background-color: white;
  border: none;
  color:#4CAF50;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;


}
.log_but:hover{
  background-color: #4CAF50;
  color: white;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}


        </style>
        <title>Online Cab and Taxi Reservation System Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/6acd2a5707.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/user profile.css">
    </head>
    <body>
        <header>
            <div class="container-1">
                <div class="nav-1">
                    <div class="icon">
                        <H3 id="cName">DropMe Taxi Service</H3>
                    </div>

                    <nav class="head_log-sign">
                        <ul id="log-Sign">
                            <li id="S1"><a href="Home before log in.html" target="_blank">Log Out</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
        
            <nav class="container-2">
                <ul class = "menubar">
                    <li><a href="#" target="_blank">Home</a></li>
                    <li><a href="#" target="_blank">About Us</a></li>
                    <li><a href="#" target="_blank">Order a Taxi</a></li>
                    <!--<li><a href="#" target="_blank">User Admin</a></li>-->
                    <!--<li><a href="#" target="_blank">User Profile</a></li>-->
                </ul>
            </nav> 
        </header>

        <div class="container-3">
            <div class="content">
                <div class="userpage">Drop me taxi Service User Profile</div>
            </div>

            
            <div class="row">
                <div class="column">
                    <div class="userprofil">
                        <form>
                            <fieldset id="psnl-det">
                                <legend>Personal Details</legend>
                                    <table #="psnl-det-table">
                                    <!--display user details in user profile-->
                                    <?php
                                            session_start();
                                            require 'config.php';
                                            
                                            $id1 =  $_SESSION['userid'] ;
                                                    // echo $id1;
                                            $sql  = "SELECT * FROM users WHERE user_id =$id1";
                                            $result = $con -> query($sql);
                                            
                                            if($result -> num_rows > 0)
                                            {
                                                while($row = $result -> fetch_assoc())
                                                {      
                                                    // echo"hugh"; 

                                        ?>
                                                <tr>
                                                    <td width="100" height="50">User Name : </td>
                                                    <td width="100" height="50"><input type="text" readonly value="<?php echo $row['name']?>"></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td width="100" height="50">Mobile No : </td>
                                                    <td width="100" height="50"><input type="number" readonly value="<?php echo $row['phone']?>"></td>
                                                </tr>
                                                <tr>
                                                    <td width="100" height="50">Email : </td>
                                                    <td width="100" height="50"><input type="Email" readonly value="<?php echo $row['email']?>"></td>
                                                </tr>
                                                <tr>
                                                    <td width="100" height="50">Address : </td>
                                                    <td width="100" height="50"><input type="text" readonly value="<?php echo $row['address']?>"></td>
                                                </tr>
                                        <?php
                                                }
                                            }
                                        ?>            
                                    </table> 
                            </fieldset>
                        </form>   
                        <a href="#popup5">popup5</a>
                        <button>DELETE</button>
                    </div>
                </div>

                <div class="column">
                    <div class="photo">
                        <fieldset id="pic">
                                <legend>Profile picture</legend>
                                <img id="avtr" src="Images/avatar.jpg">
                                <!-- <img src="https://thecatapi.com/api/images/get?format=src&type=gif" alt="a random cat image" class="profile_image"> -->
                        </fieldset>
                    </div>
                  </div>
            </div>   
        </div>

        </div>

        <footer>
            <div class="container-4">
                <div class="footer">
                    <ul class="footer-menu">
                        <li><a href="T&C.hyml" >T & C</a></li>
                        <li><a href="#" >Contact Us</a></li>
                        <li><a href="FAQ PAGE.html" >FAQ</a></li>
                    </ul>
                    <div class="social-menu">
                        <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/" target="_blank"></a><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://twitter.com/" target="_blank"></a><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/" target="_blank"></a><i class="fa-brands fa-linkedin"></i></a>
                    </div>   
                </div>
            </div>

            <div class="container-5">
                <div class="cpyright">
                    <p>Copyright &copy DropMe Taxi Company (PVT) Ltd.All Right reserved.</p>
                </div>
            </div>
        </footer>

        <div id="popup5" class="overlay">
          
         <div class="popup">
           <h2>Change details</h2>
           <a class="close" href="#">&times;</a>
           <div class="content">

           <form method="POST">
               <br>
                <label >Username</label>
                <input type="text" name="usname" value=""><br><br>
                <label >Mobile</label>
                <input type="text" name="mbil" value=""><br><br>
                <label >Email</label>
                <input type="text" name="email" value=""><br><br>
                <label >Address</label>
                <input type="text" name="adres" value=""><br><br>

                <input type="submit" name ="submit" class="log_but">
          </form>

           </div>
           <div class="">
             <br>
             <!-- <a type="button" class="log_but" name="button" href="#"> No</a> -->
              <!-- <a type="button" class="log_but" name="button" href="login.html">yes</a> -->
           </div>
         </div>
        </div>

    </body>
</html>

<?php
    require 'config.php' ;

    // session_start();

    

    if(isset($_POST["submit"]))
    {
        $un = $_POST['usname'];
        $tp= $_POST['mbil'];
        $eml = $_POST['email'];
        $adrs = $_POST['adres'];

       echo $un; 
       echo $tp;
       echo $eml; 
       echo $adrs;
       echo $id1;

        // $sql="SELECT *FROM users WHERE user_id=$id1";
        // $result = $con->query($sql);
      
        // if($result->num_rows > 0){
      
        //   while($row = $result->fetch_assoc()){
        //       if ($_POST['usname']==""){
        //           $un=$row["name"];
        //       }
        //       else{
        //         $un=$_POST['usname'];
        //       }
      
        //       if ($_POST['mbil']==""){
        //           $tp=$row["phone"];
        //       }
        //       else{
        //           $tp=$_POST['mbil'];
        //       }
      
        //       if ($_POST['email']==""){
        //             $eml=$row["email"];
        //       }
        //       else{
        //           $eml=$_POST['email'];
        //       }
        //       if ($_POST['adres']==""){
        //         $adrs=$row["address"];
        //         }
        //         else{
        //             $adrs=$_POST['adres'];
        //         }
        //   }
        
      
        $sql="UPDATE users SET name='$un', phone='$tp' , email='$eml', address='$adrs' WHERE name=$id1";
        $result = $con->query($sql);
      
        if ($con->query($sql) === TRUE) 
        {
          echo "New record created successfully";
        } 
        else 
        {
          echo "Error: " . $sql . "<br>" . $con->error;
        }
      }
    

    
?>

