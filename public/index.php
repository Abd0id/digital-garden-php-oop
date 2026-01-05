<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Garden - Organisez vos idées</title>
  <meta name="description" content="Digital Garden - Créez votre jardin numérique d'idées">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link href="public_assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Header -->
  <?php include "../includes/header.php" ?>

  <!-- Hero Section -->
  <section class="hero-section py-5">
    <div class="container">
      <div class="row align-items-center min-vh-75">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h1 class="display-4 fw-bold mb-4">Cultivez votre <span class="text-success">jardin d'idées</span></h1>
          <p class="lead text-muted mb-4">Organisez vos pensées, développez vos projets et faites grandir vos idées dans
            votre espace numérique personnel.</p>
          <div class="d-flex gap-3">
            <a href="register.php" class="btn btn-success btn-lg px-4">
              <i class="bi bi-person-plus me-2"></i>Commencer gratuitement
            </a>
            <a href="#features" class="btn btn-outline-success btn-lg px-4">
              <i class="bi bi-arrow-down me-2"></i>En savoir plus
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="hero-image-container">
            <i class="bi bi-layout-text-window-reverse text-success" style="font-size: 20rem; opacity: 0.1;"></i>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section id="features" class="py-5 bg-light">
    <div class="container">
      <div class="text-center mb-5">
        <h2 class="fw-bold">Fonctionnalités principales</h2>
        <p class="text-muted">Tout ce dont vous avez besoin pour organiser vos idées</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-person-circle text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">Compte personnel</h4>
            <p class="text-muted">Créez votre compte sécurisé et accédez à votre jardin numérique personnel depuis
              n'importe où.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-folder2-open text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">Thèmes organisés</h4>
            <p class="text-muted">Créez des thèmes pour catégoriser vos idées et retrouvez facilement ce que vous
              cherchez.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-journal-text text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">Notes détaillées</h4>
            <p class="text-muted">Ajoutez des notes riches à chaque thème avec toutes les informations dont vous avez
              besoin.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-shield-check text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">100% Privé</h4>
            <p class="text-muted">Vos données sont privées et sécurisées. Seul vous avez accès à vos thèmes et notes.
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-phone text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">Responsive</h4>
            <p class="text-muted">Accédez à votre jardin depuis n'importe quel appareil : ordinateur, tablette ou
              smartphone.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-card text-center p-4 bg-white rounded shadow-sm h-100">
            <div class="feature-icon mb-3">
              <i class="bi bi-lightning-charge text-success fs-1"></i>
            </div>
            <h4 class="fw-bold mb-3">Simple et rapide</h4>
            <p class="text-muted">Interface intuitive et fluide pour une prise en main immédiate sans formation.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <h2 class="fw-bold mb-4">À propos de Digital Garden</h2>
          <p class="text-muted mb-3">Digital Garden est une application conçue par GreenTech Solutions pour vous aider à
            organiser vos idées de manière intuitive et efficace.</p>
          <p class="text-muted mb-3">Que vous soyez étudiant, professionnel ou créatif, notre plateforme vous offre un
            espace personnel pour structurer vos pensées et développer vos projets.</p>
          <ul class="list-unstyled">
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Gratuit et accessible</li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Interface moderne et intuitive
            </li>
            <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Sécurité et confidentialité
              garanties</li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="about-image text-center">
            <i class="bi bi-tree text-success" style="font-size: 15rem; opacity: 0.2;"></i>
          </div>
        </div>
      </div>
    </div>
    </sectiochin>

    <!-- CTA Section -->
    <section class="cta-section py-5 bg-success text-white">
      <div class="container text-center">
        <h2 class="fw-bold mb-4">Prêt à cultiver vos idées ?</h2>
        <p class="lead mb-4">Rejoignez Digital Garden dès aujourd'hui et commencez à organiser vos pensées.</p>
        <a href="register.php" class="btn btn-light btn-lg px-5">
          <i class="bi bi-arrow-right-circle me-2"></i>Créer mon compte
        </a>
      </div>
    </section>

    <!-- Footer -->
    <?php include "../includes/footer.php" ?>


    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>