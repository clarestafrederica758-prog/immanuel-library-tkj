<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/create.css">
</head>
<body>
  <div class="app-shell">
  <aside class="app-sidebar">
    <div class="brand">
      <span class="logo-badge">PD</span>
      Perpustakaan Digital
    </div>
    <div class="nav-group-label">Menu Utama</div>
    <nav>
      <a href="/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9.5 12 3l9 6.5V20a1 1 0 0 1-1 1h-5v-7H9v7H4a1 1 0 0 1-1-1z"/></svg> Beranda</a>
      <a href="/pages/books/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z"/></svg> Buku</a>
      <a href="/pages/categories/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 7a2 2 0 0 1 2-2h4l2 2h8a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Z"/></svg> Kategori</a>
      <a href="/pages/authors/index.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z"/></svg> Penulis</a>
      <a href="/pages/users/index.php" class="active"><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 19v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1"/><circle cx="9" cy="7" r="3.5"/><path d="M22 19v-1a3.5 3.5 0 0 0-2.5-3.36"/><path d="M15.5 4.14a3.5 3.5 0 0 1 0 6.72"/></svg> Pengguna</a>
      <a href="/pages/profile/edit.php" class=""><svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 19.5v-1a4.5 4.5 0 0 0-4.5-4.5h-5A4.5 4.5 0 0 0 5 18.5v1"/><circle cx="12" cy="7.5" r="4"/></svg> Profil Saya</a>
    </nav>
  </aside>

    <main class="app-main">
    <header class="app-topbar">
      <div class="page-title">
        <h1>Tambah Pengguna</h1>
        <p>Buat akun pengguna baru beserta perannya</p>
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
        <form method="" action="">
          <div class="form-card">
            <div class="form-section-title">Data Pengguna</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" placeholder="Contoh: Siti Aminah">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="nama@sekolah.sch.id">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="password">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Kata sandi awal">
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <select id="role" name="role">
                  <option value="member">Member</option>
                  <option value="admin">Admin</option>
                </select>
              </div>
            </div>

            <div class="form-actions">
              <a href="index.php" class="btn btn-outline">Batal</a>
              <button type="submit" class="btn btn-primary">Simpan Pengguna</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
