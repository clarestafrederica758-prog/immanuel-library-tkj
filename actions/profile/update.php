<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    exit('Metode request tidak valid.');
}

if (!isset($_POST['update'])) {
    exit('Aksi pembaruan tidak ditemukan.');
}

if (!isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['bio'])) {
    exit('Data profil tidak lengkap.');
}

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$bio = $_POST['bio'];

echo '<h2>Profil berhasil diperbarui.</h2>';

echo '<pre>';
print_r([
    'name' => $name,
    'email' => $email,
    'phone' => $phone,
    'address' => $address,
    'bio' => $bio,
]);
echo '</pre>';