<?php

include('db_connection.php');

$formName = $_POST["name"];
$formCompany = $_POST["company"];
$formEmail = $_POST["email"];
$formPhone = $_POST["phone"];
$formComments = $_POST["comments"];

$sql = "INSERT INTO contact_form (name, company, email, phone, comments) VALUES ('$formName', '$formCompany', '$formEmail', '$formPhone', '$formComments')";

if($connection->query($sql) === TRUE) {
    header('Location: /contact_us/thankyou.htm');
    exit();
} else {
    echo "Still can't query. " . $connection->error;
}
?>