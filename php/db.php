<?php
    //db credientials need to be added
    $servername = getenv('sql203.epizy.com');
    $dbusername = getenv('epiz_22029092');
    $dbpassword = "mrbrhc";
    $database = "epiz_22029092_4320final";
    $dbport = 3306;

    // Create connection
    $db = new mysqli($servername, $dbusername, $dbpassword, $database, $dbport);

    // Check connection, if error, post msg
    if ($db->connect_error) {
        die("Database connection failed: " . $db->connect_error);
    }
?>
