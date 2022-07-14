<?php
require_once("conn.php");
$login = $_POST['username'];
$password =md5($_POST['password']);
$ps=$pdo->prepare("SELECT * FROM user WHERE login=? AND password=?");
$params=array($login,$password);
$ps->execute($params);
if ($user=$ps->fetch()) {
    session_start();
    $_SESSION['profil']=$user;
      header("location:etudiant.php");
       
}
else{
   
    header("location:Login.php");

}


 ?>