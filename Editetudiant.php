
<?php
    $id_etudiant = $_GET['id_etudiant'];
    require_once("conn.php");
    $ps=$pdo->prepare("SELECT * FROM etudiant WHERE id_etudiant=?");
    $params=array($id_etudiant);
    $ps->execute($params);
    $etudiant=$ps->fetch();
  ?>
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
 		<form action="UpdateEtudiant.php" method="post" enctype="multipart/form-data">

 			<div class="form-group">
 				<label class="control-label">Code:<?php echo($etudiant['id_etudiant']) ?></label>
 				<input type="hidden" name="id_etudiant" value=" <?php echo ($etudiant['id_etudiant']); ?> " class="form-group">		
 			</div>
 			
 			<div class="form-group">
 				<label class="control-label">Nom:</label>
 				<input type="text" name="nom" value=" <?php echo ($etudiant['nom']); ?> " class="form-group">		
 			</div>

 			<div class="form-group">
 				<label class="control-label">Photo:</label>
 				<input type="file" name="photo" class="form-group">
 				<img src="images/<?php echo ($etudiant['photo']) ?>" width=100 height="100">			
 			</div>

 			<div class="form-group">
 				<label class="control-label">Email:</label>
 				<input type="text" name="email"  value=" <?php echo ($etudiant['email']); ?> " class="form-group">				
 			</div>
 		
 			<div>
 				<button type="submit">Save</button>
 			</div>			
 		</form>
 	</div>
 	
 </div>
		
	</div>

</body>
</html>