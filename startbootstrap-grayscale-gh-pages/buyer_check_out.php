<?php
session_start();
$productID = $_GET['productID'];
$_SESSION['productID'] = $productID;
echo $_SESSION['productID'];
//var_dump($_SESSION);
//var_dump($GLOBALS);
session_write_close();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ETES - Electronic Ticket Exchange System</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="css/grayscale.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        h3, h4, h5, h6
        {
            margin: 0;
            line-height: 1.4;
        }

        h3
        {
            font-size: 16px;
            letter-spacing: 1px;
            text-align: left;
            margin-top: 5px;
        }

        h4
        {
            font-size: 16px;
            letter-spacing: 1px;
            text-align: left;
            line-height: 2;
        }

        h5
        {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: left;
            text-transform: uppercase;
            line-height: 1.4;
        }

        h5 > span
        {
            margin-left: 87px;
        }

        h5.total {
            margin-top: 20px;
        }

        h6
        {
            font-size: 18px;
            font-weight: 400;
            color: #f4f5f9;
            letter-spacing: 0;
            text-align: left;
            text-transform: uppercase;
            line-height: 1.8;
        }

        h6 > span
        {
            margin-left: 64px;
        }

        /*--------------------
        Checkout
        ---------------------*/

        ul.order-list {
            width: 100%;
            height: 205px;
            list-style: none;
            overflow-y: scroll;
            padding-right: 12px;
        }

        ul.order-list li {
            height: 60px;
            margin-left: -40px;
            overflow: hidden;
            border-bottom: 1px solid #e9ebf2;
        }

        ul.order-list li > img {
            width: 60px;
            height: 60px;
        }

        ul.order-list li > h4 {
            margin-top: 16px;
            line-height: 1;
            letter-spacing: 1px;
            text-align: right;

            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        ul.order-list li:hover > h4 {
            margin-top: 8px;
        }

        ul.order-list li > h5 {
            margin-top: 0;
            text-align: right;
            display: none;

            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }

        ul.order-list li:hover > h5 {
            margin-top: 3px;
            display: block;
        }

    </style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Navigation -->
<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="index.html">
                <i class="fa fa-play-circle"></i> <span class="light">Ticket</span>Home
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#seller">Seller</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#buyer">Buyer</a>
                </li>
                <li>
                    <a class="page-scroll" href="index.html#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<section id="edit_product" class="container content-section">
    <h2 class="text-center">Checkout</h2>

    <?php

    include("../connection.php");

    $sql_query = "SELECT eventName, eventDate, eventLocation, ticketPrice, eventCategory FROM Ticket_Products WHERE productID = " . $productID;
    $response = @mysqli_query($db, $sql_query);
    $row = mysqli_fetch_array($response);

    $eventName = $row['eventName'];
    $eventDate = $row['eventDate'];
    $eventLocation = $row['eventLocation'];
    $ticketPrice = $row['ticketPrice'];
    $eventCategory = $row['eventCategory'];

    mysqli_close($db);
    ?>

    <div id="order-list" class='order'>
        <h3 class="text-center">Orders</h3>

        <ul id='items-order-list' class='order-list'>
            <li>
                <h4><?php echo $eventName ?></h4>
                <h5><?php echo $eventDate ?></h5>
                <h5><?php echo $eventLocation ?></h5>
                <h5><?php echo $eventCategory ?></h5>
                <h5><?php echo $ticketPrice ?></h5>
                <h5><?php echo $eventName ?></h5>
            </li>
        </ul>

        <h5 id="serviceFeeCost">Service Fee</h5><h4>$ ##.##</h4>
        <h5 id="totalCost" class='total'>Total</h5><h1>$ ##.##</h1>
    </div>

    <form class="form" action="buyer_delivery.php" method="GET">

        <h3 class="text-center">Delivery Info</h3>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="first-name">First Name</label>
                <input class="form-control" name="first-name" id="first-name" type="text" placeholder="Enter First Name" required>
            </div>

            <div class="col-sm-6">
                <label for="last-name">Last Name</label>
                <input class="form-control" name="last-name" id="last-name" type="text" placeholder="Enter Last Name" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="street_address">Street Address:</label>
                <input class="form-control" name="street_address" id="street_address" type="text" placeholder="Enter Street Address" required>
            </div>

            <div class="col-sm-6">
                <label for="city">City:</label>
                <input class="form-control" name="city" id="city" type="text" placeholder="Enter City" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="state_initial_delivery">State Initial:</label>
                <select class="form-control" name="state_initial_delivery" id="state_initial_delivery">
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District Of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                </select>
            </div>

            <div class="col-sm-6">
                <label for="zip_code">Zip Code:</label>
                <input class="form-control" name="zip_code" id="zip_code" type="text" placeholder="Enter Zip Code" pattern="[0-9]{5}" required>
            </div>
        </div>

        <h3 class="text-center">Payment Info</h3>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="first-name-billing">First Name</label>
                <input class="form-control" name="first-name-billing" id="first-name-billing" type="text" placeholder="Enter First Name" required>
            </div>

            <div class="col-sm-6">
                <label for="last-name-billing">Last Name</label>
                <input class="form-control" name="last-name-billing" id="last-name-billing" type="text" placeholder="Enter Last Name" required>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6">
                <label for="card-number">Card Number:</label>
                <input type='text' id='card-number' name='card-number' placeholder='1234 1234 1234 1234'
                            title='Card Number' class="form-control" required>
            </div>

            <div class="col-sm-3">
                <label class="control-label" for="expire-month">Expire Month:</label>
                <div>
                    <select class="form-control" name="expire-month" id="expire-month">
                        <option>Jan</option>
                        <option>Feb</option>
                        <option>Mar</option>
                        <option>Apr</option>
                        <option>May</option>
                        <option>Jun</option>
                        <option>Jul</option>
                        <option>Aug</option>
                        <option>Sep</option>
                        <option>Oct</option>
                        <option>Nov</option>
                        <option>Dec</option>
                    </select>
                </div>
            </div>


            <div class="col-sm-3">
                <label class="control-label" for="expire-year">Expire Year:</label>
                <div>
                    <select class="form-control" name="expire-year" id="expire-year">
                        <script>
                            var myDate = new Date();
                            var year = myDate.getFullYear();
                            for(var i = 2017; i < year + 25; i++){
                                document.write('<option value="'+i+'">'+i+'</option>');
                            }
                        </script>
                    </select>
                </div>
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-12">
                <button id="submit-data" type="submit" class="btn btn-default">Submit</button>
                <button id="reset-data" type="reset" class="btn btn-default">Reset</button>
            </div>
        </div>

    </form>

</section>

<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="js/grayscale.min.js"></script>

<script src="https://fonts.googleapis.com/css?family=Playfair+Display|Quicksand:400,700|Open+Sans|PT+Mono"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>


</body>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; ETES 2017</p>
    </div>
</footer>
</html>
