<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['id'])) {
    exit('ID kategori tidak ditemukan.');
}

$id = $_POST['id'];
$name = $_POST['name'] ?? '';
$description = $_POST['description'] ?? '';

echo '<h2>Data kategori berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
    'name' => $name,
    'description' => $description,
]);
echo '</pre>';