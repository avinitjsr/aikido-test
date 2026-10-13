<?php
// TEST FILE - intentionally vulnerable for Aikido evaluation

// 1. SQL Injection
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;

// 2. XSS
echo "<h1>Hello " . $_GET['name'] . "</h1>";

// 3. Command Injection
$file = $_GET['file'];
system("cat " . $file);

// 4. Unsafe Deserialization
$data = unserialize($_POST['data']);

// 5. Path Traversal
$page = $_GET['page'];
include("pages/" . $page . ".php");

// 6. Hardcoded credentials
$db_password = "admin123";
$api_key = "sk-1234567890abcdef";
