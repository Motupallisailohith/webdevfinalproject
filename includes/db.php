<?php
$host = 'localhost';
$db = 'website_db'; // The name of the database
$user = 'postgres'; // PostgreSQL user (default is 'postgres')
$pass = 'NewPassword'; // The password you set during PostgreSQL installation

// Create a connection to the PostgreSQL database
$conn = pg_connect("host=$host dbname=$db user=$user password=$pass");

if (!$conn) {
    die("Error: Unable to connect to the database.");
}
?>
