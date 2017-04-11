<?php
include("php/connection.php");

//Getting tickets listing from certain seller
$sql = "SELECT eventName, eventDate, eventLocation, numberOfTickets FROM `Ticket Products` WHERE TPclientID='231'";
$response = $db->query($sql);

if ($response->num_rows > 0)  {
    echo "<table><tr><th>Event Name</th><th>Date</th><th>Location</th><th>Quantity</th></tr>";
    // output data of each row
    while($row = $response->fetch_assoc()) {
        echo "<tr><td>".$row["eventName"]."</td><td>".$row["eventDate"]."</td><td>".$row["eventLocation"]."</td><td>".$row["numberOfTickets"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
mysqli_close($db);
?>