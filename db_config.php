<?php
$host="localhost";
$dbusername="root";
$dbpassword="root";
$db="taqyem";


        $conn = mysqli_connect($host, $dbusername, $dbpassword,$db);
        if (!$conn) {
          die('Could not connect: ' . mysql_error());
        }



/*

$basedate = new DateTime(date("Y-m-d"));
$basedate->sub(new DateInterval('P30D'));

$from_date= $basedate->format('Y-m-d');
$to_date=date("Y-m-d");

date_default_timezone_set('America/Chicago');
$refresh_date = date('m/d/Y h:i:s a', time());
*/
?>