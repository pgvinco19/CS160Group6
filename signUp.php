<?php 
include('connection.php'); 
if(isset($_GET["submit"])){
	    $first_name = stripcslashes(mysqli_real_escape_string($db,$_GET['first_name']));
        $last_name = stripcslashes(mysqli_real_escape_string($db,$_GET['last_name']));
        $email = stripcslashes(mysqli_real_escape_string($db,$_GET['email']));
        $phone = stripcslashes(mysqli_real_escape_string($db, $_GET['phone']));
        $username = stripcslashes(mysqli_real_escape_string($db, $_GET['username']));
        $password = stripcslashes(mysqli_real_escape_string($db,$_GET['password']));
        $creditcard = stripcslashes(mysqli_real_escape_string($db, $_GET['creditcard']));
        $street = stripcslashes(mysqli_real_escape_string($db, $_GET['street']));
        $city = stripcslashes(mysqli_real_escape_string($db, $_GET['city']));
        $state = stripcslashes(mysqli_real_escape_string($db, $_GET['state_initial_delivery']));
        $zip = stripcslashes(mysqli_real_escape_string($db, $_GET['zip']));
        $query = "SELECT email FROM User where email='".$email."'";
        $result = mysqli_query($db,$query);
        $numResults = mysqli_num_rows($result);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
        {
            $message =  "Invalid email address please type a valid email!!";
            echo "hello";
        }
        elseif($numResults>=1)
        {
            $message = $email." Email already exist!!";
            echo "hi";
        }
        else
        {


        	$sql_query = "INSERT INTO  User (firstName,lastName, password, username, email, streetAddress, city, zipCode, state, phoneNumber, creditCardNumber) values ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"; 
        	$stmt = mysqli_prepare($db, $sql_query); 

        	mysqli_stmt_bind_param($stmt, "sssssssssss", $first_name, $last_name, md5($password), $username, $email, $street, $city, $zip, $state, $phone, $creditcard); 
        	mysqli_stmt_execute($stmt); 
        	//echo mysqli_connect_error();
        	//var_dump($stmt);
        	//mysqli_stmt_close($stmt);
           //mysqli_query($db, "INSERT INTO User (firstName,lastName, password, username, email, streetAddress, city, zipCode, state, phoneNumber, creditCardNumber) values ('".$first_name."','".$last_name."', '".md5($password)."','".$username."','".$email."','".$street."','".$city."','".$zip."','".$state."','".$phone."','".$creditcard."')");

            $message = "Signup Sucessfully!!";

           //echo mysqli_error($db);

        //echo "INSERT INTO User (firstName,lastName, password, username, email, streetAddress, city, zipCode, state, phoneNumber, creditCardNumber) values ('".$first_name."','".$last_name."', '".md5($password)."','".$username."','".$email."','".$street."','".$city."','".$zip."','".$state."','".$phone."','".$creditcard."')";
        }


}

?>