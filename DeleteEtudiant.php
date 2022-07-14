
<?php
$id_etudiant = $_GET['id_etudiant'];
require_once("conn.php");
$ps = $pdo->prepare("DELETE FROM etudiant WHERE id_etudiant=?");
$params = array($id_etudiant);
$ps ->execute($params);
header("location:etudiant.php");
?>