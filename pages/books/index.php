<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Buku - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/books/index.css">
</head>

<body>
  <?php
  $book = [
    "id" => 1,
    "title" => "Laskar Pelangi",
    "category" => "Fiksi",
    "year" => 2005,
    "stock" => 12,
    "authors" => "Andrea Hirata",
  ];
  ?>
  <div class="app-shell">
    <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
      <?php
      $pageTitle = 'Manajemen Buku';
      $pageSubtitle = 'Kelola data buku';
      require_once __DIR__ . '/../../components/admin/topbar.php';
      ?>

      <div class="app-content">
        <div class="toolbar">
          <form method="" action="" class="toolbar-filters">
            <div class="search-box">
              <svg class="icon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="7" />
                <path d="m21 21-4.3-4.3" />
              </svg>
              <input type="text" name="search" class="search-input" placeholder="Cari judul buku...">
            </div>
            <select name="category" class="filter-select">
              <option value="">Semua Kategori</option>
              <option value="Fiksi">Fiksi</option>
              <option value="Sains">Sains</option>
              <option value="Sejarah">Sejarah</option>
              <option value="Teknologi">Teknologi</option>
            </select>
            <button type="submit" class="btn btn-outline btn-sm">Cari</button>
          </form>
          <a href="create.php" class="btn btn-primary">+ Tambah Buku</a>
        </div>

        <div class="data-card">
          <table class="data-table">
            <thead>
              <tr>
                <th>Judul Buku</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="cell-primary">
                    <span class="cell-thumb"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" />
                      </svg></span>
                    <a href="show.php?id=<?= $book['id'] ?>" style="color:inherit;"><?= $book['title'] ?></a>
                  </div>
                </td>
                <td><span class="badge badge-muted"><?= $book['category'] ?></span></td>
                <td>
                  <div class="chip-list">
                    <span class="chip"><?= $book['authors'] ?></span>
                  </div>
                </td>
                <td><?= $book['stock'] ?></td>
                <td>
                  <div class="cell-actions">
                    <a href="edit.php?id=<?= $book['id'] ?>" class="btn btn-outline btn-sm">Edit</a>
                    <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="pagination">
          <span class="pagination-btn is-disabled">&lt;</span>
          <span class="pagination-btn is-disabled">&gt;</span>
        </div>
      </div>
    </main>
  </div>
</body>

</html>