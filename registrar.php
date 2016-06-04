<?php

    if ($_POST['submit']) {
        
        if (!$_POST['email']) $error.="<br />Please enter your email";
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Please enter a valid email address";
        
        if (!$_POST['password']) $error.="<br />Please enter your password";
            else {
                
                if (strlen($_POST['password']) < 8) $error.="<br />Please enter a password with at least 8 characters";
                if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Please include at least one capital letter in your password";
                
            }
        if ($error) echo "There were error(s) in your sign up details:" .$error;
        else {
            
            include("connection.php");

            $query="SELECT * FROM `users` WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'";

            $result = mysqli_query($link, $query);

            $results = mysqli_num_rows($result);       
            
            if ($results) echo "That email address is already registered.";
            else {
                
                $query = "INSERT INTO `users` (`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['email'])."', '".md5(md5($_POST['email']).$_POST['password'])."')";
                              
                mysqli_query($link, $query);
                
                echo "You've been signed up!";
            }
        }
    }
    

?>


<!doctype html>
<html>
	<head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        
		    <!-- JQUERY -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">        
     
        
		<title>Task Manager</title>

		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />  
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/formControl.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        
        
    

	</head>

	<body>

		
        <!-- LOGIN DIV -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6" align="right">
                    <img class="img-responsive vertical-center" style="width:85%" src="images/BlueAJLogoLarge.png">
                </div>
                
                <div class="col-md-4">
                    <form id="login_effect">
                        <div class="form-group login_padding">
                            
                            <input type="text" class="form-control" name="username" id="username" placeholder="Username"/>
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password"/>

                        </div>
                        
                        <button id="login" class="btn btn-success btn-lg" style="button">Login</button>
                        <input id="button" class="btn btn-success btn-lg" type="button" value="Sign Up" />
                        
                    </form>
                </div>
                
                <div class="col-md-4">
                    <form id="signup_effect" style="display:none" method="post">
                        <div class="form-group signup_padding">
                            <input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name"/>
                            <br />
                            <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name"/>
                            <br />
                            <input type="text" class="form-control" name="email" id="email" placeholder="E-mail"/>
                            <br />
                            <input type="text" class="form-control" name="password" id="password" placeholder="Password"/>
                        </div>
                        
                        <input type="text" class="btn btn-success btn-lg" type="submit" name="submit" value="Create Account!"/>
                    </form>
                </div>
            </div>
        </div>
        

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/jquery-ui.js"></script>
        <script>


            $( "#button" ).click(function() {
                //$( "#signup_effect" ).toggle();
                $( "#login_effect" ).effect( "drop", {direction : "right"}, "slow", function() {
                    //$( "#signup_effect" ).toggle();
                    //$( "#signup_effect" ).fadeIn();
                    $( "#signup_effect" ).effect( "drop", {direction: "right", mode: "show"}, "slow");
                })
            })

		</script>
        <script src="js/bootstrap.min.js"></script>
        
	</body>
</html>

