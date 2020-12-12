<?php
$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");

$numero = $_GET['num'];

$sql4="DELETE FROM personnel WHERE numero='".$numero."'";

$result4=mysqli_query($link,$sql4);

header('Refresh:0.7; url=afficher.php') ;

