<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "joseph";
 $dbpass = "1234";
 $db = "hospital";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>