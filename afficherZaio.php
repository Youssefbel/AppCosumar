<?php
session_start();
 $link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tous les contacts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Répertoire GSM</span>
    <span class="site-heading-lower">Groupe COSUMAR</span>
  </h1>

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="accueilZaio.php">GSM Zaio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="accueilZaio.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="afficherZaio.php">Afficher tous les contacts</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ajouterZaio.php">Ajouter un contact</a>
            </li>
            <li class="nav-item active px-lg-4">
  <form class="form-inline" method="POST" action="rechercheZaio.php">
    <input class="form-control mr-sm-2" type="search" name="recherche" onkeydown="if(event.keyCode==32) return false" placeholder="Recherche par GSM" >
    <button class="btn btn-light" type="submit">Go</button>
  </form> 
          </li>
          <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="index.php">Se déconnecter</a>
            </li>

        </ul>
      </div>
    </div>
  </nav>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Affichage des</span>
                <span class="section-heading-lower">Contacts</span>
              </h2>
              <div class="container">
                  <?php 
  $sql="SELECT * FROM personnel WHERE site='ZAIO' ";
$result = mysqli_query($link,$sql);
echo " <table class=\"table table-hover\" >";
echo "<thead>";
echo "<tr>";
echo "<th> Nom </th>";
echo "<th> Prénom </th>";
echo "<th> Site  </th>";
echo "<th> Matricule </th>";
echo "<th> Service/Direction  </th>";
echo "<th> Numéro  </th>";
echo "<th> Statut  </th>";
echo "<th> Forfait  </th>";
echo "<th> GSM  </th>";
echo "<th> Date service  </th>";
echo "<th> Facturation  </th>";

echo "</tr>";
echo "</thead>";
while($data=mysqli_fetch_assoc ( $result ))
{echo "<tbody>";
  echo "<tr>";
echo "<td>".$data['nom']."</td>";
echo "<td>".$data['prenom']."</td>";
echo "<td>".$data['site']."</td>";
echo "<td>".$data['matricule']."</td>";
echo "<td>".$data['service']."</td>";
echo "<td>".$data['numero']."</td>";
echo "<td>".$data['statut']."</td>";
echo "<td>".$data['forfait']."</td>";
echo "<td>".$data['gsm']."</td>";
echo "<td>".$data['date']."</td>";
echo "<td>".$data['facture']."</td>";
echo "</tr>";
echo "</tbody>";
}
echo "</table>";


   ?>
            </div>
          </div>
        </div>
      </div>
    </section>



    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; YB 98</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>

</html>
