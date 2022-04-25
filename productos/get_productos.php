<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

session_id($params->id);
session_start();
$id = $_SESSION['id'];

$query = "SELECT id_producto, descripcion, cantidad, precio 
FROM producto WHERE fk_id_usuario = $id";
$productos = $db->fetchAll($query);
echo json_encode($productos);
