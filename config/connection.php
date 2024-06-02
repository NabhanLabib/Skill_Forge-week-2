<?php

$host = 'localhost';
$userSql = 'root';
$password = '1234';
$databaseName = 'latihan_week_2';

// variable connection
$connection = mysqli_connect($host, $userSql, $password, $databaseName);
//check connection

if (mysqli_connect_errno())
{
    echo "Failed to connnect to MySQL:" . mysqli_connect_error();
    exit();
}

