<?php
  //initiate database connection.
  include 'db_connection.php';
  $connection = connect_to_db();
  $database = "bav1010";
  mysqli_select_db($connection, $database);

  $ID = $_POST['submit'];
  echo $ID;

  $user_query = mysqli_query($connection, "SELECT * FROM user WHERE Username={$_POST['submit']}");
  $user_row = mysqli_fetch_array($user_query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
      echo "<title>{$user_row['Username']}</title>"
    ?>
  </head>
  <body>

  </body>
</html>
