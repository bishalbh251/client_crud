<?php
ob_start();
session_start();
include("connection.php");
include("clientmanager.php");
define("DBSERVER", "localhost");
define("DBUSER", "root");
define("DBPASSW", "");
define("DBNAME", "form");

$connect=new database();
$client=new clientmanager();
?>