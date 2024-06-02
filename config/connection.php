<?php

$host = 'localhost';
$userSql = 'root';
$password = '1234';
$databaseName = 'latihan_week_2';

// variable connection
$connection = mysqli_connect($host, $userSql, $password, $databaseName);
//check connection

if ($connection->connect()){
    echo "Berhasil terhubung";

}else{
    echo "gagal terhubung";
}