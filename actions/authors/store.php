<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['store'])) {
    exit('Aksi penyimpanan tidak ditemukan.');
}

if (!isset($_POST['name'])) {
    exit('Nama penulis tidak ditemukan.');
}

$name = $_POST['name'];

echo '<h2>Penulis berhasil diterima.</h2>';

echo '<pre>';
print_r([
    'name' => $name,
]);
echo '</pre>';