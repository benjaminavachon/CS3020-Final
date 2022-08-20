<?php
  //initiate database connection.
  include 'db_connection.php';
  $connection = connect_to_db();
  $database = "bav1010";
  mysqli_select_db($connection, $database);

  $sql = mysqli_query($connection, "SELECT * FROM video");

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Video Stuff</title>
    <link rel="stylesheet" href="./styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="headbar" id="myHeader">
      <nav class='navbar-sm'>
        <a href="./index.php">Home</a>
        <a href="./login.php">login</a>
      </nav>
    </div>
    <div class="content">
      <div class="create">
        <form action="create.php" method="post">
          <button class='btn btn-default' type="submit" name="create" style='color:#d2d5d7;margin-left:auto;'>
            Create Post
          </button>
        </form>
      </div>
      <form action='./page.php' method='post'>
      <?php
        while($row = mysqli_fetch_array($sql)){
          echo"
            <div class='page-article'>
              <button class='btn btn-default' type='submit' name='submit' value='{$row['ID']}' style=padding:0;'>
                <h4>{$row['Title']}</h4>
              </button>
              <h6>{$row['Description']}</h6>
            </div>";
        }

        $c=0;
        while($c<100){
          echo"yo<br>";
          $c+=1;
        }
      ?>
      </form>
    </div>
    <script>
      window.onscroll = function() {myFunction()};

      var header = document.getElementById("myHeader");
      var sticky = header.offsetTop;

      function myFunction() {
        if (window.pageYOffset > sticky) {
          header.classList.add("sticky");
        } else {
          header.classList.remove("sticky");
        }
      }
    </script>
  </body>
</html>
