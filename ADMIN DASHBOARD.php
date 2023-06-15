<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DROPME - Admins Scope
          <link rel="icon" href="imgvds/icon.ico">
    </title>
    <link rel="stylesheet" href="css/admin_dashboard.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">

<!-- doughnut script cource goes here -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript"  src="http://localhost/project%20iwt/src/js/piechart.js"></script>

<!-- start of the wire chart source-->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="http://localhost/project%20iwt/src/js/linechart.js"></script>

    </head>
  <body>

    <div class="main_container"> <!-- REVIEW: as container -->

      <div class="top_bar"> <!-- REVIEW: topbar -->
        <div class="logo">
          <h2>DROPME</h2>

        </div>

        <!-- <div class="search">
          <input type="text" id="search"  placeholder="search">
          <label for="search"><i class="fas fa-search"></i></label>
        </div> -->

        <i class="fas fa-bell"></i>

        <div class="user">  <!-- REVIEW: user namer and profile picture -->
          <!-- <img src="imgvds/user_pro_pic.jpg" alt="user profile picture"> -->
        </div>

      </div>


<br>

<!-- REVIEW: SIDE BAR SECTION STARTS HERE -->

  <a name="dashboard"></a>

      <div class="side_bar"><!-- REVIEW: sidebar -->
        <ul>

          <li> <!-- REVIEW: 1st sidebar list item here  -->
            <a href="#dashboard">
              <i class="fas fa-th-large"></i>
              <div>
                DASHBOARD
              </div>
            </a>
          </li>

          <li>  <!-- REVIEW: 2nd sidebar list item  starts here-->
            <a href="#users">
              <i class="fas fa-users"></i>
              <div>
              USERS
              </div>
            </a>
          </li>


          <li>  <!-- REVIEW: 3rd sidebar list item  starts here-->
            <a href="#payment_area">

              <i class="fas fa-cash-register"></i>
              <div>
                PAYMENTS

              </div>
            </a>
          </li>


          <li>
            <a href="#offers_area">
              <i class="fas fa-street-view"></i>
              <div>
                OFFERS
              </div>
            </a>
          </li>

          <li>  <!-- REVIEW: 4th sidebar list item  starts here-->
            <a href="#pending_trans">
              <i class="fas fa-check"></i>
              <div>
                PENDING BOOKINGS
              </div>
            </a>
          </li>

          <li>  <!-- REVIEW: 4th sidebar list item  starts here-->
            <a href="Home after log in.php">
              <i class="fas fa-home-heart"></i>
              <div>
                HOME
              </div>
            </a>
          </li>

          <li>  <!-- REVIEW: 4th sidebar list item  starts here-->
            <a href="AboutUs.html">
              <i class="fas fa-union"></i>
              <div>
                ABOUT US
              </div>
            </a>
          </li>

          <li>  <!-- REVIEW: 4th sidebar list item  starts here-->
            <a href="FAQ PAGE.html">
              <i class="fas fa-question"></i>
              <div>
                FAQ
              </div>
            </a>
          </li>



          <li>  <!-- REVIEW: 4th sidebar list item  starts here-->
            <a href= "php/logout.php">
              <i class="fas fa-sign-out"></i>
              <div>
                SIGN OUT
              </div>
            </a>
          </li>

          <li><p>Copyright &copy DropMe Taxi Company (PVT) Ltd.All Right reserved.</p></li>

          <!-- REVIEW: test list items goes here -->

        </ul>
      </div>

