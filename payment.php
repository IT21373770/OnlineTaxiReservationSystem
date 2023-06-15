<?php
    session_start();
    require 'config.php';

    $pkup = $_SESSION['Pick-Up'];
    $dof = $_SESSION['Drop-Off'];
    $vtyp = $_SESSION['typ'];
    $name = $_SESSION['name'] ;
    $email = $_SESSION['email'] ;
    $phone = $_SESSION['phone'] ;
    $off = $_SESSION['offer_precentage'] ;
    $id = $_SESSION['userid'];

    $sql = "SELECT total from booking WHERE user_id = $id ";
    $result = $con->query($sql);
    if($result -> num_rows > 0)
    {
    
        while($row = $result ->fetch_assoc())
        {
            $tot = $row['total'] ;
        }
    }
    $sql="SELECT * FROM payments where user_id=$id";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

            $curd_no=$row['user_id'];
            $exp_mon  =$row['exp_month'];
            $exp_year  =$row['exp_year'];
                }
        }
        else{
            $curd_no="";
            $exp_mon  ="";
            $exp_year  ="";


        }
?>
<html>
	<head>
		<link rel="stylesheet" href="Styles/payment.css">
		<script src="js\payment.js"></script>
		
		<title>Online Cab and Taxi Reservation System Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/6acd2a5707.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="Styles/Cab reservation system template style.css">
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
                            <li id="S1"><a href="Home before log in.html">Log Out</a></li>
                        </ul>
                    </nav>
                </div> 
            </div>
        
            <nav class="container-2">
                <ul class = "menubar">
                    <li><a href="Home after log in.html">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <!--<li><a href="#">Order a Taxi</a></li>-->
                    <!--<li><a href="#">User Admin</a></li>-->
                    <li><a href="user profile.php">User Profile</a></li>
                </ul>
            </nav> 
        </header>

    <div class="container-3">
        <div class="content">
	
        <div class="container">
            <form method="POST"  action="")>
                <div class="row">
                    <div class="col-50">
                            <h2>Order Recap</h2><br>
                            <label >Full Name</label>
                            <input type="text" id="fname" value = "<?php echo $name?>" name="firstname" disabled>
                            <label>Pick Up</label>
                            <input type="text" id="pickup" value = "<?php echo $pkup?>" name="pick" disabled>
                            <label>Drop</label>
                            <input type="text" id="adr" value = "<?php echo $dof?>" name="drop"  disabled>
                            <label>Vehicle Type</label>
                            <input type="text" id="vtype" value = "<?php echo $vtyp?>" name="vehicle"  disabled>
                            <label>Moblie Number</label>
                            <input type="text" value = "<?php echo $phone?>" name="number"  disabled>
                            <label>Email Address</label>
                            <input type="text" id="email" value = "<?php echo $email?>" name="email"  disabled>
                            <label>Total Cost</label>
                            <input type="text" id="payment"  value = "<?php echo $tot?>" name="cost"  disabled>
                    </div>
                </div>
            
            </form>
                        <div class="row">
                            <div class="col-50" style="padding:10px">
                                <div class="container" style="border-color:black;">
                                    <form method="POST">
                                        <h2>Payment</h2><br>
                                        <label for="cname">Name on Card</label>
                                        <input type="text" id="cname" name="cardname"  placeholder="MR H.K. Perera" required>
                                        <label for="ccnum">Credit card number</label>
                                        <!-- <input type="tel" inputmode="numeric" id="ccnum" name="cardnumber"  maxlength="16" placeholder="xxxx-xxxx-xxxx-xxxx"  required > -->
                                        <input id="ccnum" type="tel" inputmode="numeric" name="cardnumber" pattern="[0-9\s]{13,16}" value="<?php echo $curd_no ?>" autocomplete="cc-number" maxlength="16" placeholder="xxxx xxxx xxxx xxxx">
                                        <!-- pattern="[4-5]+[0-9]{12,15}" -->
                                        <div class="row">
                                            <div class="col-50">
                                                <label for="expyear">Exp Year</label>
                                                <input type="text" id="expyear" name="expyear" value="<?php echo $exp_year ?>" pattern="[2]+[0]+[2]+[0-9]" maxlength="4" placeholder="2022" required>
                                                <label for="cvv">CVV</label>
                                                <input type="text" id="cvv" name="cvv" pattern="[0-9]{3}" maxlength="3" placeholder="123" required>
                                            </div>
                                        
                                            <div class="col-50">
                                                <label for="expmonth">Exp Month</label>
                                                <input type="text" id="expmonth" name="expmonth" value="<?php echo $exp_mon ?>" pattern="[0-1]+[0-9]" maxlength="2" placeholder="04" required > 
                                            </div>
                                        </div>

                                        <label>
                                            <input type="checkbox"  id="notrobo" onclick="enableButton(); btn1();"  required> I'm not a robot
                                        </label>
                                        <input type="submit" name="submit" class="change"value="save and update details">
                                            <input type="submit" name="delete"  class="change" value="delete my card details"><br><br>
                                            </form>
                                            <a href="Home after log in.php"><button type="submit" name="button"id="b1" class="btn" style="float:right;" disabled value="PAY">pay</button></a>
                                </div>
                            </div>
                        </div> 
        </div>
	
        <script type="text/javascript">
       function btn1(){

        document.getElementById("b1").disabled=false;
       }
     </script>
	    <footer>
            <div class="container-4">
                <div class="footer">
                    <ul class="footer-menu">
                        <li><a href="#" target="_self">T & C</a></li>
                        <li><a href="#" target="_self">Contact Us</a></li>
                        <li><a href="#" target="_self">FAQ</a></li>
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
	</div>

	</body>
</html>


<?php

    echo $id;

if (isset($_POST['submit'])) 
{
    $C_No=$_POST['cardnumber'];
    $Ex_m=$_POST['expmonth'];
    $Ex_y=$_POST['expyear'];

    $sql="INSERT into payments values('$id',' $C_No','$Ex_y','  $Ex_m')";

  if ($con->query($sql) === TRUE) 
  {
  // header( 'Location: payment.php' );
  }
  else 
  {
    $sql="UPDATE payments SET  card_no = $C_No , exp_year = $Ex_y , exp_month = $Ex_m WHERE user_id=$id";
    if ($con->query($sql) === TRUE) 
    {
      // header( 'Location: payment.php' );
    }
    else 
    {
      // echo "Error: " . $sql . "<br>" . $conn->error;
    }

  }

}


if (isset($_POST['delete'])) {

    $sql="DELETE FROM payments WHERE user_id=$id";
  if ($con->query($sql) === TRUE) 
  {
  // header("Refresh:1");
  }
  else {
    // echo "Error: " . $sql . "<br>" . $conn->error;
  }


  }








  ?>