<?php
// Simple PHP application entry point for SmartSchool Dashboard
session_start();

// Basic routing
$request = $_SERVER['REQUEST_URI'];
$path = parse_url($request, PHP_URL_PATH);
$path = trim($path, '/');

// Include the dashboard content
include 'dashboard.php';
?>