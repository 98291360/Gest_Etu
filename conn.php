<?php require_once("securite.php");?>
<?php
try {
	$strConnection = "mysql:host=localhost;dbname=etudiant";
	$pdo = new PDO ($strConnection, 'root', 'Sso..1997');
	
} catch (PDOException $e) {
	$msg = 'Erreur PDO dans '.$e->getMessage();
	die($msg);
	
}
?>