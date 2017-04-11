<?php

include("connection.php");

// Check connection
if ($db->connect_error)
{
    die("Connection failed: " . $db->connect_error);
}

$TPclientID = 231; # PLACEHOLDER ------------------------------------------------------------------------

$numberOfTickets = $_GET['num_items'];
$eventName = $_GET['eventName'];
$eventDate = $_GET['event_date'];
$eventLocation = $_GET['street_address'] . " " . $_GET['city'] . " " . $_GET['state_initial'] . " " . $_GET['zip_code'];
$ticketPrice = $_GET['price'];
$eventDescription = $_GET['event_description'];
$eventCategory = $_GET['category'];


//SQL Query
$sql_query = "INSERT INTO `Ticket Products` (TPclientID, numberOfTickets, eventName, eventDate, 
eventLocation, ticketPrice, eventDescription, eventCategory) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($db, $sql_query);

//Bind the Variables to sql
mysqli_stmt_bind_param($stmt, "iisssiss", $TPclientID, $numberOfTickets, $eventName, $eventDate,
        $eventLocation, $ticketPrice, $eventDescription, $eventCategory);

//Execute Code
mysqli_stmt_execute($stmt);

$affected_rows = mysqli_stmt_affected_rows($stmt);
if($affected_rows == 1)
{
    echo 'Success';
    mysqli_stmt_close($stmt);

}
else
{
    echo 'Error Occurred<br />';
    echo mysqli_error();
}

mysqli_stmt_close($stmt);
mysqli_close($db);

?>