<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    exit('Metode request tidak valid.');
}

if (!isset($_GET['id'])) {
    exit('ID penulis tidak ditemukan.');
}

$id = $_GET['id'];

echo '<h2>Penulis berhasil dihapus.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
]);
echo '</pre>';