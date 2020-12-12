<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");
$temp1=$_POST['nom'];
$temp2=$_POST['prenom'];
$temp3=$_POST['droit'] ;
$temp4=$_POST['email'] ;
$temp5=$_POST['pwd'];

$temp1 = strtoupper($temp1);
$temp2 = strtoupper($temp2);



$sql="INSERT INTO utilisateurs(nom,prenom,droit,email,pwd) VALUES('$temp1','$temp2','$temp3','$temp4','$temp5')";
$result3=mysqli_query($link,$sql);
header("location:accueil.php");
?>

