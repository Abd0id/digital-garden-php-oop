<?php
require_once __DIR__ . '/../includes/auth.php';
$form_errors = $_SESSION['form_errors'] ?? [];
unset($_SESSION['form_errors']);

?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Connexion - Digital Garden</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
    rel="stylesheet">
  <!-- Custom CSS -->
  <link href="public_assets/css/style.css" rel="stylesheet">
</head>

<body class="auth-page">
  <?php include __DIR__ . "/../includes/header.php" ?>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-5">
        <div class="card shadow">
          <div class="card-body p-5">
            <!-- Logo -->
            <div class="text-center mb-4">
              <a href="index.php" class="text-decoration-none">
                <i class="bi bi-flower1 text-success" style="font-size: 3rem;"></i>
                <h2 class="fw-bold text-success mt-2">Digital Garden</h2>
              </a>
              <p class="text-muted">Connectez-vous à votre compte</p>
            </div>

            <!-- Alert Messages (Hidden by default, shown by PHP) -->
            <?php foreach ($form_errors as $err): ?>
              <div class="invalid-feedback" id="alertContainer"><?= htmlspecialchars($err) ?></div>
            <?php endforeach; ?>

            <!-- Login Form -->
            <form id="loginForm" method="POST" action="../includes/auth.php" novalidate>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">
                  <i class="bi bi-envelope me-1"></i>Email
                </label>
                <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" required>
                <div class="invalid-feedback">
                  Veuillez entrer une adresse email valide.
                </div>
              </div>

              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">
                  <i class="bi bi-lock me-1"></i>Mot de passe
                </label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" name="password" placeholder="••••••••"
                    required>
                  <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="bi bi-eye" id="toggleIcon"></i>
                  </button>
                </div>
                <div class="invalid-feedback">
                  Le mot de passe est requis.
                </div>
              </div>

              <!-- Remember Me -->
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                <label class="form-check-label" for="remember">
                  Se souvenir de moi
                </label>
              </div>

              <!-- Submit Button -->
              <input type="submit" name="login" class="btn btn-success w-100 py-2 mb-3" value="login">
              <!-- Admin Login Link -->
              <div class="text-center mb-3">
                <a href="admin/login.php" class="text-muted small text-decoration-none">
                  <i class="bi bi-shield-lock me-1"></i>Connexion administrateur
                </a>
              </div>

              <!-- Divider -->
              <div class="text-center text-muted my-3">
                <small>Pas encore de compte ?</small>
              </div>

              <!-- Register Link -->
              <a href="register.php" class="btn btn-outline-success w-100 py-2">
                <i class="bi bi-person-plus me-2"></i>Créer un compte
              </a>
            </form>

            <!-- Back to Home -->
            <div class="text-center mt-4">
              <a href="index.php" class="text-muted text-decoration-none small">
                <i class="bi bi-arrow-left me-1"></i>Retour à l'accueil
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include __DIR__ . "/../includes/footer.php" ?>


  <!-- Bootstrap 5 JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JS -->
  <script src="../public_assets/js/index.js" defer></script>
</body>

</html>