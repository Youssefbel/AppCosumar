<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");
$temp11=$_POST['nom'];
$temp12=$_POST['prenom'];
$temp13=$_POST['site'] ;
$temp14=$_POST['matricule'] ;
$temp15=$_POST['service'];
$temp16=$_POST['numero'] ; 
$temp17=$_POST['statut'] ; 
$temp18=$_POST['forfait'] ;
$temp19=$_POST['gsm'] ;
$temp20=$_POST['date'] ;
$temp21=$_POST['facture'] ;

$temp11 = strtoupper($temp11);
$temp12 = strtoupper($temp12);
$temp13 = strtoupper($temp13);
$temp14 = strtoupper($temp14);
$temp15 = strtoupper($temp15);
$temp16 = strtoupper($temp16);
$temp17 = strtoupper($temp17);
$temp18 = strtoupper($temp18);
$temp19 = strtoupper($temp19);
$temp21 = strtoupper($temp21);

$sql6="UPDATE personnel SET nom='$temp11' , prenom='$temp12' , site='$temp13' , matricule='$temp14' , service='$temp15' , numero='$temp16' , statut='$temp17',forfait='$temp18',gsm='$temp19',date='$temp20',facture='$temp21' 
	   WHERE numero='".$temp16."'";	
$result6=mysqli_query($link,$sql6);

header('Refresh:0.7; url=afficherSunabel.php') ;
?>
