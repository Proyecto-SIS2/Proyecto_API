<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$query = "UPDATE producto SET eliminado = 1 WHERE id_producto = $params->id";

$result = $db->insert($query);
Requester::endRequest('correct', array(
    'result' => $result
));
