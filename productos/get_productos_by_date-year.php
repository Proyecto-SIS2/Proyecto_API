<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

session_id($params->id);
session_start();
$id = $_SESSION['id'];

$query = "SELECT p.descripcion, SUM(f.cantidad_comprada) AS total FROM producto p INNER JOIN factura f ON p.id_producto = f.fk_id_producto WHERE p.fk_id_usuario = $id AND YEAR(f.fecha) = $params->fecha GROUP BY p.descripcion";
$prod = $db->fetchAll($query);
echo json_encode($prod);
