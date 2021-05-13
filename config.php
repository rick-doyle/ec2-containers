<?php
function OpenCon()
{
  $dbhost = "localhost";
  $dbuser = "manish";
  $dbpass = "Test123456";
  $db = "connection";

  $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
  return $conn;
 }
 
function CloseCon($conn)
{
  $conn -> close();
}
?>
