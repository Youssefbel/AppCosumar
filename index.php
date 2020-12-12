<?php $link=mysqli_connect("localhost","root","","gsm_cosumar") or die("Echec de la connexion a la base"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Page d'authentification</title>

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
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="accueil.php" data-toggle="modal" data-target="#myModal">Se connecter
                <span class="sr-only">(current)</span>
              </a>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="myModal" class="modal fade" role="dialog" >
  <div class="modal-dialog" >

 <div class="modal-content" style="background-color: rgba(102, 153, 255,0.7);">
        <div class="modal-header">
          <h4>Authentification</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
           <form action="login.php" method="POST">
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form> 
        </div> 
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Close</button>
        </div>
      </div>

  </div>
</div>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Cadre de </span>
            <span class="section-heading-lower">l'Application</span>
          </h2>
          <p class="mb-3">Cette application a été développée dans le cadre d'un stage d'observation d'un étudiant de l'ENSAK dans la société de COSUMAR .
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="https://cosumar.co.ma">Infos COSUMAR</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Description de </span>
              <span class="section-heading-lower">l'Application</span>
            </h2>
            <p class="mb-0">Encadrée par Mr.BOUHAFSA , cette application a pour but de rassembler les GSMs du personnel du groupe COSUMAR , et permettre la modification , ajout et suppression des éléments de cette base . </p>
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

</html>
