<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$first = "SELECT DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')) AS first FROM factura WHERE MONTH(fecha) = '$params->fecha'";
$result = $db->fetchRow($first);
$query2 = "SELECT DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')) AS Week_1, DATE_ADD(DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')), INTERVAL 7 DAY) Week_2, DATE_ADD(DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')), INTERVAL 14 DAY) AS Week_3, DATE_ADD(DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')), INTERVAL 21 DAY) AS Week_4, DATE_ADD(DATE(CONCAT_WS('-', YEAR(factura.fecha), MONTH(factura.fecha), '01')), INTERVAL 28 DAY) AS Week_5 FROM factura WHERE MONTH(fecha) = '$params->fecha'";

$prod = $db->fetchRow($query2);
echo json_encode($prod);
