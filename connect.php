<?php
$HOST='localhost';
$USERNAME ='root';
$PASSWORD='';
$DATABASE='notepad';

// Create connection
$connection = new mysqli($HOST, $USERNAME,$PASSWORD,$DATABASE);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: ".$connection->connect_error);
} 

?>
