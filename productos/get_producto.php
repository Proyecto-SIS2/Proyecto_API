<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$query = "SELECT descripcion, cantidad, precio 
FROM producto WHERE '$params' = id_producto";
$productos = $db->fetchAll($query);
echo json_encode($productos);
