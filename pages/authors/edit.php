<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Penulis - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/authors/edit.css">
</head>

<body>

<?php
require '../../repositories/author-repository.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
$author = getAuthor($id);

if ($author === null) {
    echo "Penulis tidak ditemukan.";
    exit;
}
?>

<div class="app-shell">

  <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

  <main class="app-main">

    <?php
    $pageTitle = 'Edit Penulis';
    $pageSubtitle = 'Perbarui data penulis';
    require_once __DIR__ . '/../../components/admin/topbar.php';
    ?>

    <div class="app-content">

      <form method="POST" action="../../actions/authors/update.php">

        <input
          type="hidden"
          name="id"
          value="<?= $author['id'] ?>"
        >

        <div class="form-card">

          <div class="form-section-title">
            Data Penulis
          </div>

          <div class="form-group">

            <label for="name">
              Nama Penulis
            </label>

            <input
              type="text"
              id="name"
              name="name"
              value="<?= $author['name'] ?>"
            >

          </div>

          <div class="form-group">

            <label for="bio">
              Biografi Singkat
            </label>

            <textarea
              id="bio"
              name="bio"
              rows="3"
            ><?= $author['bio'] ?? '' ?></textarea>

          </div>

          <div class="form-actions">

            <a
              href="index.php"
              class="btn btn-outline"
            >
              Batal
            </a>

            <button
              type="submit"
              name="update"
              value="1"
              class="btn btn-primary"
            >
              Simpan Perubahan
            </button>

          </div>

        </div>

      </form>

    </div>

  </main>

</div>

</body>
</html>