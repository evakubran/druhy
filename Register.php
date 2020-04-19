<?php

    if(isset($_SESSION['Prihlaseno'])){
	if($_SESSION['Prihlaseno']){
	    header("location: lorem");
	    exit("");
        }
    }


    if(isset($_POST['submit'])) {

	$username=$_POST['username'];
        $password=$_POST['password'];
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        echo $_SESSION['username'];
        echo $_SESSION['password'];
        $_SESSION['Prihlaseno'] = false;

	if((isset($_SESSION['username']))&&(isset($_SESSION['password']))){
            header("location: login");
	    exit("");
        }
    }
?>

<html>
<head>
	<title>Zaregistruj se</title>
</head>
<body>
	<div id="main">
		<h1>Registrace</h1>
		<div>
			<h2>Login</h2>
			<form action="register" method="post">
				<label>UserName :</label>
				<input id="name" name="username" placeholder="username" type="text">
				<label>Password :</label>
				<input id="password" name="password" placeholder="****" type="password">
				<input name="submit" type="submit" value=" Register ">
			</form>
		</div>
	</div>
</body>
</html>