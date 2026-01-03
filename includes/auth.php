<?php
include '../config/database.php';

session_start();

$form_errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST['submit']) {
    $fullName = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirmPassword = $_POST['confirmPassword'] ?? '';

}
?>