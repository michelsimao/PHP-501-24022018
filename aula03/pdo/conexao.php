<?php

$dbMysql = new PDO("mysql:host=localhost; dbname=aula04", "michel", "M!chel00");

$dbPostgres = new PDO("pgsql:host=localhost; dbname=aula04", "rafael", "123");


$dbMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$dbPostgres->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

var_dump($dbMysql);
echo "<br><br>";
var_dump($dbPostgres);