<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Database connection settings
$servername = "localhost";
$username = "flippecc_myiasme";
$password = "#levis501lvC";
$dbname = "flippecc_product_profit";
// Create connection
$dbconn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($dbconn->connect_error) {
    die("Connection failed: " . $dbconn->connect_error);
}
// No closing PHP tag - this prevents accidental whitespace after the tag