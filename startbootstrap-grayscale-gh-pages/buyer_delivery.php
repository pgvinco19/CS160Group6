<!DOCTYPE html>
<html lang="en">

<?php

include("../connection.php");

$buyerLocation = $_GET['street_address'] . " " . $_GET['city'] . " " . $_GET['state_initial'] . " " . $_GET['zip_code'];
echo $buyerLocation;

//$productID = $_SESSION['productID'];
$productID = 10;

$sql_query = "SELECT TPclientID FROM Ticket_Products WHERE productID = " . $productID;
$response = @mysqli_query($db, $sql_query);
$row = mysqli_fetch_array($response);
$clientID = $row['TPclientID'];

$sql_query = "SELECT streetAddress, city, zipCode FROM User WHERE clientID = " . $clientID;
$response = @mysqli_query($db, $sql_query);
$row = mysqli_fetch_array($response);

$sellerLocation = $row['streetAddress'] . " " . $row['city'] . " " . $row['zipCode'];
echo $sellerLocation;

mysqli_close($db);

?>

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
    #panel
    {
    background-color: #ffffff;
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


<section id="transaction_summary" class="container content-section">
    <h2 class="text-center">Transaction Summary</h2>
    <h5 class="text-center">Order Details</h5>
    Buyer information, ticket information, etc goes here
    <br>
    Still need to work on formatting
    <br>
    <br>
    <br>
    <br>
    <h5 class="text-center">Delivery Information</h5>
    <!-- Map Section -->
    <div id="map" style="width: 600px; float: left"></div>
    <div id="panel" style="width: 500px; float: right;"></div>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                                          zoom: 13,
                                          center: {lat: 34.04924594193164, lng: -118.24104309082031}
                                          });
                                          
                                          var trafficLayer = new google.maps.TrafficLayer();
                                          trafficLayer.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBG8qGQLshrWPzNOsg_JnzIMCbVYqW0-QY&callback=initMap">
        </script>

    <script type="text/javascript">
        
        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();
        
        var map = new google.maps.Map(document.getElementById('map'), {
                                      zoom:7,
                                      mapTypeId: google.maps.MapTypeId.ROADMAP
                                      });
                                      var trafficLayer = new google.maps.TrafficLayer();
                                      trafficLayer.setMap(map);
                                      directionsDisplay.setMap(map);
                                      directionsDisplay.setPanel(document.getElementById('panel'));
                                      
                                      var request = {
                                          origin: 'San Jose, CA',
                                          destination: 'Palo Alto, CA',
                                          travelMode: 'DRIVING',
                                      };
    
    directionsService.route(request, function(response, status) {
                            if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                            }
                            });
        </script>



</section>

<script src="vendor/jquery/jquery.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://fonts.googleapis.com/css?family=Playfair+Display|Quicksand:400,700|Open+Sans|PT+Mono"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="js/grayscale.min.js"></script>
</body>

<!-- Footer -->
<footer>
    <div class="container text-center">
        <p>Copyright &copy; ETES 2017</p>
    </div>
</footer>
</html>
