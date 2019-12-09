<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

require_once ('./sql/sql.php');


$sth = $dbh->prepare("SELECT * FROM `t_nsh` WHERE 1");
$sth->execute();
$data=$sth->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($data);