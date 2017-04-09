<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>

Welcome <?php echo $_REQUEST["name"]; ?><br>
Your email address is: <?php echo $_REQUEST["email"]; ?><br>

<?php

include("connection.php");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

$sql = "SELECT * FROM Users";
$result = mysqli_query($db, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo $row . "<br>";
    }
} else {
    echo "0 results";
}

// prepare and bind
$stmt = $db->prepare("INSERT INTO `Ticket Products` (productID, clientID, numberOfTickets, eventName, eventDate, eventLocation, ticketPrice, eventCategory, eventDescription) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iiisssiss", $productID, $clientID, $numberOfTickets, $eventName, $eventDate, $eventLocation, $ticketPrice, $eventCategory, $eventDescription);

$streetAddress = "myAddress";
$city = "San Jose";
$state_initial = "CA";
$zip_code = 95111;

$productID = 132465789;
$clientID = 231;
$numberOfTickets = 5;
$eventName = "my event Name";
$eventDate = "2017-01-01";
$eventLocation = $streetAddress . ", " . $city . $state_initial . ", " . $zip_code;
$ticketPrice = 100;
$eventDescription = "Hello World";
$eventCategory = "Music";
#NULL for URL
$stmt->execute();

echo $eventLocation;
echo "New records created successfully";

$stmt->close();
$db->close();
mysqli_close($db);

?>
?>





</body>
</html>