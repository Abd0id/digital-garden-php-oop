<?php

require_once __DIR__."/../Repository/UserRepository.php";

$GLOBALS['loginErrors'] = [];

function redirect(string $role)
{
    if ($role === 'admin') {
        return header('Location: ./admin/dashboard.php');
    } else if ($role === 'user') {
        return header('Location: dashboard.php');
    }
}

function login(array $post): ?User
{

    $userRepository = new UserRepository();

    $email = $post['email'] ?? '';
    $password = $post['password'] ?? '';

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $GLOBALS['loginErrors'][] = "Email invalide";
    if (strlen($password) < 6) $GLOBALS['loginErrors'][] = "Mot de passe trop court";

    if (!empty($GLOBALS['loginErrors'])) {
        return null;
    }

    $user = $userRepository->findByEmail($email);

    if (!$user || !password_verify($password, $user->getPassword())) {
        $GLOBALS['loginErrors'][] = "Email ou mot de passe incorrect";
        return null;
    }
    return $user;
}
