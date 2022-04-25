<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();
$query = "UPDATE producto SET descripcion = '$params->description', cantidad = '$params->quantity', precio = $params->price WHERE id_producto = $params->idProduct";

$result = $db->doQuery($query);
Requester::endRequest('correct', array(
    'result' => $result
));
