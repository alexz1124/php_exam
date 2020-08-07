<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ibusiness";
$conn;

// Create Connection
start();

function start()
{
     global $servername, $username, $password, $dbname, $conn;
     $conn = mysqli_connect($servername, $username, $password, $dbname);

     // Check Connected
     if (!$conn) {
          die("Connection failed" . mysqli_connect_error());
     }
}
