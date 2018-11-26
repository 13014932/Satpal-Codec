<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spicetech_db";

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("connection unsucessfull" .$conn->connect_error );
}

?>