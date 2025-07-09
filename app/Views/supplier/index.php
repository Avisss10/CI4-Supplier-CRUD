<?= $this->include('layout/header') ?>

<div class="container-fluid px-4">
  <div class="main-container">
    <!-- Header -->
    <div class="header-section">
      <div class="header-content">
        <h1 class="page-title">
          <i class="fas fa-truck me-3"></i>
          Daftar Supplier
        </h1>
        <p class="page-subtitle">Kelola dan pantau semua supplier dengan mudah</p>
        <div class="search-container">
          <i class="fas fa-search search-icon"></i>
          <input type="text" class="form-control search-input" placeholder="Cari supplier, alamat, atau kontak..." id="searchInput">
        </div>
      </div>
    </div>

    <!-- Action Bar -->
    <div class="action-bar">
      <h5 class="mb-0 text-muted">
        <i class="fas fa-list me-2"></i>
        Daftar Supplier Terdaftar
      </h5>
      <a href="/supplier/create" class="btn btn-primary-custom">
        <i class="fas fa-plus me-2"></i>
        Tambah Supplier
      </a>
    </div>

    <!-- Table -->
    <div class="table-container">
      <div class="table-responsive">
        <table class="table table-custom">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Alamat</th>
              <th>Telepon</th>
              <th>Email</th>
              <th>PIC</th>
              <th>Jenis Barang</th>
              <th>Nama Barang</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody id="supplierTableBody">
            <?php foreach ($supplier as $row): ?>
            <tr>
              <td>
                <div class="supplier-name"><?= esc($row['nama']) ?></div>
              </td>
              <td><?= esc($row['alamat']) ?></td>
              <td><?= esc($row['telepon']) ?></td>
              <td><?= esc($row['email']) ?></td>
              <td><?= esc($row['kontak_pic']) ?></td>
              <td><?= esc($row['jenis_barang']) ?></td>
              <td><?= esc($row['nama_barang']) ?></td>
              <td>
                <div class="action-buttons">
                  <a href="/supplier/edit/<?= $row['id_supplier'] ?>" class="btn-action btn-edit">
                    <i class="fas fa-edit"></i> Edit
                  </a>
                  <a href="/supplier/delete/<?= $row['id_supplier'] ?>" class="btn-action btn-delete" onclick="return confirm('Yakin ingin menghapus supplier ini?')">
                    <i class="fas fa-trash"></i> Hapus
                  </a>
                </div>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- JS Search Filter -->
<script>
  document.getElementById('searchInput').addEventListener('input', function() {
    const val = this.value.toLowerCase();
    const rows = document.querySelectorAll('#supplierTableBody tr');
    let matchFound = false;

    rows.forEach(row => {
      const content = row.textContent.toLowerCase();
      const match = content.includes(val);
      row.style.display = match ? '' : 'none';
      if (match) matchFound = true;
    });

    if (!matchFound && val !== '') {
      if (!document.querySelector('.no-data-row')) {
        const row = document.createElement('tr');
        row.className = 'no-data-row';
        row.innerHTML = `
          <td colspan="6" class="no-data">
            <div class="no-data-icon"><i class="fas fa-search"></i></div>
            <div class="no-data-text">Tidak ada supplier yang ditemukan</div>
            <div class="no-data-subtitle">Coba ubah kata kunci pencarian Anda</div>
          </td>`;
        document.getElementById('supplierTableBody').appendChild(row);
      }
    } else {
      const noData = document.querySelector('.no-data-row');
      if (noData) noData.remove();
    }
  });
</script>

<!-- Tambahkan link style dan font-awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    :root {
  --primary-blue: #1e40af;
  --secondary-blue: #3b82f6;
  --light-blue: #dbeafe;
  --dark-blue: #1e3a8a;
  --accent-blue: #60a5fa;
  --gradient-bg: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
}

body {
  background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  min-height: 100vh;
}

.main-container {
  background: white;
  border-radius: 16px;
  box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
  overflow: hidden;
  margin: 2rem 0;
}

