<?php
//include('login.php'); // Include Login Script
/*** begin our session ***/
session_start();


if ((isset($_SESSION['username']) != '')) 
{
header("Location: home.php");
}
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

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
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
                        <a class="page-scroll" href="#seller">Seller</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#buyer">Buyer</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">ETES</h1>
                        <p class="intro-text">Welcome to the Electronic Ticket Exchange System</p>
                        <a href="#seller" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Seller Section -->
    <section id="seller" class="container content-section text-center">
        <h2>Seller</h2>
        <div id="form">
            <!-- Container -->
            <div class="container">
                <div class="col-lg-6 col-lg-offset-3">
                    <div id="userform">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <li class="active"><a href="#login"  role="tab" data-toggle="tab">LOGIN</a></li>
                            <li><a href="#signup"  role="tab" data-toggle="tab">SIGN UP</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="login">
                                <p></p>
                                <form id="login" method = "GET" action = "../login.php">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="username" name = "username" required autocomplete="off" placeholder="Username">
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" id="password" name = "password" required autocomplete="off" placeholder="Password">
                                            <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="mrgn-30-top">
                                        <button type="submit" name = "submit" class="btn btn-default btn-lg">Log In</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade in" id="signup">
                                <p></p>
                                <form id="signup" method = "GET" action="../signUp.php">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="first_name" name ="first_name" required autocomplete="off" placeholder="First Name">
                                                    <p class="help-block text-danger"></p>
                                                    </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="last_name" name = "last_name" required autocomplete="off" placeholder="Last Name">
                                                    <p class="help-block text-danger"></p>
                                                    </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="email" name = "email" required autocomplete="off" placeholder="Email">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="phone" name = "phone" required autocomplete="off" placeholder="Phone">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="username" name = "username" required autocomplete="off" placeholder="Username">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="password"  name = "password" required autocomplete="off" placeholder="Password">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="creditcard" name = "creditcard" required autocomplete="off" placeholder="Credit Card: xxxx-xxxx-xxxx-xxxx">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="street" name = "street" required autocomplete="off" placeholder="Street Address">
                                            <p class="help-block text-danger"></p>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="city" name = "city" required autocomplete="off" placeholder="City">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <select class="form-control" name="state_initial_delivery" id="state_initial_delivery">
                                                <option selected disabled>State</option>
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
                                        <div class="col-xs-12 col-sm-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="zip" name = "zip" required autocomplete="off" placeholder="Zip Code">
                                                <p class="help-block text-danger"></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mrgn-30-top">
                                        <button type="submit" name = "submit" class="btn btn-default btn-lg">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
    </section>

    <!-- Buyer Section -->
    <section id="buyer" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Buyer</h2>
                    <form id="search">
                        <div class="form-group">
                            <a href="buyer_search.php" type="submit" class="btn btn-default btn-lg">Search for Tickets</a>
                    </form>


                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact ETES</h2>
                <p>Feel free to email us to as questions, provide some feedback, give us suggestions, or to just say hello!</p>
                <p><a href="#">feedback@etes.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; ETES 2017</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/grayscale.min.js"></script>

</body>
</html>
