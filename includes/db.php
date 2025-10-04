<?php
// Database connection - UPDATE these values to match your environment
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'learnhub';
$conn = new mysqli($host,$user,$pass,$dbname);
if($conn->connect_error) die('DB Connection error: '.$conn->connect_error);