.header-section {
  background: var(--gradient-bg);
  color: white;
  padding: 2rem;
  position: relative;
  overflow: hidden;
}

.header-section::before {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  width: 100%;
  height: 100%;
  background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="20" cy="20" r="1" fill="white" opacity="0.1"/><circle cx="80" cy="40" r="1" fill="white" opacity="0.1"/><circle cx="40" cy="80" r="1" fill="white" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
  pointer-events: none;
}

.header-content {
  position: relative;
  z-index: 1;
}

.page-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.page-subtitle {
  font-size: 1.1rem;
  opacity: 0.9;
  margin-bottom: 1.5rem;
}

.search-container {
  position: relative;
  max-width: 400px;
}

.search-input {
  background: rgba(255, 255, 255, 0.2);
  border: 2px solid rgba(255, 255, 255, 0.3);
  border-radius: 50px;
  padding: 12px 20px 12px 50px;
  color: white;
  font-size: 1rem;
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.search-input::placeholder {
  color: rgba(255, 255, 255, 0.8);
}

.search-input:focus {
  background: rgba(255, 255, 255, 0.3);
  border-color: rgba(255, 255, 255, 0.5);
  outline: none;
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
}

.search-icon {
  position: absolute;
  left: 18px;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255, 255, 255, 0.8);
}

.action-bar {
  padding: 1.5rem 2rem;
  background: #f8fafc;
  border-bottom: 1px solid #e2e8f0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.btn-primary-custom {
  background: var(--gradient-bg);
  border: none;
  border-radius: 8px;
  padding: 12px 24px;
  font-weight: 600;
  color: white;
  transition: all 0.3s ease;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-size: 0.9rem;
}

.btn-primary-custom:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 15px -3px rgba(30, 64, 175, 0.3);
}

.table-container {
  padding: 2rem;
}

.table-custom {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
}

.table-custom thead {
  background: var(--gradient-bg);
  color: white;
}

.table-custom th {
  padding: 1rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-size: 0.85rem;
  border: none;
}

.table-custom td {
  padding: 1rem;
  vertical-align: middle;
  border-bottom: 1px solid #e2e8f0;
}

.table-custom tbody tr {
  transition: all 0.3s ease;
}

.table-custom tbody tr:hover {
  background: #f8fafc;
  transform: scale(1.002);
}

.supplier-name {
  font-weight: 600;
  color: var(--primary-blue);
  font-size: 1.1rem;
}

.action-buttons {
  display: flex;
  gap: 8px;
}

.btn-action {
  padding: 8px 12px;
  border: none;
  border-radius: 6px;
  font-size: 0.8rem;
  font-weight: 600;
  text-transform: uppercase;
  cursor: pointer;
  transition: all 0.3s ease;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 4px;
}

.btn-edit {
  background: #fbbf24;
  color: white;
}

.btn-edit:hover {
  background: #f59e0b;
  transform: translateY(-1px);
}

.btn-delete {
  background: #ef4444;
  color: white;
}

.btn-delete:hover {
  background: #dc2626;
  transform: translateY(-1px);
}

.no-data {
  text-align: center;
  padding: 4rem 2rem;
  color: #64748b;
}

.no-data-icon {
  font-size: 4rem;
  color: var(--accent-blue);
  margin-bottom: 1rem;
}

.no-data-text {
  font-size: 1.2rem;
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.no-data-subtitle {
  font-size: 1rem;
  opacity: 0.8;
}

@media (max-width: 768px) {
  .main-container {
    margin: 1rem;
    border-radius: 12px;
  }

  .header-section {
    padding: 1.5rem;
  }

  .page-title {
    font-size: 2rem;
  }

  .action-bar {
    flex-direction: column;
    gap: 1rem;
    align-items: stretch;
  }

  .table-container {
    padding: 1rem;
    overflow-x: auto;
  }

  .search-container {
    max-width: 100%;
  }
}
</style>
