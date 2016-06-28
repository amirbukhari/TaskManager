<?php include("register.php"); 
$doc ="<!doctype html>
<html>
	<head>
        <!-- Latest compiled and minified CSS -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' integrity='sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7' crossorigin='anonymous'>

        <!-- Optional theme -->
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' integrity='sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r' crossorigin='anonymous'>
        
		    <!-- JQUERY -->
        <link rel='stylesheet' href='//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css'>        
     
        
		<title>Task Manager</title>

		<meta charset='utf-8' />
		<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />  
        <link href='css/bootstrap.min.css' rel='stylesheet'>
        <link href='css/formControl.css' rel='stylesheet'>
        <link href='css/style.css' rel='stylesheet'>

	
	</head>

	<body>
        <div class='container-fluid'>
            <div class='row vertical-center-row'>
                <div class='col-md-6' align='right'>
                    <img class='img-responsive'  src='images/BlueACLogoLarge3.png'>
                </div>
                
                <div class='col-md-4 vertical-center'>";
				if($test==true){
					
					  $doc .=  "<form id='login_effect' style='display:none' method='post'>";
					}
					else
					{
						$doc .= "<form id='login_effect' method='post'>";
					}
                    
                      $doc .= "
                        <div class='form-group'>
                            
                            <input type='email' class='form-control' name='loginEmail' id='loginEmail' placeholder='Email' value='"; 
							if(isset($_POST['email']))
							{
								$doc.=addslashes($_POST['email']);
							}
							$doc.= "'/>
                            <input type='password' class='form-control' name='loginPassword' id='loginPassword' placeholder='Password' value='"; 
							if(isset($_POST['password']))
							{
								$doc.=addslashes($_POST['password']);
							}
							$doc.=  "'/>

                        </div>
                        
                        <input id='login' class='btn btn-success btn-lg' type='submit' name='submit' value='Log In' />
                        <input id='button' class='btn btn-success btn-lg' type='button' value='Sign Up' />
                        
                       ";
                    
                          

                   
                        
                    $doc .=   " </form>";
					if($test==true){
					  $doc .=  "<form id='signup_effect' method='post'>";
					}
					else
					{
						$doc .= "<form id='signup_effect' style='display:none' method='post'>";
					}
                    
                      $doc .= "  <div class='form-group'>
                            <input type='text' class='form-control' name='firstName' id='firstName' placeholder='First Name'/>
                            <br />
                            <input type='text' class='form-control' name='lastName' id='lastName' placeholder='Last Name'/>
                            <br />
                            <input type='email' class='form-control' name='email' id='email' placeholder='E-mail' value='"; 
							if(isset($_POST['email']))
							{
								$doc.=addslashes($_POST['email']);
							}
							$doc.= "'/>
                            <br />
                            <input type='password' class='form-control' name='password' id='password' placeholder='Password' value='"; 
							if(isset($_POST['password']))
							{
								$doc.=addslashes($_POST['password']);
							}
							$doc.= "'/>
                        </div>
                        
                        <input class='btn btn-success btn-lg' type='submit' name='submit' value='Create Account!'/>
                    </form>";
					  if ($error) {
                                $doc .= "<div class='alert alert-danger'>'".addslashes($error).'</div>';
                            }
                 $doc .=" </div>
            </div>
        </div>
        

    	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
	
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src='js/jquery-ui.js'></script>
        <script>


            $( '#button' ).click(function() {
                //$( '#signup_effect' ).toggle();
                $( '#login_effect' ).effect( 'drop', {direction : 'right'}, 'slow', function() {
                    //$( '#signup_effect' ).toggle();
                    //$( '#signup_effect' ).fadeIn();
                    $( '#signup_effect' ).effect( 'drop', {direction: 'right', mode: 'show'}, 'slow');
                })
            })

		</script>
        <script src='js/bootstrap.min.js'></script>
		
        	
	</body>
</html>";
echo $doc;
?>
