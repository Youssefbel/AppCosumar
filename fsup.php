<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");

$nom = $_GET['name'];

$sql4="DELETE FROM fixe WHERE nom='".$nom."'";

$result4=mysqli_query($link,$sql4);

header('Refresh:0.7; url=faff.php') ;

