<?php
    //db credientials need to be added
    $servername = getenv('4320nfl');
    $dbusername = getenv('4320nfl');
    $dbpassword = "4320nfl";
    $database = "4320nfl";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Check connection, if error, post msg
    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }
?>
