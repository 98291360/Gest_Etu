

<?php
require_once("conn.php");
$req = "SELECT * FROM etudiant";
$ps = $pdo->prepare($req);
$ps->execute();
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<?php require_once("entete.php");?>
	<div class="col-md-12 col-xs-12 spacer">
		<div class="panel panel-info spacer">
			<div class="panel-heading">List of Students</div>
			<div class="panel-body">
			 <table class="table table-striped">
  	<thead>
  		<tr>
  			<th>id_etudiant</th><th>nom</th><th>photo</th><th>email</th>
  		</tr>
  	</thead>
  	<tbody >
  		<?php while ($et = $ps->fetch()) { ?>
  			<tr>
  				<td><?php echo($et['id_etudiant']) ?></td>
  				<td><?php echo($et['nom']) ?></td>
  				<td><img src="images/<?php echo($et['photo']) ?>" width="100" height="100"></td>
                <td><?php echo($et['email']) ?></td>
                <td><a href="Editetudiant.php?id_etudiant= <?php echo($et['id_etudiant']); ?> ">Edit</a></td>
                <td><a onclick="return confirm('Are you sure..?');" href="DeleteEtudiant.php?id_etudiant= <?php echo($et['id_etudiant']); ?> ">Delete</a></td>
 			</tr>

   		<?php } ?>
  	</tbody>
  </table>
		   </div>			
		</div> 
  </div>
</body>
</html>