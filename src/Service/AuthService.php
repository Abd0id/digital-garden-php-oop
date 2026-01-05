<?php

require_once __DIR__."/../Repository/UserRepository.php";

class AuthService{
    public static function register(string $fullName, string $email, string $password): bool
    {
        $db = new Database();
        $con = $db->getConnection();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $con->prepare(
            'INSERT INTO users (full_name, email, password_hash)
             VALUES (:full_name, :email, :password_hash)'
        );

        return $stmt->execute([
            ':full_name' => $fullName,
            ':email' => $email,
            ':password_hash' => $hashedPassword
        ]);
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
}
