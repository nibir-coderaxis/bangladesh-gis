<?php

/**
 * Database connection configuration
 * 
 */

//local connection
$dbhost='localhost';	
$dbname='dghs_dhis2_locations';	
$dbuser='root';
$dbpass='saikat';

mysql_select_db($dbname,mysql_connect($dbhost, $dbuser, $dbpass))or die(mysql_errno());

?>
