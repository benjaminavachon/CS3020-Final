<!Doctype hmtl>
<html>
<head>
<title> Database Connection </title>
<style>
body{
background: :-webkit-linear-gradient (left, lightgreen, yellow);
}
Form {
border: solid;
background: lightyellow;
width: 400px;
padding: 20px;
}
h1 {color: green;}
</style>
</head>
<body>
  <?php
  $servername = "localhost";
  $username = "ajs1175";
  $password = "maxidurr";
  $dbname = "ajs1175";

  // Create connection
  $connect = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
  }

  // prepare and bind
  $stmt = $connect->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
  $stmt->bind_param("ss", $name, $passwd);

$name=$_POST['name'];
$passwd=$_POST['passwd'];
$stmt->execute();

$stmt->close();
$connect->close();

header ("refresh:3; login.php");

?>
</body>
</html>
