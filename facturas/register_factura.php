<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

session_id($params->id);
session_start();
$id=$_SESSION['id'];

$query = "INSERT INTO factura (RFC_Exp, RFC_Rec, regimen, impuestos, cond_pago, metodo_pago, fk_id_usuario) VALUES(
  '$params->rfc_exp',
  '$params->rfc_rec',
  '$params->regimen',
  '$params->impuestos',
  '$params->cond_pago',
  '$params->metodo_pago',
  '$id')";

$result = $db->insert($query);
//Requester::endRequest('correct');
Requester::endRequest('correct', array(
  'result' => $result
));