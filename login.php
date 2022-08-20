<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="styles/login.css" rel="stylesheet" type="text/css">
	</head>
	<body>
    <div class="container">
        <form method="post" action="">
            <div id="div_login">
                <h1>Login</h1>
                <div>
                    <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
                </div>
                <div>
                    <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Password"/>
                </div>
                <div>
                    <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                </div>
            </div>
        </form>
				<a href="register.php"> make an account</a>
    </div>
		<?php
			include "config.php";

			if(isset($_POST['but_submit'])){

			    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
			    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);

			    if ($uname != "" && $password != ""){

			        $sql_query = "select count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
			        $result = mysqli_query($con,$sql_query);
			        $row = mysqli_fetch_array($result);

			        $count = $row['cntUser'];

			        if($count > 0){
			            $_SESSION['uname'] = $uname;
									$_SESSION['loggedIn'] = 'true';
			            header('Location: home.php');
			        }else{
			            echo "Invalid username and password";
			        }

			    }

			}
			?>
	</body>
</html>
