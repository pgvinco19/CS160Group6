<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>

Welcome <?php echo $_REQUEST["name"]; ?><br>
Your email address is: <?php echo $_REQUEST["email"]; ?><br>

<?php

var_dump($GLOBALS);

if(isset($_REQUEST['submit'])){
    $test = $_REQUEST['name'];
    echo $test;
}
?>

</body>
</html>