<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['store'])) {
    exit('Aksi penyimpanan tidak ditemukan.');
}

if (!isset($_POST['name'])) {
    exit('Nama kategori tidak ditemukan.');
}

$name = $_POST['name'];
$description = $_POST['description'] ?? '';

echo '<h2>Kategori berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'name' => $name,
    'description' => $description,
]);
echo '</pre>';