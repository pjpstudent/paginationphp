<?php 
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "PRIVATE USERNAME"; 
$dbPassword = "PRIVATE PASSWORD"; 
$dbName     = "php_clicks"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}