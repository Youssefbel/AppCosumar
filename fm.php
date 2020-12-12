<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");
$temp11=$_POST['nom'];
$temp12=$_POST['prenom'];
$temp13=$_POST['poste'] ;


$temp11 = strtoupper($temp11);
$temp12 = strtoupper($temp12);


$sql6="UPDATE fixe SET nom='$temp11' , prenom='$temp12' , poste='$temp13'  
	   WHERE nom='".$temp11."'";	
$result6=mysqli_query($link,$sql6);

header('Refresh:0.7; url=faff.php') ;
?>