<!-- REVIEW: mainclass starts here with cards -->
      <div class="main">

          <div class="all_cards" ><!-- REVIEW: cards -->

            <div class="a_card_container">   <!-- REVIEW:  card -->

              <div class="a_card_content"> <!-- REVIEW: card-content -->

                <div class="a_card_value" id="number_of_user_avaliable">

                </div>

                <div class="a_card_name">Users Registered</div>
              </div>
                <div class="a_card_icon">
                  <i class="fas fa-user-tie"></i>
                </div>

            </div>

              <!-- REVIEW: 2nd card starts here -->

            <div class="a_card_container">

              <div class="a_card_content">
                <div class="a_card_value" id="total_income_card">
                  <!-- REVIEW: number; 1ST VALUE GOES HERE FROM SCRIPT -->
                </div>
                <div class="a_card_name">Total Income</div>
              </div>

                <div class="a_card_icon">
                  <i class="fas fa-money-bill"></i>
                </div>

            </div>

            <!-- REVIEW: 3rd card starts here -->

            <div class="a_card_container">   <!-- REVIEW:  card -->

              <div class="a_card_content"> <!-- REVIEW: card-content -->
                <div class="a_card_value" id="total_bookings_card"><!-- REVIEW: number; 1ST VALUE GOES HERE FROM SCRIPT --></div>
                <div class="a_card_name">Total Bookings</div>
              </div>

                <div class="a_card_icon">
                  <i class="fas fa-running"></i>
                </div>

            </div>


            <!-- REVIEW: 4th card starts here -->

            <div class="a_card_container">   <!-- REVIEW:  card -->

              <div class="a_card_content"> <!-- REVIEW: card-content -->
                <div class="a_card_value" id="total_tours_card"><!-- REVIEW: number; 1ST VALUE GOES HERE FROM SCRIPT --></div>
                <div class="a_card_name">Total Tours</div>
              </div>

                <div class="a_card_icon">
                  <i class="fas fa-folder-tree"></i>
                </div>

            </div>
          </div>

          <!-- REVIEW: charts starts here -->
    <div class="charts">

      <div class="a_chart" id="curve_chart" style="height: 500px;">
        <h3>Earnings</h3>
      </div>


    <div class="a_chart" id="donutchart" style=" height: 500px;" >
      <h3>USERS</h3>
    </div>
    <a name="users"></a>

        </div>
        <!-- end of the charts -->
        <br>

        <div class="drivers_area">

          <div class="drivers_area_table">

            <table id="user_table" >

              <tr >
                <th colspan="5" class="head_th">User Details</th>
              </tr>
              <tr>
              <!-- first table row -->
              <tr>
                <th>User ID</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Address</th>
                <th>Phone No</th>

              </tr>
                <!-- first table row ends here-->
                <!-- second table row starts here -->
                <!-- data getching scrpit starts here -->

                 <?php  require 'php/user_data_viewer.php'?>

                <!-- PHP CODES ends here  -->
                <!-- table row for user data inputs starts here -->
                <!--
                  <tr>
                    <th colspan="5">Enter details for a new user</th>
                  </tr>

                  <form class="driver_data_inserter" target="driver_iframe_1" action="http://localhost/project%20iwt/src/php/user_data_inserter.php" method="post">

                  <tr>

                      <td><input type="search" required name="user_id"   id="user_data" class="user_id" maxlength="20"></td>

                      <td><input type="search" required name="user_name" id="user_data" class="user_name" maxlength="100"></td>

                      <td><input type="search" required name="user_email" id="user_data" class="user_email" maxlength="20"></td>

                      <td><input type="search" required name="user_address" id="user_data" class="user_address" maxlength="100"></td>

                      <td><input type="search" required name="user_phon" id="user_data" class="user_phone" maxlength="12"></td>

                   </tr>

                  <tr>
                    <td> <iframe name="user_iframe_1" class="a_hidden_iframe"></iframe>
                    </td>
                    <td colspan="2"></td>
                    <td><button type="reload" id="a_button" name="button" onclick="window.location.reload();">Refresh</button></td>



                    <td ><button type="Submit" id="a_button" name="button">Enter Record</button></td>
                  </tr>
  -->
                </form>
                <!-- end of the data insert form -->


                <!-- start of the data delete form -->

                <form class="user_data_deleter" target="driver_iframe_2" action="http://localhost/project%20iwt/src/php/user_data_deleter.php" method="post">

                    <tr>
                      <th colspan="1">

                        Enter the User ID and User Email to delete a record
                        <iframe name="driver_iframe_2" on class="a_hidden_iframe">
                            <!-- <meta http-equiv="refresh" content="10"> -->

                        </iframe>
                      </th>


                        <td><input type="search"  required name="user_id" id="user_data" class="user_id" maxlength="30"></td>

                        <td><input type="search" required name="user_email" id="user_data" class="user_email" maxlength="30"></td>

                        <td ><button type="Submit" id="a_button"  name="button">Delete Record</button></td>

                         <td><button type="reload" id="a_button" name="button" onclick="window.location.reload();">Refresh</button></td>

                    </tr>

                  </form>
                  <!-- end of the data delete form -->

            </table>

          </div>
          <!-- end of the user area table -->

        </div>
        <!-- end of the user area -->

        <br>
        <br><br>
        <!-- start of the payment area -->

        <div class="vehicle_area">
          <a name="payment_area"></a>

          <!-- start of the payment area table -->
          <table border="1" id="payment_table">

            <tr >
              <th colspan="5" class="head_th">Payment Details</th>
            </tr>
            <tr>

              <th>User id</th>
              <th>Card no</th>
              <th>Exp year</th>
              <th>Exp month</th>


            </tr>
              <!-- first table row ends here-->
              <!-- second table row starts here -->
              <!-- data fetching scrpit starts here -->

              <?php require 'php/payment_data_viewer.php' ?>

              <!-- end of the php script -->
                    <!-- start of the new vh inserter -->


                    <!--
                    <tr>
                      <th colspan="4">Enter details for a new vehicle</th>
                    </tr>



                    <form class="vehicle_data_inserter" target="vehicle_iframe_1" action="http://localhost/project%20iwt/src/php/vh_data_inserter.php" method="post">

                    <tr>

                        <td><input type="search" required name="vh_reg_no" id="vh_data" class="vh_reg_no" maxlength="20"></td>

                        <td><input type="search" required name="vh_type" id="vh_data" class="vh_type" maxlength="20"></td>

                        <td><input type="search" required name="vh_owner_nic" id="vh_data" class="vh_owner_nic" maxlength="12"></td>

                        <td><input type="search" required name="vh_user_nic" id="vh_data" class="vh_user_nic" maxlength="12"></td>


                    </tr>

                    <tr>
                      <td> <iframe name="vehicle_iframe_1" class="a_hidden_iframe"></iframe>
                      </td>
                      <td></td>
                      <td><button type="reload" id="a_button" name="button" onclick="window.location.reload();">Refresh</button></td>


                      <td ><button type="Submit" id="a_button" name="button">Enter Record</button></td>
                    </tr>

                  </form>




                  <form class="vh_data_deleter" target="vehicle_iframe_2" action="http://localhost/project%20iwt/src/php/vh_data_deleter.php" method="post">

                    <tr>

                    <th >

                      <a name="vehicle_area"></a>

                      Enter the Registaion number and <br>
                      owner NIC to delete a record

                      <iframe name="vehicle_iframe_2" on class="a_hidden_iframe"></iframe>

                    </th>


                        <td><input type="search"  required name="vh_reg_no" id="vh_data" class="vh_reg_no" maxlength="30"></td>

                        <td><input type="search" required name="vh_owner_nic" id="vh_data" class="vh_owner_nic" maxlength="30"></td>

                        <td ><button type="Submit" id="a_button"  name="button" >Delete Record</button></td>


                      </tr>

                </form>


              -->

          </table>
            <!-- end of the vehicle area table -->
            <br><br><br><br>

        </div>
        <!-- end of the payment_area  -->

        <!-- START OF THE BOOKING AREA -->

        <div class="vehicle_area">
          <a name="booking_area"></a>

          <!-- start of the BOOKING area table -->
          <table border="1" id="booking_table" >

            <tr >
              <th colspan="8" class="head_th">Booking Details</th>
            </tr>
            <tr>

              <th>User ID</th>
              <th>Pickup Location</th>
              <th>Drop Location</th>
              <th>Date</th>
              <th>Time</th>
              <th>Vehicle Type</th>
              <th>Package</th>


            </tr>

              <!-- data fetching scrpit starts here -->

              <?php require 'php/booking_data_viewer.php' ?>

              <!-- end of the php script -->

          </table>
            <!-- end of the vehicle area table -->

            <br><br><br><br>

        </div>
        <!-- END OF THE BOOKING AREA -->



        <!-- start  of the offers area  -->

        <a name="offers_area"></a>
        <div class="drivers_area">

          <div class="drivers_area_table">

            <table id="offers_table" >

              <tr >
                <th colspan="5" class="head_th">Offer Details</th>
              </tr>
              <tr>
              <!-- first table row -->
              <tr>
                <th>Offer ID</th>
                <th>Offer Description</th>
                <th>Precentage</th>

              </tr>
                <!-- first table row ends here-->

                <!-- second table row starts here -->
                <!-- data getching scrpit starts here -->

                 <?php  require 'php/offer_data_viewer.php'?>

                <!-- PHP CODES ends here  -->

                <!-- table row for user data inputs starts here -->
              </table>
              <table class="drivers_area_table">
                  <tr>
                    <th colspan="5" >Enter details for a new offer</th>
                  </tr>

                  <form class="new_offer" target="new_offer_iframe" action="http://localhost/project%20iwt/src/php/submitoffers.php" method="post">

                  <tr>

                      <td colspan="2"></td>

                      <td><input type="search" required name="offer_id"   id="offer_data" class="offer_id" maxlength="20"></td>

                      <td><input type="search" required name="offer_description" id="offer_data" class="offer_description" maxlength="100"></td>

                      <td><input type="search" required name="offer_precentage" id="offer_data" class="offer_precntage" maxlength="20"></td>

                   </tr>

                  <tr>
                    <td colspan="3"> <iframe name="new_offer_iframe" class="a_hidden_iframe"></iframe>
                    </td>
                    <td></td>



                    <td ><button type="Submit" id="a_button" name="button">Enter Offer</button></td>
                  </tr>

                </form>
                <!-- end of the data insert form -->


                <!-- start of the data delete form -->

                <form class="user_data_deleter" target="driver_iframe_2" action="http://localhost/project%20iwt/src/php/offer_data_deleter.php" method="post">

                    <tr>
                      <th colspan="2" >

                        Enter the Offer ID to delete the record
                        <iframe name="driver_iframe_2" on class="a_hidden_iframe">
                            <!-- <meta http-equiv="refresh" content="10"> -->

                        </iframe>
                      </th>


                        <td><input type="search" required name="offer_id" id="offer_data" class="offer_id" maxlength="30"></td>

                        <td ><button type="Submit" id="a_button"  name="button">Delete Record</button></td>

                        <td><button type="reload" id="a_button" name="button" onclick="window.location.reload();">Refresh</button></td>

                    </tr>

                  </form>
                  <!-- end of the data delete form -->

            </table>

          </div>
          <!-- end of the offer area table -->

        </div>
        <!-- end of the offer area -->

        <br><br><br><br>

        <!-- start of the total insert area -->
        <!-- 5555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555555 -->
        <!-- do not change anchor -->
        <a name="pending_trans"></a>

        <div class="drivers_area_table">

          <table id="offers_table" >

            <tr >
              <th colspan="6" class="head_th">PENDING TRANSACTIONS</th>
            </tr>
            <!-- first table row ends here-->


            <tr>  <!-- second table row starts here -->
              <th colspan="6">Please Enter the total amount</th>
              <td>

                <iframe name="total_interter_iframe" on class="a_hidden_iframe"></iframe>
                    <!-- iframe ends here for total inster --></td>
            </tr>


            <!-- third row stsrts here -->
            <tr>
                <!-- data getting scrpit starts here for total-->
                 <?php  require 'php/booking_data_viewer_for_total.php'?>
                 <!-- PHP CODES ends here  -->

            </tr>
            <!-- thirds row ends here -->

            </table>
            <!-- total inster table ends here -->

            <!-- ifrme for total inserter form goes here -->

        <br><br><br><br>
          </div>
          <!-- end of the total insert area -->

      </div >
      <!-- end of the main class -->
    </div>
    <!-- end of the main container class -->


<!-- number_of_user_avaliable card-->
  <script type="text/javascript" src="js/cards_dis_1.js"></script>

<!-- total income card -->
  <script type="text/javascript" src="js/cards_dis_2.js"></script>

<!-- total bookings card -->
  <script type="text/javascript" src="js/cards_dis_3.js"></script>

<!-- total tours card -->
  <script type="text/javascript" src="js/cards_dis_4.js"></script>


  </body>
</html>
