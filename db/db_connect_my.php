<?php

$hostname = 'localhost';
$username = 'root';
$password = '';  
$dbname = 'wnet';

$dbh = new PDO( 
    'mysql:host='.$hostname.';dbname='.$dbname, 
    $username, 
    $password, 
    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8") );

?>