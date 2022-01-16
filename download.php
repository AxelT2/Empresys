<?php

include 'check.php';

$sql_down = "SELECT idCliente, primerNombre,apellidoMaterno,apellidoPaterno,numero,correo FROM clientes";
$res = mysqli_query($conn, $sql_down);


$xml = new XMLWriter();
$xml->openUri("php://output");
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('clientes');
$xml->endElement();



while($row= mysqli_fetch_assoc($res)){
    
    $xml->startElement('clientes');
    
        $xml->startElement('id');
        $xml->writeRaw($row["idCliente"]);
        $xml->endElement();
        $xml->startElement('primerNom');
        $xml->writeRaw($row["primerNombre"]);
        $xml->endElement();
        $xml->startElement('apellidoMa');
        $xml->writeRaw($row["apellidoMaterno"]);
        $xml->endElement();
        $xml->startElement('apellidoPa');
        $xml->writeRaw($row["apellidoPaterno"]);
        $xml->endElement();
        $xml->startElement('Num');
        $xml->writeRaw($row["numero"]);
        $xml->endElement();
        $xml->startElement('email');
        $xml->writeRaw($row["correo"]);
        $xml->endElement();
    
    $xml->endElement();
    
    
}

header('Content-type: text/xml');
$xml->flush(); 
?>