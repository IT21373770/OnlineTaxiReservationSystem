<!DOCTYPE html>
<html>
    <head>
        <title>Online Cab and Taxi Reservation System Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/6acd2a5707.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="styles/offers.css">
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
                    <li><a href="#">Home</a></li>
                    <li><a href="AboutUs.html" >About Us</a></li>
                    <li><a href="#" >Order a Taxi</a></li>
                    <!--<li><a href="#" >User Admin</a></li>-->
                    <li><a href="user profile.php" >User Profile</a></li>
                </ul>
            </nav> 
        </header>

        <div class="container-3">
            <div class="content">
                <div class="offer">
                   <label for="offer"> Offers</label> 
                </div>

                <div class="offer-table"> 
                    <?php
                        session_start();
                        require'config.php';

                        $offer = $_SESSION['offer'];

                        $sql = "SELECT * from offer WHERE offer_id = '$offer'";
                        $result = $con->query($sql);
                        if($result -> num_rows > 0)
                        {
                            echo "<table id= 'off-table' border=3px solid black>
                            <tr>
                                <th>offer_id</th>
                                <th>offer_description</th>
                                <th>offer_precentage</th>
                                <th></th>
                            </tr>";
                            while($row = $result ->fetch_assoc())
                            {
                                $_SESSION['offer_precentage'] = $row["offer_precentage"] ;
                                echo "<tr> 
                                        <td>".$row["offer_id"]."</td>
                                         <td>".$row["offer_description"]."</td>
                                         <td>".$row["offer_precentage"]."</td>
                                         <td><button onclick = 'deduct()' >Add offer</button></td>
                                    </tr>";
                            }
                            '<p>next</p>';
                        }
                        else{
                            echo "<script>alert('No records')</script>";
                        }
                    ?>
                    
                </div>   

                <div class="path">
                        <p>Click next to visit payment portal</p>
                </div>
                <div id="nextbutton">
                    <a href="payment.php"><button id="next-btn">NEXT</button></a>
                </div>
            </div>
        </div>

        <footer>
            <div class="container-4">
                <div class="footer">
                    <ul class="footer-menu">
                        <li><a href="T&C.html" >T & C</a></li>
                        <li><a href="#" >Contact Us</a></li>
                        <li><a href="#" >FAQ</a></li>
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

    </body>
    <script> 
        function deduct()
        {
        alert("payment deduct succressfully");
        }
    </script>
</html>
