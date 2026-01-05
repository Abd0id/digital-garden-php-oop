<?php

class AuthService
{
    public static function register(string $fullName, string $email, string $password): bool
    {
        $db = Database::getInstance()->getConnection();

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $db->prepare(
            'INSERT INTO users (full_name, email, password_hash)
             VALUES (:full_name, :email, :password_hash)'
        );

        return $stmt->execute([
            ':full_name' => $fullName,
            ':email' => $email,
            ':password_hash' => $hashedPassword
        ]);
    }

    public static function login(string $email, string $password): ?array
    {
        $db = Database::getInstance()->getConnection();

        $stmt = $db->prepare(
            'SELECT id, full_name, password_hash, role_id
             FROM users
             WHERE email = :email'
        );

        $stmt->execute([':email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$user || !password_verify($password, $user['password_hash'])) {
            return null;
        }

        return $user;
    }
}
