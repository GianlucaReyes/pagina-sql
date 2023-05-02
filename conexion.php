<?php

$serverName = "DESKTOP-V6JHJ8B\SQLEXPRESS";
$database = "pibd";
$uid ="sa";
$pass = "12345";
$resultado="";
$connection = [
    "Database" => $database,
    "Uid" => $uid,
    "PWD" => $pass
];

$conn = sqlsrv_connect($serverName, $connection);
if(!$conn)
    die(print_r(sqlsrv_errors(),true));
echo 'conexion exitosa';
?>


