
<?php
$nom = $_POST['nom'];
$nomPhoto = $_FILES['photo']['name'];
$fichierTempo = $_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTempo, './images/'.$nomPhoto);
$email = $_POST['email'];
require_once("conn.php");
$ps=$pdo->prepare("INSERT iNTO etudiant(nom, photo, email) VALUES(?,?,?)");
$params=array($nom,$nomPhoto,$email);
$ps->execute($params);
header("location:etudiant.php");


 ?>