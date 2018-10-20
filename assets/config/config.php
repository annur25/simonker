<?php
$host = 'localhost' ;
$user = 'root';
$pass = '';
$dbname = 'simonker';

$connect = mysql_connect($host,$user,$pass) or die ('<h4 align="center">Error ! Database tidak bisa dibuka.</h4>');
$db_select = mysql_select_db ($dbname);
?>