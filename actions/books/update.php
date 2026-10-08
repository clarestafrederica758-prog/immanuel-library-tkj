<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['update'])) {
    exit('Aksi pembaruan tidak ditemukan.');
}

if (!isset($_POST['id'])) {
    exit('ID buku tidak ditemukan.');
}

$id = $_POST['id'];

$title = $_POST['title'] ?? '';
$isbn = $_POST['isbn'] ?? '';
$year = $_POST['year'] ?? '';
$stock = $_POST['stock'] ?? '';
$category_id = $_POST['category_id'] ?? '';
$description = $_POST['description'] ?? '';
$author_ids = $_POST['author_ids'] ?? [];

echo '<h2>Data buku berhasil diperbarui.</h2>';

echo '<pre>';
print_r([
    'id' => $id,
    'title' => $title,
    'isbn' => $isbn,
    'year' => $year,
    'stock' => $stock,
    'category_id' => $category_id,
    'description' => $description,
    'author_ids' => $author_ids,
]);
echo '</pre>';