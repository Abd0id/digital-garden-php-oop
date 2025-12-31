<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - Digital Garden</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../public_assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Top Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="dashboard.php">
                <i class="bi bi-shield-lock text-warning fs-4 me-2"></i>
                <span class="fw-bold">Admin Dashboard</span>
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarAdmin">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php" target="_blank">
                            <i class="bi bi-box-arrow-up-right me-1"></i>Voir le site
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="adminDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle fs-5 me-2"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Paramètres</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="../logout.php"><i class="bi bi-box-arrow-right me-2"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar text-white" style="min-height: calc(100vh - 56px);">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="sidebar-link text-white active" href="dashboard.php" style="border-left-color: #ffc107;">
                                <i class="bi bi-speedometer2"></i>Tableau de bord
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link text-white" href="users.php">
                                <i class="bi bi-people"></i>Gestion Utilisateurs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link text-white" href="statistics.php">
                                <i class="bi bi-graph-up"></i>Statistiques
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link text-white" href="settings.php">
                                <i class="bi bi-gear"></i>Paramètres
                            </a>
                        </li>
                        <li class="nav-item mt-3">
                            <hr class="mx-3 bg-secondary">
                        </li>
                        <li class="nav-item">
                            <a class="sidebar-link text-white" href="logs.php">
                                <i class="bi bi-journal-text"></i>Logs système
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
                <!-- Header -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-3 mb-4 border-bottom">
                    <div>
                        <h1 class="h2 fw-bold">
                            <i class="bi bi-shield-lock text-warning me-2"></i>Tableau de bord administrateur
                        </h1>
                        <p class="text-muted mb-0">Vue d'ensemble de la plateforme Digital Garden</p>
                    </div>
                </div>

                <!-- Statistics Cards -->
                <div class="row g-4 mb-4">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-0 shadow-sm bg-primary text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 opacity-75">Total Utilisateurs</p>
                                        <h3 class="fw-bold mb-0">234</h3>
                                    </div>
                                    <div>
                                        <i class="bi bi-people fs-1 opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-0 shadow-sm bg-warning text-dark">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1">En attente</p>
                                        <h3 class="fw-bold mb-0">12</h3>
                                    </div>
                                    <div>
                                        <i class="bi bi-hourglass-split fs-1 opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-0 shadow-sm bg-success text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 opacity-75">Comptes actifs</p>
                                        <h3 class="fw-bold mb-0">198</h3>
                                    </div>
                                    <div>
                                        <i class="bi bi-check-circle fs-1 opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-0 shadow-sm bg-danger text-white">
                            <div class="card-body">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-1 opacity-75">Comptes bloqués</p>
                                        <h3 class="fw-bold mb-0">24</h3>
                                    </div>
                                    <div>
                                        <i class="bi bi-x-circle fs-1 opacity-50"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent User Registrations -->
                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="fw-bold">Inscriptions récentes</h4>
                        <a href="users.php" class="btn btn-sm btn-outline-primary">Voir tout</a>
                    </div>
                    
                    <div class="card shadow-sm">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Utilisateur</th>
                                            <th>Email</th>
                                            <th>Date d'inscription</th>
                                            <th>Statut</th>
                                            <th class="text-end">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person-circle fs-4 me-2 text-primary"></i>
                                                    <strong>Ahmed Benali</strong>
                                                </div>
                                            </td>
                                            <td>ahmed.benali@email.com</td>
                                            <td><small class="text-muted">31 déc 2024, 14:30</small></td>
                                            <td><span class="badge bg-warning">En attente</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-success" title="Valider">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger" title="Bloquer">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person-circle fs-4 me-2 text-primary"></i>
                                                    <strong>Fatima Zahra</strong>
                                                </div>
                                            </td>
                                            <td>fatima.z@email.com</td>
                                            <td><small class="text-muted">31 déc 2024, 12:15</small></td>
                                            <td><span class="badge bg-warning">En attente</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-success" title="Valider">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger" title="Bloquer">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person-circle fs-4 me-2 text-success"></i>
                                                    <strong>Youssef Alami</strong>
                                                </div>
                                            </td>
                                            <td>youssef.alami@email.com</td>
                                            <td><small class="text-muted">30 déc 2024, 18:45</small></td>
                                            <td><span class="badge bg-success">Actif</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-outline-primary" title="Voir profil">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Bloquer">
                                                    <i class="bi bi-lock"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person-circle fs-4 me-2 text-success"></i>
                                                    <strong>Salma Idrissi</strong>
                                                </div>
                                            </td>
                                            <td>salma.idrissi@email.com</td>
                                            <td><small class="text-muted">30 déc 2024, 16:20</small></td>
                                            <td><span class="badge bg-success">Actif</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-outline-primary" title="Voir profil">
                                                    <i class="bi bi-eye"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger" title="Bloquer">
                                                    <i class="bi bi-lock"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <i class="bi bi-person-circle fs-4 me-2 text-warning"></i>
                                                    <strong>Karim Moussaoui</strong>
                                                </div>
                                            </td>
                                            <td>karim.m@email.com</td>
                                            <td><small class="text-muted">30 déc 2024, 10:00</small></td>
                                            <td><span class="badge bg-warning">En attente</span></td>
                                            <td class="text-end">
                                                <button class="btn btn-sm btn-success" title="Valider">
                                                    <i class="bi bi-check-lg"></i>
                                                </button>
                                                <button class="btn btn-sm btn-danger" title="Bloquer">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Activity Overview -->
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="bi bi-activity me-2"></i>Activité récente</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mb-0">
                                    <li class="mb-3 pb-3 border-bottom">
                                        <div class="d-flex">
                                            <i class="bi bi-person-check text-success fs-5 me-3"></i>
                                            <div>
                                                <strong>Nouveau compte validé</strong>
                                                <p class="text-muted small mb-0">Youssef Alami a été activé</p>
                                                <small class="text-muted">Il y a 2 heures</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom">
                                        <div class="d-flex">
                                            <i class="bi bi-person-plus text-primary fs-5 me-3"></i>
                                            <div>
                                                <strong>Nouvelle inscription</strong>
                                                <p class="text-muted small mb-0">Ahmed Benali s'est inscrit</p>
                                                <small class="text-muted">Il y a 3 heures</small>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3">
                                        <div class="d-flex">
                                            <i class="bi bi-lock text-danger fs-5 me-3"></i>
                                            <div>
                                                <strong>Compte bloqué</strong>
                                                <p class="text-muted small mb-0">Compte suspendu pour activité suspecte</p>
                                                <small class="text-muted">Il y a 5 heures</small>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card shadow-sm">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="bi bi-bar-chart me-2"></i>Actions rapides</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-grid gap-2">
                                    <a href="users.php?status=pending" class="btn btn-outline-warning btn-lg">
                                        <i class="bi bi-hourglass-split me-2"></i>
                                        Comptes en attente (12)
                                    </a>
                                    <a href="users.php" class="btn btn-outline-primary btn-lg">
                                        <i class="bi bi-people me-2"></i>
                                        Gérer tous les utilisateurs
                                    </a>
                                    <a href="statistics.php" class="btn btn-outline-success btn-lg">
                                        <i class="bi bi-graph-up me-2"></i>
                                        Voir les statistiques
                                    </a>
                                    <a href="settings.php" class="btn btn-outline-secondary btn-lg">
                                        <i class="bi bi-gear me-2"></i>
                                        Paramètres système
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom Admin JS -->
    <script>
        // Confirmation for actions
        document.querySelectorAll('[title="Valider"]').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('Êtes-vous sûr de vouloir valider ce compte ?')) {
                    // Add validation logic here
                    console.log('Compte validé');
                }
            });
        });

        document.querySelectorAll('[title="Bloquer"]').forEach(btn => {
            btn.addEventListener('click', function() {
                if (confirm('Êtes-vous sûr de vouloir bloquer ce compte ?')) {
                    // Add blocking logic here
                    console.log('Compte bloqué');
                }
            });
        });
    </script>
</body>
</html>