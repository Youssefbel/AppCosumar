<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");
$temp1=$_POST['nom'];
$temp2=$_POST['prenom'];
$temp3=$_POST['site'] ;
$temp4=$_POST['matricule'] ;
$temp5=$_POST['service'];
$temp6=$_POST['numero'] ; 
$temp7=$_POST['statut'] ; 
$temp8=$_POST['forfait'] ; 
$temp9=$_POST['gsm'] ; 
$temp10=$_POST['date'] ; 
$temp11=$_POST['facture'] ; 


$temp1 = strtoupper($temp1);
$temp2 = strtoupper($temp2);
$temp3 = strtoupper($temp3);
$temp4 = strtoupper($temp4);
$temp5 = strtoupper($temp5);
$temp6 = strtoupper($temp6);
$temp7 = strtoupper($temp7);
$temp8 = strtoupper($temp8);
$temp9 = strtoupper($temp9);
$temp11 = strtoupper($temp11);


$sql="INSERT INTO personnel(nom,prenom,site,matricule,service,numero,statut,forfait,gsm,date,facture) VALUES('$temp1','$temp2','$temp3','$temp4','$temp5','$temp6','$temp7','$temp8','$temp9','$temp10','$temp11')";
$result3=mysqli_query($link,$sql);
header("location:afficherCosumar.php");
?>

