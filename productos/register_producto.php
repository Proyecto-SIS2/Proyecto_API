<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

session_id($params->id);
session_start();
$id = $_SESSION['id'];

$query = "INSERT INTO producto (descripcion, cantidad, precio, fk_id_usuario) VALUES(
  '$params->description',
  '$params->quantity',
  '$params->price',
  '$id')";

$result = $db->insert($query);
Requester::endRequest('correct', array(
  'result' => $result
));
