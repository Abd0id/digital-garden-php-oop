<?php
require_once __DIR__ . '/../src/Service/AdminService.php';

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['valider'])) {

    AdminService::modifyUserStatus($_GET['valider'], "active");

} else if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['bloquer'])) {

    AdminService::modifyUserStatus($_GET['bloquer'], "blocked");

}

