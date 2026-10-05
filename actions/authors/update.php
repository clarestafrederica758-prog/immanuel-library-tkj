<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['id'])) {
    exit('ID penulis tidak ditemukan.');
}

$id = $_POST['id'];
$name = $_POST['name'] ?? '';

echo '<h2>Data penulis berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
    'name' => $name,
]);
echo '</pre>';