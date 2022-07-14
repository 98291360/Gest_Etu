<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php require_once("entete.php") ?>
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		 <div class="panel panel-default">
 	<div class="panel-heading">Authentification</div>
 	<div class="panel-body">
 		<form action="Authentifier.php" method="post" enctype="multipart/form-data">
 			
 			<div class="form-group">
 				<label class="control-label">Login:</label>
 				<input type="text" name="username" class="form-group">
 			</div>

 			<div class="form-group">
 				<label class="control-label">Password:</label>
 				<input type="Password" name="Password" class="form-group">		
 			</div>

 			<div>
 				<button type="submit" class="btn btn-primary btn-lg disabled" id="submitButton">Login</button>
 			</div>
 			
 		</form>
 	</div>
 	
 </div>
		
	</div>

</body>
</html>