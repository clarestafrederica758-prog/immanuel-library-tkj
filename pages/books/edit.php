<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/edit.css">
</head>
<body>
    <?php
    require '../../repositories/book-repository.php';

    $id = isset($_GET['id']) ? (int) $_GET['id'] : 1;
    $book = getBook($id);

    if ($book === null) {
    echo "Buku tidak ditemukan.";
    exit;
    }
    ?>
  <div class="app-shell">
  <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php
    $pageTitle = 'Edit Buku';
    $pageSubtitle = 'Perbarui data buku';
    require_once __DIR__ . '/../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <form method="POST" action="../../actions/books/update.php">
          <input type="hidden" name="id" value="<?= $book['id'] ?>">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Buku</div>
            <div class="form-group">
              <label for="title">Judul Buku</label>
              <input type="text" id="title" name="title" value="<?= $book['title'] ?>">
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="isbn">ISBN</label>
                <input type="text" id="isbn" name="isbn" value="<?= $book['isbn'] ?>">
              </div>
              <div class="form-group">
                <label for="year">Tahun Terbit</label>
                <input type="number" id="year" name="year" value="<?= $book['year'] ?>">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="stock">Jumlah Stok</label>
                <input type="number" id="stock" name="stock" value="<?= $book['stock'] ?>">
              </div>
              <div class="form-group">
                <label for="category_id">Kategori</label>
                <select id="category_id" name="category_id">
                  <?php foreach ($categories as $index => $category): ?>
                    <option value="<?= $index + 1 ?>" <?= ($index + 1) === $book['category_id'] ? 'selected' : '' ?>><?= $category ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="description">Deskripsi</label>
              <textarea id="description" name="description" rows="3"><?= $book['description'] ?></textarea>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Penulis Buku</div>
            <div class="form-group">
              <label>Pilih Penulis (bisa lebih dari satu)</label>
              <div class="checkbox-grid">
                <?php foreach ($authors as $index => $authorName): ?>
                  <?php $authorId = $index + 1; ?>
                  <label class="checkbox-item">
                    <input type="checkbox" name="author_ids[]" value="<?= $authorId ?>" <?= in_array($authorId, $book['author_ids']) ? 'checked' : '' ?>>
                    <?= $authorName ?>
                  </label>
                <?php endforeach; ?>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
