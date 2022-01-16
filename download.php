<?php

include 'check.php';

$sql_down = "SELECT idClientes, primerNombre,apellidoMaterno,apellidoPaterno,numero,correo FROM clientes";
$res = mysqli_query($conn, $sql_down);

$xml = new XMLWriter();

$xml->openURI("php://output");
$xml->startDocument();
$xml->setIndent(true);

$xml->startElement('countries');

while ($row = mysqli_fetch_assoc($res)) {
  $xml->startElement("country");

  $xml->writeAttribute('udid', $row['udid']);
  $xml->writeRaw($row['country']);

  $xml->endElement();
}

$xml->endElement();

header('Content-type: text/xml');
$xml->flush();
/* $xml = new XMLWriter();
$xml->openUri("php://output");
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('clientes');
$xml->endElement();



while($row= mysqli_fetch_assoc($fire)){
    
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
$xml->flush(); */
?>