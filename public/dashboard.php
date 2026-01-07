<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Digital Garden — Dashboard</title>

  <!-- Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
    rel="stylesheet">
  <link href="../public_assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Top Navbar -->
  <nav class="navbar navbar-light bg-white shadow-sm px-3">
    <button class="btn btn-outline-success d-md-none" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
      <i class="bi bi-list"></i>
    </button>

    <a class="navbar-brand fw-bold text-success ms-2" href="#">
      <i class="bi bi-flower1 me-1"></i>Digital Garden
    </a>

    <div class="dropdown ms-auto">
      <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-person-circle fs-5 me-2"></i>Mon Compte
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil</a></li>
        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Paramètres</a></li>
        <li>
          <hr class="dropdown-divider">
        </li>
        <li><a class="dropdown-item text-danger" href="../includes/auth.php?deconnect=deconnect"><i class="bi bi-box-arrow-right me-2"></i>Déconnexion</a></li>
      </ul>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- Sidebar -->
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 bg-light sidebar collapse d-md-block">
        <div class="pt-3">
          <a class="sidebar-link active" href="#"><i class="bi bi-house"></i>Dashboard</a>
          <a class="sidebar-link" href="#"><i class="bi bi-folder"></i>Thèmes</a>
          <a class="sidebar-link" href="#"><i class="bi bi-journal-text"></i>Notes</a>

          <hr>

          <a class="sidebar-link" href="#"><i class="bi bi-person"></i>Profil</a>
          <a class="sidebar-link" href="#"><i class="bi bi-gear"></i>Paramètres</a>
        </div>
      </nav>

      <!-- Main -->
      <main class="col-md-9 col-lg-10 px-4 py-4">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
          <div>
            <h1 class="h3 fw-bold">
              <i class="bi bi-flower1 text-success me-2"></i>Mon Jardin Numérique
            </h1>
            <p class="text-muted mb-0">Tout ton cerveau, mais rangé</p>
          </div>
          <button class="btn btn-success">
            <i class="bi bi-plus-circle me-1"></i>Nouveau thème
          </button>
        </div>

        <!-- Stats -->
        <div class="row g-3 mb-4">
          <div class="col-sm-6 col-lg-3">
            <div class="stat-card">
              <p class="text-muted mb-1">Thèmes</p>
              <h3 class="fw-bold">12</h3>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-card">
              <p class="text-muted mb-1">Notes</p>
              <h3 class="fw-bold">48</h3>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-card">
              <p class="text-muted mb-1">Aujourd’hui</p>
              <h3 class="fw-bold">3</h3>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3">
            <div class="stat-card">
              <p class="text-muted mb-1">Dernière activité</p>
              <h6 class="fw-bold">il y a 2h</h6>
            </div>
          </div>
        </div>

        <!-- Themes -->
        <h5 class="fw-bold mb-3">Thèmes récents</h5>
        <div class="row g-3 mb-4">
          <div class="col-md-6 col-lg-4">
            <div class="theme-card">
              <div class="theme-header">
                <h6 class="fw-bold mb-0">Développement Web</h6>
                <div>
                  <button class="btn btn-sm btn-outline-secondary"><i class="bi bi-pencil"></i></button>
                  <button class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                </div>
              </div>
              <small class="text-muted">8 notes</small>
            </div>
          </div>
        </div>

        <!-- Notes -->
        <h5 class="fw-bold mb-3">Notes récentes</h5>
        <div class="row g-3">
          <div class="col-md-6">
            <div class="note-card">
              <div class="d-flex justify-content-between mb-1">
                <strong>Introduction à PHP 8</strong>
                <span class="badge bg-success">Web</span>
              </div>
              <p class="note-content">Named arguments, union types, match expression…</p>
              <small class="text-muted">il y a 2h</small>
            </div>
          </div>
        </div>

      </main>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>