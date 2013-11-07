<?php

$mysql_server='localhost';
$mysql_username='adameven';
$mysql_password='startup';
$mysql_database='adameven_event_goddess';

$con=mysql_connect($mysql_server, $mysql_username, $mysql_password);
$selectedDB=mysql_select_db($mysql_database, $con);
?>