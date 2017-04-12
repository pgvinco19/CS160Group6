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
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            border: 1px solid #ddd;
        }

        th, td {
            border: none;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even){background: rgba(255, 255, 255, 0.1)}
        body { padding-top: 20px; }
        section {padding-top: 70px;}
        .button_1{
            padding-left: 70px
        }
        .button_2{
            padding-right: 70px
        }
        form {
            /* Just to center the form on the page */
            margin-top:  10px;
            width: 400px;
            /* To see the outline of the form */
            padding-left: 90px
            padding-top: 100px;
            border: 1px solid #CCC;
            text-align: left;

        }
        form div + div {
            margin-top: 1em;
        }

        label {
            /* To make sure that all labels have the same size and are properly aligned */
            display: inline-block;
            width: 90px;
            text-align: right;
        }

        input, textarea {

            /* To give the same size to all text fields */
            width: 300px;
            box-sizing: border-box;

            /* To harmonize the look & feel of text field border */
            border: 1px solid #999;
        }

        input:focus, textarea:focus {
            /* To give a little highlight on active elements */
            border-color: #000;
        }

        textarea {
            /* To properly align multiline text fields with their labels */
            vertical-align: top;

            /* To give enough room to type some text */
            height: 5em;
        }

        .button {
            /* To position the buttons to the same position of the text fields */
            padding-left: 90px; /* same size as the label elements */
        }

        button {
            /* This extra margin represent roughly the same space as the space
               between the labels and their text fields */
            margin-left: .5em;
        }
        #editProfile{display:none;}
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

<section>
</section>

<section id = "button_section">
    <script type="text/javascript">
        <!--
        function toggle_visibility(id) {
            var e = document.getElementById(id);
            if(e.style.display == 'block')
                e.style.display = 'none';
            else
                e.style.display = 'block';
        }


        //-->
    </script>
    <div class="button_section">
        <div style ='float: left' class = "button_1">
            <a href="seller_add_modify_item.html" type="submit" class="btn btn-default">Add Product</a>
        </div>
        <div style ='float: right' class = "button_2" >
            <a href="#editProfile" onclick="toggle_visibility('editProfile')" type="submit" class="btn btn-default"> Edit Profile</a>
        </div>
    </div>

</section>


<section id="sellerMain">

    <div class="container" style="overflow-x:auto;">
        <?php

                include("../sellerMainDisplayTickets.php");

                ?>
    </div>


    <div id='editProfile'; align = "center"; display="none">
        <form action="/my-handling-form-page" method="post">
            <div>
                <label for="name">First Name:</label>
                <input type="text" id="name" name="user_name" placeholder="first name">
            </div>
            <div>
                <label for="name">Last Name:</label>
                <input type="text" id="name" name="user_name" placeholder="last name">
            </div>
            <div>
                <label for="credit">Credit Card No:</label>
                <input type="credit" id="credit" name="credit" placeholder="credit card number">
            </div>
            <div>
                <label for="Address">Address Line 1:</label>
                <input id="address-line1" name="address-line1" type="text" placeholder="Street address, P.O. box, company name, c/o">
            </div>
            <div>
                <label for="Address2">Address Line 2:</label>
                <input id="address-line2" name="address-line2" type="text" placeholder="Apartment, suite , unit, building, floor, etc.">
            </div>
            <div>
                <label for="City">City:</label>
                <input id="city" name="city" type="text" placeholder="city">
            </div>
            <div>
                <label for="region">State:</label>
                <input id="region" name="region" type="text" placeholder="state / province / region">
            </div>
            <div>
                <label for="zip">Zip Code:</label>
                <input id="zip" name="zip" type="text" placeholder="zip code">
            </div>
            <div>
                <label for ="country"> Country: </label>
                <input id = "country" name = "country" type= "text" placeholder="country">
            </div>



            <div class="button">
                <button type="submit" class="btn btn-default">Update</button>
            </div>
        </form>
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
