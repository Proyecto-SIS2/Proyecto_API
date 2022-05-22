<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$query = "SELECT DISTINCT YEAR(fecha) AS value, YEAR(fecha) AS label FROM factura";

$result = $db->fetchAll($query);

echo json_encode($result);
