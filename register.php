<?php

    session_start();

    include("connection.php");
	$error=null;
	if(isset($_POST['submit'])){
		    if ($_POST['submit'] == "Create Account!") {
        
        if (!$_POST['firstName']) $error.="<br />Please enter your first name";
        
        if (!$_POST['lastName']) $erorr.="<br />Please enter your last name";
        
        if (!$_POST['email']) $error.="<br />Please enter your email";
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";
        
        if (!$_POST['password']) $error.="<br />Please enter your password";
            else {
                
                if (strlen($_POST['password']) < 8) $error.="<br />Please enter a password with at least 8 characters";
                if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password";
                
            }
        if ($error) $error = "There were error(s) in your sign up details:" .$error;
        else {

            $query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            $results = mysqli_num_rows($result);       
            
            if ($results) $error = "That email address is already registered.";
            else {
                
                $query = "INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`) VALUES ('".$_POST['firstName']."', '".$_POST['lastName']."', '".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                              
                mysqli_query($link, $query);
                
                echo "You've been signed up!";
                
                $_SESSION['id']=mysqli_insert_id($link);
                
                // Redirect to logged in page
                header("Location:myTasks.html");
            }
        }
    }

    if ($_POST['submit'] == "Log In") {
        
		$query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginEmail'])."'AND 
		password='" .md5(md5($_POST['loginEmail']) .$_POST['loginPassword']). "'LIMIT 1";

		$result = mysqli_query($link, $query);
		
		$row = mysqli_fetch_array($result);
        
        if ($row) {
            
            $_SESSION['id'] = $row['id'];
            
            // Redirect to logged in page
            header("Location:myTasks.html");
            
        } else {
            
            $error = "We could not find a user with that email and password. Please try again.";
            
        }
        
    }
    }

?>