<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'aidan');
define('DB_PASS', 'nwye-c.FkBzE5iKy');
define('DB_NAME', 'feedback-submissions');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if($conn->connect_error) {
  die('Connection Failed' . $conn->connect_error);
}