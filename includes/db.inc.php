<?php
$dbServer = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'pharmacy';
$conn = mysqli_connect($dbServer, $dbUser, $dbPassword, $dbName);

  
// Check connection 
if ( !$conn ) { 
    die("Connection failed: " . mysqli_connect_error());echo "print";

}