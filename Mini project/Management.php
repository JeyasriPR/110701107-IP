<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: index.php');
    exit;
}

// Initialize an array for students
if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}