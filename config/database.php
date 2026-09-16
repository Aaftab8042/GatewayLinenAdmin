<?php

/*
|--------------------------------------------------------------------------
| GatewayLinen Database Connection
|--------------------------------------------------------------------------
| This file ONLY creates the SQL Server connection.
| Do not put HTML/CSS here.
|--------------------------------------------------------------------------
*/

$serverName   = "TR-HYFFVT2\\SQLEXPRESS";
$databaseName = "GatewayLinenDB";
$username     = "gateway_admin";
$password     = "Gateway@2026#Admin";

$connectionOptions = [
    "Database" => $databaseName,
    "UID" => $username,
    "PWD" => $password,
    "TrustServerCertificate" => true,
    "CharacterSet" => "UTF-8",
    "LoginTimeout" => 10
];

$conn = sqlsrv_connect(
    $serverName,
    $connectionOptions
);

if ($conn === false) {

    error_log(
        "GatewayLinen DB Error: " .
        print_r(sqlsrv_errors(), true)
    );

    die("Database connection failed. Please contact administrator.");
}