<?php
    //db credientials
    $servername = getenv('IP');
    $dbusername = getenv('C9_USER');
    $dbpassword = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Check connection, if error, post msg
    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }
?>
