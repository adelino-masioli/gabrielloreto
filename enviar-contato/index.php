<?php
include '../functions.php';
include '../connect.php';

$name    = $_POST['txtname'];
$about   = $_POST['txtabout'];
$phone   = $_POST['txtphone'];
$email   = $_POST['txtemail'];
$uf      = $_POST['txtuf'];
$city    = $_POST['txtcity'];
$msg     = $_POST['txtmsg'];


$sql = "INSERT INTO contact_site (name, about, phone, email, uf, city, msg) 
VALUES ('$name', '$about', '$phone', '$email', '$uf', '$city', '$msg')";

if ($conn->query($sql) === TRUE) {
    header('location: '.baseUrl().'contato-enviado-com-sucesso');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();