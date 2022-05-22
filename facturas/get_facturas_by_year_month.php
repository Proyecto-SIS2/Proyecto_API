<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$month1 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 1";
$month2 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 2";
$month3 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 3";
$month4 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 4";
$month5 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 5";
$month6 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 6";
$month7 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 7";
$month8 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 8";
$month9 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 9";
$month10 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 10";
$month11 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 11";
$month12 = "SELECT COUNT(*) AS total FROM FACTURA WHERE YEAR(fecha) = '$params->fecha' AND MONTH(fecha) = 12";

$result[0] = $db->fetchAll($month1);
$result[1] = $db->fetchAll($month2);
$result[2] = $db->fetchAll($month3);
$result[3] = $db->fetchAll($month4);
$result[4] = $db->fetchAll($month5);
$result[5] = $db->fetchAll($month6);
$result[6] = $db->fetchAll($month7);
$result[7] = $db->fetchAll($month8);
$result[8] = $db->fetchAll($month9);
$result[9] = $db->fetchAll($month10);
$result[10] = $db->fetchAll($month11);
$result[11] = $db->fetchAll($month12);

echo json_encode($result);
