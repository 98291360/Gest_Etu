
<?php
$id_etudiant = $_POST['id_etudiant'];
$nom = $_POST['nom'];
$email = $_POST['email'];
$nomPhoto = $_FILES['photo']['name'];
require_once("conn.php");
if ($nomPhoto=="") {
    $ps=$pdo->prepare("UPDATE etudiant SET nom=?, email=? WHERE id_etudiant=?");
$params=array($nom,$email,$id_etudiant);
$ps->execute($params);
}
else{
    $fichierTempo = $_FILES['photo']['tmp_name'];
move_uploaded_file($fichierTempo, './images/'.$nomPhoto);


$ps=$pdo->prepare("UPDATE etudiant SET nom=?, photo=?, email=? WHERE id_etudiant=?");
$params=array($nom,$nomPhoto,$email,$id_etudiant);
$ps->execute($params);
}


header("location:etudiant.php");


 ?>