
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	<?php require_once("entete.php") ?>
	<div class="container spacer col-md-6 col-xs-12 col-md-offset-3">
		 <div class="panel panel-default">
 	<div class="panel-heading">Saisi de Etudiants </div>
 	<div class="panel-body">
 		<form action="SaveEtudiant.php" method="post" enctype="multipart/form-data">
 			<div class="form-group">
 				<label class="control-label">Nom:</label>
 				<input type="text" name="nom" class="form-group">
 				
 			</div>
 			<div class="form-group">
 				<label class="control-label">Photo:</label>
 				<input type="file" name="photo" class="form-group">
 				
 			</div>
 			<div class="form-group">
 				<label class="control-label">Email:</label>
 				<input type="text" name="email" class="form-group">
 				
 			</div>
 			<div>
 				<button type="submit" class="btn btn-primary btn-lg disabled" id="submitButton">Save</button>
 			</div>
 			
 		</form>
 	</div>
 	
 </div>
		
	</div>

</body>
</html>