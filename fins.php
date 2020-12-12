<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");
$temp1=$_POST['nom'];
$temp2=$_POST['prenom'];
$temp3=$_POST['poste'] ;



$temp1 = strtoupper($temp1);
$temp2 = strtoupper($temp2);



$sql="INSERT INTO fixe(nom,prenom,poste) VALUES('$temp1','$temp2','$temp3')";
$result3=mysqli_query($link,$sql);
header("location:faff.php");
?>
