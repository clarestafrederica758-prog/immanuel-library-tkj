<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manajemen Pengguna - Perpustakaan Digital</title>
  <link rel="stylesheet" href="../../styles/users/index.css">
</head>

<body>

<?php
require '../../repositories/user-repository.php';

$users = getUsers();
?>

<div class="app-shell">

  <?php require_once __DIR__ . '/../../components/admin/sidebar.php'; ?>

  <main class="app-main">

    <?php
    $pageTitle = 'Manajemen Pengguna';
    $pageSubtitle = 'Daftar seluruh pengguna beserta perannya (role)';
    require_once __DIR__ . '/../../components/admin/topbar.php';
    ?>

    <div class="app-content">

      <div class="toolbar">

        <form method="GET" action="" class="toolbar-filters">

          <div class="search-box">

            <svg class="icon" width="14" height="14"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round">

              <circle cx="11" cy="11" r="7"/>
              <path d="m21 21-4.3-4.3"/>

            </svg>

            <input
              type="text"
              name="search"
              class="search-input"
              placeholder="Cari nama atau email pengguna..."
              value="<?= $_GET['search'] ?? '' ?>"
            >

          </div>

          <button type="submit" class="btn btn-outline btn-sm">
            Cari
          </button>

        </form>

        <a href="create.php" class="btn btn-primary">
          + Tambah Pengguna
        </a>

      </div>

      <div class="data-card">

        <table class="data-table">

          <thead>
            <tr>
              <th>Nama</th>
              <th>Email</th>
              <th>Role</th>
              <th>Aksi</th>
            </tr>
          </thead>

          <tbody>

          <?php foreach ($users as $user): ?>

            <tr>

              <td>

                <div class="cell-primary">

                  <span class="cell-thumb">

                    <svg class="icon" width="16" height="16"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round">

                      <path d="M19 19.5v-1a4.5 4.5 0 0 0-4.5-4.5h-5A4.5 4.5 0 0 0 5 18.5v1"/>
                      <circle cx="12" cy="7.5" r="4"/>

                    </svg>

                  </span>

                  <?= $user['name'] ?>

                </div>

              </td>

              <td>
                <?= $user['email'] ?>
              </td>

              <td>

                <?php if ($user['role'] === 'admin'): ?>

                  <span class="badge badge-admin">
                    Admin
                  </span>

                <?php else: ?>

                  <span class="badge badge-member">
                    Member
                  </span>

                <?php endif; ?>

              </td>

              <td>

                <div class="cell-actions">

                  <a
                    href="edit.php?id=<?= $user['id'] ?>"
                    class="btn btn-outline btn-sm"
                  >
                    Edit
                  </a>

                  <a
                    href="../../actions/users/destroy.php?id=<?= $user['id'] ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus pengguna ini?')"
                  >
                    Hapus
                  </a>

                </div>

              </td>

            </tr>

          <?php endforeach; ?>

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