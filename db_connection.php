<?php
function connect_to_db(){
  //The following is user independent
  $hostname='localhost';
  //Your MariaDB username
  $user='bav1010';
  //Your MariaDB password
  $password='ayindime';

  $connection = mysqli_connect($hostname,$user,$password);

  return $connection;
}

function disconnect_from_db($conn){
 $conn -> close();
}
function connect_to_db_other(){
  //The following is user independent
  $hostname='localhost';
  //Your MariaDB username
  $user='ajs1175';
  //Your MariaDB password
  $password='maxidurr';

  $connection = mysqli_connect($hostname,$user,$password);

  return $connection;
}

?>
