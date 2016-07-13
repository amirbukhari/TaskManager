<?php 
	$doc ="<!doctype html>
<html>
	<head>
		<title>Task Manager</title>
		
		<meta charset='utf-8' />
		<meta http-equiv='Content-type' content='text/html; charset=utf-8' />
		<meta name='viewport' content='width=device-width, initial-scale=1' />  
		<link href='css/bootstrap.min.css' rel='stylesheet'>
		<link href='css/formControl.css' rel='stylesheet'>
		<link href='css/style.css' rel='stylesheet'>
	</head>
	
	<body>
		<nav class='navbar navbar-default navbar-fixed-top'>
			<div class='container-fluid'>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='#'><img alt='Brand' src='images/BlueAJLogoSmall.png'></a>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
					<ul class='nav navbar-nav'>
						<li class='active'><a href='#'>My Tasks <span class='sr-only'>(current)</span></a></li>
						
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>My Projects <span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='#'>Create New</a></li>
								<li><a href='#'>Another action</a></li>
								<li><a href='#'>Something else here</a></li>
								<li role='separator' class='divider'></li>
								<li><a href='#'>Separated link</a></li>
								<li role='separator' class='divider'></li>
								<li><a href='#'>One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class='navbar-form navbar-left' role='search'>
						<div class='form-group'>
							<input type='text' class='form-control' placeholder='Search Tasks'>
						</div>
						<button type='submit' class='btn btn-default'>Submit</button>
					</form>
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='#'>Link</a></li>
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Dropdown <span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='#'>Action</a></li>
								<li><a href='#'>Another action</a></li>
								<li><a href='#'>Something else here</a></li>
								<li role='separator' class='divider'></li>
								<li><a href='#'>Separated link</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
		
		
		
		
		
		
		<div class='container-fluid'>
			<div class='row' id='top'>
				<div class='col-md-2' id='myTasksProfile'>
					<img class='img-circle img-responsive' id='profile' src='https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/13230181_10209511198476505_9054185659490531765_n.jpg?oh=b587cdbf4bf3f925a7861b6a8ab6aedd&oe=57D8253F'>
					<p>Hi Amir!</p>
					<div id='notifications'>
						
						<h3>Notifications</h3>
						<div class='row notificationAddedTask' id='notificationFirst'>
							<div class='col-sm-3 notificationImage' >
								<img class='img-circle img-responsive' src='https://scontent-yyz1-1.xx.fbcdn.net/v/t1.0-9/12074488_10153265371832252_4971633575690666185_n.jpg?oh=6da14179ede837c2442069ca906ab055&oe=58067494'>
							</div>
							<div class='col-sm-8'>
								<p>John added a task to the 'Task Manager' Project</p>
							</div>
						</div>
						
					</div>
				</div>
				<div class='col-md-10' id='myTasks' >
					<h1>My Tasks</h1>
					<button type='button' class='btn btn-default' aria-label='Left Align'>
						<span class='glyphicon glyphicon-plus' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-default' aria-label='Left Align'>
						<span class='glyphicon glyphicon-list' aria-hidden='true'></span>
					</button>
					<button type='button' class='btn btn-default' aria-label='Left Align'>
						<span class='glyphicon glyphicon-calendar' aria-hidden='true'></span>
					</button>
					
					
					
					
					
					
					<div class='row'>
						<div class='col-md-6 tasks' id='pendingTasks'>
							<h2>Pending Tasks</h2>
							<label class='control control--checkbox'>Wake Up at 6:30 AM
								<input type='checkbox'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Get Ready for Work
								<input type='checkbox'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Leave for Work
								<input type='checkbox' />
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Slave at Work All Day
								<input type='checkbox' />
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Leave Work and Drive Home
								<input type='checkbox' />
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Eat Dinner
								<input type='checkbox' />
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Watch Transformers
								<input type='checkbox'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Set Alarm for 6:30 AM
								<input type='checkbox' />
								<div class='control__indicator'></div>
							</label>
						</div>
						<div class='col-md-6 tasks' id='completedTasks'>
							<h2>Completed Tasks</h2>
							<label class='control control--checkbox'>Wake Up at 6:30 AM
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Get Ready for Work
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Leave for Work
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Slave at Work All Day
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Leave Work and Drive Home
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Eat Dinner
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Watch Transformers
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
							
							<label class='control control--checkbox'>Set Alarm for 6:30 AM
								<input type='checkbox' checked='checked'/>
								<div class='control__indicator'></div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src='js/bootstrap.min.js'></script>
		
		
	</body>
</html>";

echo $doc;
?>