<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$query = "UPDATE producto SET cantidad = '$params->cantidad' WHERE id_producto = $params->id_producto";

$result = $db->doQuery($query);
Requester::endRequest('correct', array(
    'result' => $result
));
