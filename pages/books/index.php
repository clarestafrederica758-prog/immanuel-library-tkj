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
    <aside class="app-sidebar">
      <div class="brand">
        <span class="logo-badge">PD</span>
        Perpustakaan Digital
      </div>
      <div class="nav-group-label">Menu Utama</div>
      <nav>
        <a href="/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 9.5 12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1z" />
          </svg> Beranda</a>
        <a href="/pages/books/index.php" class="active"><svg class="icon" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" />
          </svg> Buku</a>
        <a href="/pages/categories/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z" />
          </svg> Kategori</a>
        <a href="/pages/authors/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 20h9" />
            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
          </svg> Penulis</a>
        <a href="/pages/users/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 19v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1" />
            <circle cx="9" cy="7" r="3.5" />
            <path d="M22 19v-1a3.5 3.5 0 0 0-2.5-3.36" />
            <path d="M15.5 4.14a3.5 3.5 0 0 1 0 6.72" />
          </svg> Pengguna</a>
        <a href="/pages/profile/edit.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M19 19.5v-1a4.5 4.5 0 0 0-4.5-4.5h-5A4.5 4.5 0 0 0 5 18.5v1" />
            <circle cx="12" cy="7.5" r="4" />
          </svg> Profil Saya</a>
      </nav>
    </aside>

    <main class="app-main">
      <header class="app-topbar">
        <div class="page-title">
          <h1>Manajemen Buku</h1>
          <p>Kelola data buku, kategori, dan penulis</p>
        </div>
        <div class="topbar-user">
          <span class="avatar">BS</span>
          <div>
            Budi Santoso<br>
            <span class="badge badge-member" style="margin-top:2px;">Member</span>
          </div>
        </div>
      </header>

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