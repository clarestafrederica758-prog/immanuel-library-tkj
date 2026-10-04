<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil Saya - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/profile/edit.css">
</head>
<body>
  <?php
  $user = [
      "id"    => 1,
      "name"  => "Budi Santoso",
      "email" => "budi.santoso@siswa.ski.sch.id",
      "role"  => "member",
  ];

  $profile = [
      "user_id" => 1,
      "phone"   => "0812-3456-7890",
      "address" => "Jl. Merdeka No. 21, Pontianak, Kalimantan Barat",
      "bio"     => "Murid kelas XI TKJ yang gemar membaca novel fiksi dan buku pengembangan diri.",
  ];
  ?>
  <div class="app-shell">
  <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

    <main class="app-main">
    <?php
    $pageTitle = 'Profil Saya';
    $pageSubtitle = 'Kelola informasi profil';
    require_once __DIR__ . '/../../components/admin/topbar.php';
    ?>

      <div class="app-content">
        <form method="" action="">
          <div class="form-card" style="margin-bottom:20px;">
            <div class="form-section-title">Data Akun</div>
            <div class="form-row">
              <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input type="text" id="name" name="name" value="<?= $user['name'] ?>">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $user['email'] ?>">
              </div>
            </div>
            <div class="form-group">
              <label>Role</label>
              <input type="text" value="<?= ucfirst($user['role']) ?>" disabled>
              <p class="form-help">Role hanya dapat diubah oleh Admin melalui menu Manajemen Pengguna.</p>
            </div>
          </div>

          <div class="form-card">
            <div class="form-section-title">Data Profil</div>
            <div class="form-group">
              <label for="phone">Nomor Telepon</label>
              <input type="text" id="phone" name="phone" value="<?= $profile['phone'] ?>">
            </div>
            <div class="form-group">
              <label for="address">Alamat</label>
              <input type="text" id="address" name="address" value="<?= $profile['address'] ?>">
            </div>
            <div class="form-group">
              <label for="bio">Bio Singkat</label>
              <textarea id="bio" name="bio" rows="3"><?= $profile['bio'] ?></textarea>
            </div>
            <div class="form-actions">
              <button type="button" class="btn btn-outline">Batal</button>
              <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
