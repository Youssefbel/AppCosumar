<?php 

$email = $_POST['email'];
$pwd = $_POST['pwd'];

$link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base");


if(!isset($_POST['email']) && !isset($_POST['pwd']))
{
    header('Location: index.php');
}
else
{

$sql="SELECT email,pwd,nom,prenom,droit FROM utilisateurs WHERE email='".$email."' AND pwd='".$pwd."' ";
$result=mysqli_query($link,$sql);

$data=mysqli_fetch_assoc($result);

$droit=$data['droit'];

/* if ($droit='tout')
		{ header('Refresh:0.5; url=accueil.php') ;}
      elseif ($droit='COSUMAR') {
      	header('Refresh:0.5; url=accueilCosumar.php') ;
      }
      elseif ($droit='SUNABEL') {
      	header('Refresh:0.5; url=accueilSunabel.php') ;
      }
      elseif ($droit='SURAC') {
      	header('Refresh:0.5; url=accueilSurac.php') ;
      }
      elseif ($droit='ZAIO') {
      	header('Refresh:0.5; url=accueilZaio.php') ;
      }
      elseif ($droit='SUCRUNION') {
      	header('Refresh:0.5; url=accueilSucrunion.php') ;
      }
      elseif ($droit='SUTA') {
      	header('Refresh:0.5; url=accueilSuta.php') ;
      }

	*/

switch ($droit) {
    case "tout":
        header('Refresh:0.5; url=accueil.php') ;
        break;
    case "COSUMAR":
        header('Refresh:0.5; url=accueilCosumar.php');
        break;
    case "SURAC":
        header('Refresh:0.5; url=accueilSurac.php');
        break;
    case "SUNABEL":
        header('Refresh:0.5; url=accueilSunabel.php');
        break;
    case "ZAIO":
        header('Refresh:0.5; url=accueilZaio.php');
        break;
    case "SUCRUNION":
        header('Refresh:0.5; url=accueilSucrunion.php');
        break;
    case "SUTA":
        header('Refresh:0.5; url=accueilSuta.php');
        break;
    default:  
	{ header('Refresh:0.5; url=index.php') ;
		echo"<script language=\"javascript\">";
		echo"alert('Email ou mot de passe incorrects!')";
		echo"</script>";   }}}