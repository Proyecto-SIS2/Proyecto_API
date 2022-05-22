<?php
require "../includes/connection.php";
require "../includes/requester.php";
$params = Requester::getParams();

$week1 = "SELECT COUNT(*) AS total FROM factura WHERE fecha > '$params->week_1' AND fecha < '$params->week_2'";
$week2 = "SELECT COUNT(*) AS total FROM factura WHERE fecha > '$params->week_2' AND fecha < '$params->week_3'";
$week3 = "SELECT COUNT(*) AS total FROM factura WHERE fecha > '$params->week_3' AND fecha < '$params->week_4'";
$week4 = "SELECT COUNT(*) AS total FROM factura WHERE fecha > '$params->week_4' AND fecha < '$params->week_5'";
$week5 = "SELECT COUNT(*) AS total FROM factura WHERE fecha > '$params->week_5' AND fecha < DATE_ADD('$params->week_3', INTERVAL 2 DAY)";

$result[0] = $db->fetchAll($week1);
$result[1] = $db->fetchAll($week2);
$result[2] = $db->fetchAll($week3);
$result[3] = $db->fetchAll($week4);
$result[4] = $db->fetchAll($week5);

echo json_encode($result);
