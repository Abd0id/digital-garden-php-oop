<?php
include '../config/database.php';

session_start();

$form_errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['submit']) {
    $fullName = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

    if ($fullName === '') {
        $form_errors[] = 'Full name is required';
    }
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $form_errors[] = 'A valid email is required';
    }
    if ($password === '') {
        $form_errors[] = 'Password is required';
    }
    if ($password !== $confirmPassword) {
        $form_errors[] = 'Passwords do not match';
    }

    if (empty($form_errors)) {
        if (!isset($conn) || $conn->connect_error) {
            error_log('DB connection error in auth.php: ' . ($conn->connect_error ?? 'no connection'));
            $form_errors[] = 'Database connection failed';
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $role_id = 1;
            $sql = 'INSERT INTO users (full_name, email, password_hash,role_id) VALUES (?, ?, ?, ?)';
            $stmt = $conn->prepare($sql);
            if ($stmt) {
                $stmt->bind_param('sssi', $fullName, $email, $hashed_password, $role_id);
                if ($stmt->execute()) {
                    header('Location: ../public/login.php');
                    exit();
                } else {
                    error_log('User insert failed: ' . $stmt->error);
                    $form_errors[] = 'Could not create account (full_name or email may already exist)';
                }
                $stmt->close();
            } else {
                error_log('Prepare failed: ' . $conn->error);
                $form_errors[] = 'Database error';
            }
        }
    }
}
?>