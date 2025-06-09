<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
include_once("config.php");
$con=mysqli_connect($config['DB_HOST'],$config['DB_USER'],$config['DB_PASS'],$config['DB_NAME']);
echo mysqli_connect_error();
?>