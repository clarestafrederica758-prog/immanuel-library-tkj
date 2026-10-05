<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['id'])) {
    exit('ID pengguna tidak ditemukan.');
}

$id = $_POST['id'];
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$role = $_POST['role'] ?? '';

echo '<h2>Data pengguna berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'role' => $role,
]);
echo '</pre>';