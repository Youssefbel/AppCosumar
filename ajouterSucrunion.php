<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ajout d'un</title>

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
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="accueilSucrunion.php">GSM Sucrunion</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="accueilSucrunion.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="afficherSucrunion.php">Afficher tous les contacts</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ajouterSucrunion.php">Ajouter un contact</a>
            </li>
            <li class="nav-item active px-lg-4">
  <form class="form-inline" method="POST" action="rechercheSucrunion.php">
    <input class="form-control mr-sm-2" type="search" name="recherche" onkeydown="if(event.keyCode==32) return false" placeholder="Recherche par GSM">
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


  <section class="page-section">
    <div class="container">
      <form action="insSucrunion.php" method="POST" style="width: 50%;margin-left: 200px;color:white;font-style: italic">
              <div class="form-group">
               <label for="nom">Nom:</label>
               <input type="text" class="form-control" name="nom" required="required" >
              </div>
              <div class="form-group">
                <label for="prenom">Prénom:</label>
                <input type="text" class="form-control" name="prenom" required="required" >
              </div>
              <div class="form-group">
                <label for="site">Site:</label>
                <input type="text" class="form-control" name="site" value="SUCRUNION" required="required" >
              </div>
              <div class="form-group">
                <label for="matricule">Matricule:</label>
                <input type="text" class="form-control" name="matricule" required="required" >
              </div>
              <div class="form-group">
                <label for="service">Service:</label>
                <input type="text" class="form-control" name="service" required="required" >
              </div>
              <div class="form-group">
                <label for="numero">Numéro de téléphone:</label>
                <input type="text" class="form-control" name="numero" onkeydown="if(event.keyCode==32) return false" required="required" >
              </div>
              <div class="form-group">
                <label for="statut">Statut:</label>
                <input type="text" class="form-control" name="statut" required="required" >
              </div>
                            <div class="form-group">
                <label for="forfait">Forfait:</label>
                <input type="text" class="form-control" name="forfait" required="required" >
              </div>
              <div class="form-group">
                <label for="gsm">GSM:</label>
                <input type="text" class="form-control" name="gsm" required="required" >
              </div>
              <div class="form-group">
                <label for="date">Date de mise en service:</label>
                <input type="Date" class="form-control" name="date" required="required" >
              </div>
              <div class="form-group">
                <label for="facture">Facturation:</label>
                <input type="text" class="form-control" name="facture" required="required" >
              </div>
              <button type="submit" class="btn btn-primary" style="margin-top: 20px;margin-left: 230px">Submit</button>
             </form> 
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

</html>
