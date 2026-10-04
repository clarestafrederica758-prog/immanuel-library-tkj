<?php

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    exit('Metode request tidak valid.');
}

if (!isset($_GET['id'])) {
    exit('ID buku tidak ditemukan.');
}

$id = $_GET['id'];

echo '<h2>Data buku berhasil dihapus.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
]);
echo '</pre>';              