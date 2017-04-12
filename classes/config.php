<?php

$hostname = "sql2.njit.edu"   ;
$username = "rra27" ;
$dbname  = "rra27"   ;
$password = "HffMudpt1" ;

($dbh = mysql_connect ( $hostname, $username, $password, $dbname) )
	                    or die ( "Unable to connect to MySQL database" );
	mysql_select_db($dbname) or die("incorrect database name");
	
	
print "";
mysql_select_db( $dbname );

?>

