<?php

date_default_timezone_set('America/Mexico_City');

function getConnection(){

  	//$host='localhost';
  	$dbname='dashgamesDB';
  	//$port='3307';
  	$user='root';
  	$pass='root1234';

  	$connStr="mysql:host={$host};dbname={$dbname};port={$port}";
  	$opt=array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES 'utf8'");

  	return new PDO($connStr,$user,$pass,$opt);
}
?>
