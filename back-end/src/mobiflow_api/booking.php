<?php
header('Content-Type : application/json');
$jsonInput = file_get_contents('php://input');
$dataReceived = json_decode($jsonInput, true);
$userID = $dataReceived['user-id'];
$bddData = array(
    'user-id' => $userID,
    'date' => date("d/m/Y-HH:ii")
);
//TODO requete BDD pour inserer la reservation
//TODO convenir du retour avec Spantu ( Dire 'OK' ou les errors)
echo json_encode(array("Penis" => "Gros"));
