<?php

require_once __DIR__ . "/../Repository/UserRepository.php";
require_once __DIR__ . "/../Entity/User.php";

class AuthService
{
    public static function register($fullName, $email, $password)
    {

        $userRepository = new UserRepository();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $user = new User($fullName, $email);
        $user->setPassword($hashedPassword);
        $user = $userRepository->create($user);
        if ($user) {

            echo 'user created';
        }
    }

    public static function redirect(string $role)
    {
        if ($role === 'admin') {
            return header('Location: ./admin/dashboard.php');
        } else if ($role === 'user') {
            return header('Location: dashboard.php');
        }
    }

    public static function login(array $post): ?User
    {

        $userRepository = new UserRepository();

        $email = $post['email'] ?? '';
        $password = $post['password'] ?? '';

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $GLOBALS['loginErrors'][] = "Email invalide";
        if (strlen($password) < 6)
            $GLOBALS['loginErrors'][] = "Mot de passe trop court";

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
}
