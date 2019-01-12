<?php
include '../functions.php';
include '../connect.php';


$nome_completo     = $_POST['nome_completo'];
$cidade            = $_POST['cidade'];
$data_nascimento   = $_POST['data_nascimento'];
$telefone          = $_POST['telefone'];
$email             = $_POST['email'];
$novohit           = $_POST['novohit'];
$radio           = $_POST['radio'];


$sql = "INSERT INTO contacts (nome_completo, cidade, data_nascimento, telefone, email, novohit, radio)
VALUES ('$nome_completo', '$cidade', '$data_nascimento', '$telefone', '$email', '$novohit', '$radio')";

if ($conn->query($sql) === TRUE) {
    header('location: '.baseUrl().'promocao-gabriel-loreto-pedalando-com-voce-cadastrada-com-sucesso');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();