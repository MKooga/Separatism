<?php
$mysql_server = "localhost"; // localhost is common on most hosts.
$mysql_user = "root"; //  this is the name of your username of the server.
$mysql_password = ""; // the password connected to the username. MAKE IT COMPLEX.
$mysql_database = "separatism"; // the database name of where to connect to and where the information will be help.



$connection = new mysqli($mysql_server, $mysql_user, $mysql_password, $mysql_database);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>