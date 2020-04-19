<?php

    if(isset($_SESSION['Prihlaseno'])){
	if($_SESSION['Prihlaseno']){
            header("location: lorem");
	    exit("");
        }
    }

    if(isset($_POST['submit'])&& isset($_SESSION['username']) && isset($_SESSION['password'])){

	$username=$_POST['username'];
	$password=$_POST['password'];
	echo "username: ".$username;
	echo "password: ".$password;
	echo $_SESSION['username'];
	echo $_SESSION['password'];
	if(($_SESSION['username']==$username=$_POST['username'])&&($_SESSION['password']==$password=$_POST['password'])){
    	    $_SESSION['Prihlaseno'] = true;
	    header("location: lorem");
	    exit("");
	}else{
	    echo "Chybne heslo nebo username";
	}
    }

    if((isset($_SESSION['username']))&&(isset($_SESSION['password']))){

        echo"<form action='login' method='post'>";
    	echo"<label>username :</label>";
    	echo"<input id='name' name='username' placeholder='username' type='text'>";
    	echo"<label>password :</label>";
    	echo"<input id='password' name='password' placeholder='****' type='password'>";
    	echo"<input name='submit' type='submit' value='Register'>";
        echo"</form>";
    }else{
        header("location: register");
	exit("");
    }
?>
