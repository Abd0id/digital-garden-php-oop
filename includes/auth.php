<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../src/Service/AuthService.php';

session_start();

$form_errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // REGISTER
    if (isset($_POST['fullname'])) {

        if (empty($_POST['fullname']) || empty($_POST['email']) || empty($_POST['password'])) {
            $form_errors[] = 'Tous les champs sont obligatoires';
        }

        if ($_POST['password'] !== $_POST['confirmPassword']) {
            $form_errors[] = 'Les mots de passe ne correspondent pas';
        }

        if (empty($form_errors)) {
            try {
                AuthService::register(
                    trim($_POST['fullname']),
                    trim($_POST['email']),
                    $_POST['password']
                );

                header('Location: ../public/login.php');
                exit;
            } catch (Throwable $e) {
                $form_errors[] = 'Email déjà utilisé';
            }
        }
    }

    $_SESSION['form_errors'] = $form_errors;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
