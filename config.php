<?php

$db_name = 'test';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$dsn = "mysql:dbname=$db_name;host=$db_host";

$pdo = new PDO($dsn, $db_user, $db_pass);