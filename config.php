<?php
session_start();
$host = "localhost"; /* Host name */
$user = "ajs1175"; /* User */
$password = "maxidurr"; /* Password */
$dbname = "ajs1175"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
