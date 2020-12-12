<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Page d'accueil</title>

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
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="accueil.php">GSM Cosumar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="accueil.php">Accueil
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="afficher.php">Afficher tous les contacts</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="ajouter.php">Ajouter un contact</a>
            </li>
            <li class="nav-item active px-lg-4">
  <form class="form-inline" method="POST" action="recherche.php">
    <input class="form-control mr-sm-2" type="search" name="recherche" onkeydown="if(event.keyCode==32) return false" placeholder="Recherche par GSM"  >
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

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Création d' </span>
            <span class="section-heading-lower">Utilisateurs</span>
          </h2>
          <p class="mb-3">Ceci est un compte Administrateur , ce compte peut créer des utilisateurs et leurs attribuer un site.
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="creer.php">Créer membre</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Ajout d'un fichier Excel </span>
            <span class="section-heading-lower">liste du Personnel</span>
          </h2>
          <p class="mb-3">Veuillez ajouter un fichier excel .xlsx/.xls classé en ordre : nom,prenom,site,matricule,service,numero,statut,forfait,GSM,date(AAAA/MM/JJ),facturation . Tous en majuscule . 
          </p>
          <div class="intro-button mx-auto">
               <div class="outer-container">
        <form action="import_data.php" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" class="btn btn-primary btn-xl" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
          </div>
        </div>
          <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="margin-top: 20px">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Ajout d'un fichier Excel </span>
            <span class="section-heading-lower">liste de Postes fixe</span>
          </h2>
          <p class="mb-3">Veuillez ajouter un fichier excel .xlsx/.xls classé en ordre : nom,prenom,poste. Tous en majuscule . 
          </p>
          <div class="intro-button mx-auto">
               <div class="outer-container">
        <form action="import_data1.php" method="post"
            name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
            <div>
                <label>Choose Excel
                    File</label> <input type="file" name="file"
                    id="file" accept=".xls,.xlsx">
                <button type="submit" class="btn btn-primary btn-xl" name="import"
                    class="btn-submit">Import</button>
        
            </div>
        
        </form>
        
    </div>
          </div>
        </div>

 <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav" style="margin-top: 50px;margin-bottom: 50px;">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="accueil.php">GSM Cosumar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive" >
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="faff.php">Afficher tous les fixes
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="faj.php">Ajouter fixe</a>
            </li>

            <li class="nav-item active px-lg-4">
  <form class="form-inline" method="POST" action="rech.php">
    <input class="form-control mr-sm-2" type="search" name="rech" onkeydown="if(event.keyCode==32) return false" placeholder="Recherche par Nom"  >
    <button class="btn btn-light" type="submit">Go</button>
  </form> 
          </li>

        </ul>
      </div>
    </div>
  </nav>

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
