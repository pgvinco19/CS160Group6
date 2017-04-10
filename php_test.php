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
    if ($db->connect_error)
    {
        die("Connection failed: " . $db->connect_error);
    }

    $sql = "SELECT firstName, lastName, email, streetAddress, city, zipCode, phoneNumber FROM User";
    $response = mysqli_query($db, $sql);

    if($response)
    {
        echo '<table>';

        while($row = mysqli_fetch_array($response))
        {

            echo '<tr><td align="left">' .
                $row['firstName'] . '</td><td align="left">' .
                $row['lastName'] . '</td><td align="left">' .
                $row['email'] . '</td><td align="left">' .
                $row['streetAddress'] . '</td><td align="left">' .
                $row['city'] . '</td><td align="left">' .
                $row['state'] . '</td><td align="left">' .
                $row['zipCode'] . '</td><td align="left">' .
                $row['phoneNumber'] . '</td><td align="left">';

            echo '</tr>';
        }

        echo '</table>';

    }
    else
    {
        echo "Couldn't issue database query<br />";
        echo mysqli_error($db);
    }


    $test_query = "SHOW TABLES FROM cs160database";
    $result = mysqli_query($db, $test_query);

    $tblCnt = 0;
    while($tbl = mysqli_fetch_array($result))
    {
        $tblCnt++;
        echo $tbl[0]."<br />\n";
    }

    if (!$tblCnt)
    {
        echo "There are no tables<br />\n";
    }
    else
    {
        echo "There are $tblCnt tables<br />\n";
    }




// Close connection to the database
mysqli_close($db);

?>

</body>
</html>