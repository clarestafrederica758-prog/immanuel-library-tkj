<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda - Perpustakaan Digital</title>
  <link rel="stylesheet" href="styles/index.css">
</head>

<body>
  <header>
    <nav class="navbar">
      <a href="/index.php" class="brand">
        <span class="logo-badge">PD</span>
        Perpustakaan Digital
      </a>
      <div class="nav-links">
        <a href="/index.php" class="active">Beranda</a>
        <a href="/pages/books/index.php">Katalog Buku</a>
        <a href="/pages/authors/index.php">Penulis</a>
      </div>
      <div class="nav-actions">
        <a href="/pages/auth/login.php" class="btn btn-outline btn-sm">Masuk</a>
        <a href="/pages/auth/register.php" class="btn btn-primary btn-sm">Daftar</a>
      </div>
    </nav>
  </header>

  <!-- ============ HERO ============ -->
  <section class="hero">
    <div class="hero-text">
      <span class="hero-badge">SISTEM MANAJEMEN PERPUSTAKAAN</span>
      <h1>Kelola Koleksi Buku Sekolah <span>Lebih Rapi &amp; Modern</span></h1>
      <p>Perpustakaan Digital membantu murid dan staf mencatat, meminjam, dan mengelola koleksi buku secara terpusat,
        cepat, dan mudah diakses kapan saja.</p>
      <div class="hero-cta">
        <a href="pages/auth/login.php" class="btn btn-primary">Masuk ke Akun</a>
        <a href="pages/books/index.php" class="btn btn-outline">Lihat Katalog Buku</a>
      </div>
    </div>
    <div class="hero-visual">
      <div class="card-stack">
        <div class="catalog-card catalog-card--back"></div>
        <div class="catalog-card catalog-card--mid"></div>
        <div class="catalog-card catalog-card--front">
          <div class="catalog-card-callno">813.6<br>HIR</div>
          <div>
            <p class="catalog-card-eyebrow">Fiksi &middot; 2005</p>
            <h3 class="catalog-card-title">Laskar Pelangi</h3>
            <p class="catalog-card-author">Andrea Hirata</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ STATISTIK & FITUR ============ -->
  <section class="section">
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-number">1.240</div>
        <div class="stat-label">Total Judul Buku</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">18</div>
        <div class="stat-label">Kategori Buku</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">64</div>
        <div class="stat-label">Penulis Terdaftar</div>
      </div>
      <div class="stat-card">
        <div class="stat-number">312</div>
        <div class="stat-label">Anggota Aktif</div>
      </div>
    </div>

    <div class="section-title">
      <h2>Kenapa Pakai Perpustakaan Digital?</h2>
      <p>Fitur inti yang akan kita bangun bertahap sepanjang semester ini.</p>
    </div>
    <div class="feature-grid">
      <div class="feature-card">
        <div class="feature-icon"><svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" />
          </svg></div>
        <h3>Manajemen Buku</h3>
        <p>Tambah, ubah, dan kelola data buku beserta kategorinya dengan mudah.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 20h9" />
            <path d="M16.5 3.5a2.12 2.12 0 0 1 3 3L7 19l-4 1 1-4Z" />
          </svg></div>
        <h3>Data Penulis</h3>
        <p>Satu buku dapat memiliki beberapa penulis, dan satu penulis dapat menulis banyak buku.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon"><svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M16 19v-1a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v1" />
            <circle cx="9" cy="7" r="3.5" />
            <path d="M22 19v-1a3.5 3.5 0 0 0-2.5-3.36" />
            <path d="M15.5 4.14a3.5 3.5 0 0 1 0 6.72" />
          </svg></div>
        <h3>Manajemen Pengguna</h3>
        <p>Setiap pengguna memiliki peran (admin/member) dan profil masing-masing.</p>
      </div>
    </div>
  </section>
  <footer class="site-footer">
    <span>&copy; 2026 Perpustakaan Digital - SMK Kristen Immanuel Pontianak</span>
    <span>Dibangun dengan HTML, CSS &amp; PHP</span>
  </footer>
</body>

</html>