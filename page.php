<?php
  //get ID from submit
  $id = $_POST['submit'];
  //initiate database connection.
  include 'db_connection.php';
  $connection = connect_to_db();
  $database = "bav1010";
  mysqli_select_db($connection, $database);

  $video_sql = mysqli_query($connection, "SELECT * FROM video WHERE ID=$id");
  $comment_sql = mysqli_query($connection, "SELECT * FROM Comment WHERE VideoID=$id");

  $video_row = mysqli_fetch_array($video_sql);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php
    echo "<title>{$video_row['Title']}</title>";
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/page.css">
  </head>
  <body>
    <!--Navbar-->
    <div class="headbar" id="myHeader">
      <nav class='navbar-sm'>
        <a href="./index.php">Home</a>
        <a href="./login.html">login</a>
      </nav>
    </div>
    <!--Header For Article page thingy content-->
    <div class='content'>
      <div class='post-content'>
        <?php
          echo"<h2>{$video_row['Title']}</h2>";
          echo"<h6>{$video_row['Description']}</h6>";
          $external_link = $video_row['Link'];
          if (@getimagesize($external_link)) {
            echo "<img src={$video_row['Link']} style='max-width: 620px;'>
            <br>";
          }
          if($video_row['Link'] != NULL){
            echo"
            <a href='{$video_row['Link']}'target='_blank'>{$video_row['Link']}</a>
            ";
          }
        ?>
      <form action='profile.php' method='post'>
        <?php
          while($comment_row = mysqli_fetch_array($comment_sql)){
            echo"
            <div class='horizontal-bar'>
              <hr>
            </div>
            <div class='comment'>
              <div class='profilepitcure'>
                <img src='./images/option1.jpg' width='50px' height='50px'>
              </div>
              <div class='username'>
                <button class='btn btn-default' type='submit' name='submit' value='{$comment_row['Username']}'>
                  <h5>{$comment_row['Username']}</h5>
                </button>
              </div>
              <div class='comment-contents'>
                <h6>{$comment_row['Comment']}</h6>
              </div>
            </div>
            ";
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
