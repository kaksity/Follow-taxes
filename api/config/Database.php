<?php

$dbName = 'tax-db';
$dbPassword = 'D@ud@p0n@2';
$dbUsername = 'kaksity';
$dbServer = 'localhost';

$dbConnection = new mysqli($dbServer,$dbUsername,$dbPassword,$dbName);

if ($dbConnection->connect_error) 
{
    exit();
}