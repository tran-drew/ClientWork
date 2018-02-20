<?php

$db = '';
$host = 'localhost';
$dbuser = 'contact-form';
$dbpass = '';


$connection = new mysqli($host, $dbuser, $dbpass, $db);
if($connection->connect_error != NULL) {
	    die("Connection failed: " . $connection->connect_error);
	    }

?>
