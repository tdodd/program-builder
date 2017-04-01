<?php

DEFINE('SERVER', 'localhost');
DEFINE('USERNAME', 'root');
DEFINE('PASSWORD', '');
DEFINE('DB_NAME', 'programs');

// Create connection
$conn = new mysqli(SERVER, USERNAME, PASSWORD);

// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

} else { 

  // Select database if no errors.
  $conn->select_db(DB_NAME); 
  
}

