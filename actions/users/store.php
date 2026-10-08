<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['store'])) {
    exit('Aksi penyimpanan tidak ditemukan.');
}

if (!isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['role'])) {
    exit('Data pengguna tidak lengkap.');
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];

echo '<h2>Data pengguna berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'name' => $name,
    'email' => $email,
    'password' => $password,
    'role' => $role,
]);
echo '</pre>';