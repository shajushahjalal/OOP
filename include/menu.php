<?php
	include 'controller/controller.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Object Oriented Project</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="font_awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

	<div class="container-fluid head-top hidden-sm hidden-xs">
		<div class="row">
			<div class="col-md-1">
			</div>
			<div class="col-md-6 text-uppercase">
				<h2><a href="findRoom.php">Find your Room</a></h2>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-default">
		<div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand hidden-lg hidden-md text-uppercase" href="index.html">Reserve BD</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			    <ul class="nav navbar-nav">		        
			        <li><a href="index.php">Home</a></li>
			        <li><a href="viewRoom.php">View Room </a></li>
			        <li><a href="reserveRoom.php">Reserve Room</a></li>
			        <li><a href="findRoom.php">Search Room</a></li>
			        <li><a href="showReservedRoom.php">All Reserved Room</a></li>
			        <?php
			    	if($_SESSION["user-role"] == 0)
			    		{ ?>
			    				        
						    <li><a href="Payment.php">Payment</a></li>			        
						   
						<?php
			    	}
			    
			    ?>
			    </ul>
			    <?php
			    	if($_SESSION["user-role"] == 1)
			    		{ ?>
			    			<ul class="nav navbar-nav">		        
						        <li><a href="addRoom.php">Add Room</a></li>			        
						    </ul>
						<?php
			    	}
			    
			    ?>
			    <ul class="nav navbar-nav navbar-right">        
			        <li class="dropdown">
				        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> <span class="caret"></span></a>
				        <ul class="dropdown-menu">
				        	<?php
				        		if(empty($_SESSION["user"]))
				        		{
				        			echo '<li><a href="#" data-toggle="modal" data-target="#login">Login</a> <a href="#" data-toggle="modal" data-target="#createAccount">Create Account</a></li>';
				        		}
				        		else
				        		{
				        			echo '<li><a href="?logout-user">Logout</a></li>';
				        		}
				        	?>				            
				        </ul>
				    </li>
			    </ul>
			</div>
		</div>
	</nav>
