<?php

    if(isset($_SESSION['login_user'])){
	header("location: lorem");
	exit("");
    }

    if(session_destroy()){
        header("Location: register");
	exit("");
    }
?>