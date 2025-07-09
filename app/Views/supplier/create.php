<?= $this->include('layout/header') ?>

<div class="container mt-4">
  <h2>Tambah Supplier</h2>
  <form action="/supplier/store" method="post">
    <div class="mb-2">
      <input name="nama" class="form-control" placeholder="Nama" required>
    </div>
    <div class="mb-2">
      <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
    </div>
    <div class="mb-2">
      <input name="telepon" class="form-control" placeholder="Telepon" required>
    </div>
    <div class="mb-2">
      <input name="email" class="form-control" placeholder="Email" type="email" required>
    </div>
    <div class="mb-2">
      <input name="kontak_pic" class="form-control" placeholder="Penanggung Jawab" required>
    </div>
    <div class="mb-2">
      <label>Jenis Barang</label>
      <select name="jenis_barang" class="form-control" required>
        <option value="Elektronik">Elektronik</option>
        <option value="Alat Tulis">Alat Tulis</option>
        <option value="Pakaian">Pakaian</option>
        <option value="Makanan">Makanan</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
    <div class="mb-2">
      <label>Nama Barang</label>
      <input name="nama_barang" class="form-control" placeholder="Contoh: Printer, Kertas A4, dll" required>
    </div>
    <button class="btn btn-success" type="submit">Simpan</button>
    <a href="/supplier" class="btn btn-secondary">Kembali</a>
  </form>
</div>

<style>
:root {
  --primary-blue: #1e40af;
  --secondary-blue: #3b82f6;
  --gradient-bg: linear-gradient(135deg, #1e40af, #3b82f6);
  --input-bg: #f8fafc;
  --input-border: #cbd5e1;
  --input-focus: #3b82f6;
}

body {
  background: linear-gradient(135deg, #f8fafc, #e2e8f0);
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  padding-bottom: 50px;
}

.container {
  background: white;
  padding: 2rem;
  border-radius: 12px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.06);
  max-width: 700px;
  margin: 2rem auto;
}

h2 {
  font-size: 1.75rem;
  font-weight: 700;
  color: var(--primary-blue);
  margin-bottom: 1.5rem;
}

form .form-control {
  background-color: var(--input-bg);
  border: 1px solid var(--input-border);
  border-radius: 8px;
  padding: 0.75rem 1rem;
  font-size: 1rem;
  transition: border-color 0.3s, box-shadow 0.3s;
}

form .form-control:focus {
  border-color: var(--input-focus);
  box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.25);
  background-color: #ffffff;
}

form textarea.form-control {
  resize: vertical;
  min-height: 100px;
}

form label {
  font-weight: 600;
  color: #475569;
  margin-bottom: 0.5rem;
  display: block;
}

.mb-2 {
  margin-bottom: 1rem !important;
}

button.btn-success {
  background: var(--gradient-bg);
  border: none;
  padding: 0.75rem 1.5rem;
  font-weight: 600;
  font-size: 0.95rem;
  border-radius: 8px;
  color: white;
  text-transform: uppercase;
  transition: all 0.3s ease;
}

button.btn-success:hover {
  background: #1e3a8a;
  transform: translateY(-1px);
  box-shadow: 0 5px 10px rgba(30, 64, 175, 0.2);
}

a.btn-secondary {
  background: #94a3b8;
  color: white;
  margin-left: 0.5rem;
  padding: 0.75rem 1.5rem;
  font-weight: 600;
  font-size: 0.95rem;
  border-radius: 8px;
  text-transform: uppercase;
  transition: background 0.3s ease;
}

a.btn-secondary:hover {
  background: #64748b;
  text-decoration: none;
}
</style>
