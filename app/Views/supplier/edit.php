<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Supplier</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            position: relative;
            overflow: hidden;
        }
        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #2196F3, #1976D2, #0D47A1);
        }
        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .form-header h1 {
            color: #1976D2;
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 8px;
        }
        .form-header p {
            color: #666;
            font-size: 14px;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #1976D2;
            font-weight: 500;
            font-size: 14px;
        }
        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid #e1e8ed;
            border-radius: 10px;
            font-size: 16px;
            transition: all 0.3s ease;
            background: #fafbfc;
        }
        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: #2196F3;
            background: #ffffff;
            box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.1);
        }
        .form-group select {
            cursor: pointer;
        }
        .form-group select option {
            padding: 8px;
            background: #ffffff;
            color: #333;
        }
        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }
        .form-group.half-width {
            display: inline-block;
            width: 48%;
        }
        .form-group.half-width:first-child {
            margin-right: 4%;
        }
        .form-section {
            margin-bottom: 25px;
        }
        .section-title {
            color: #1976D2;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 8px;
            border-bottom: 2px solid #e3f2fd;
        }
        .button-group {
            display: flex;
            gap: 15px;
            justify-content: center;
            margin-top: 30px;
        }
        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            min-width: 120px;
        }
        .btn-primary {
            background: linear-gradient(135deg, #2196F3, #1976D2);
            color: white;
            box-shadow: 0 4px 15px rgba(33, 150, 243, 0.3);
        }
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(33, 150, 243, 0.4);
        }
        .btn-secondary {
            background: #f5f5f5;
            color: #666;
            border: 2px solid #e0e0e0;
        }
        .btn-secondary:hover {
            background: #e0e0e0;
            transform: translateY(-1px);
        }
        .btn-back {
            background: linear-gradient(135deg, #607D8B, #455A64);
            color: white;
            border: none;
            box-shadow: 0 4px 15px rgba(96, 125, 139, 0.3);
        }
        .btn-back:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(96, 125, 139, 0.4);
        }
        .icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
            vertical-align: middle;
        }
        @media (max-width: 600px) {
            .container {
                padding: 30px 20px;
            }
            .form-group.half-width {
                width: 100%;
                margin-right: 0;
            }
            .button-group {
                flex-direction: column;
                gap: 10px;
            }
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-header">
            <h1>✏️ Edit Supplier</h1>
            <p>Perbarui informasi supplier</p>
        </div>
        <form id="supplierEditForm" action="/supplier/update/<?= $supplier['id_supplier'] ?>" method="post">
            <div class="form-section">
                <h3 class="section-title">Informasi Dasar</h3>
                <div class="form-group">
                    <label for="nama">Nama Supplier</label>
                    <input type="text" id="nama" name="nama" value="<?= esc($supplier['nama']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea id="alamat" name="alamat" required><?= esc($supplier['alamat']) ?></textarea>
                </div>
                <div class="form-group half-width">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" name="telepon" value="<?= esc($supplier['telepon']) ?>" required>
                </div>
                <div class="form-group half-width">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?= esc($supplier['email']) ?>" required>
                </div>
            </div>
            <div class="form-section">
                <h3 class="section-title">Informasi Produk</h3>
                <div class="form-group">
                    <label for="kontak_pic">Penanggung Jawab</label>
                    <input type="text" id="kontak_pic" name="kontak_pic" value="<?= esc($supplier['kontak_pic']) ?>" required>
                </div>
                <div class="form-group">
                    <label for="jenis_barang">Jenis Barang</label>
                    <select id="jenis_barang" name="jenis_barang" required>
                        <option value="Elektronik" <?= $supplier['jenis_barang'] == 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
                        <option value="Alat Tulis" <?= $supplier['jenis_barang'] == 'Alat Tulis' ? 'selected' : '' ?>>Alat Tulis</option>
                        <option value="Pakaian" <?= $supplier['jenis_barang'] == 'Pakaian' ? 'selected' : '' ?>>Pakaian</option>
                        <option value="Makanan" <?= $supplier['jenis_barang'] == 'Makanan' ? 'selected' : '' ?>>Makanan</option>
                        <option value="Lainnya" <?= $supplier['jenis_barang'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" id="nama_barang" name="nama_barang" value="<?= esc($supplier['nama_barang']) ?>" required>
                </div>
            </div>
            <div class="button-group">
                <button type="button" class="btn btn-back" onclick="goBack()">
                    ← Kembali
                </button>
                <button type="submit" class="btn btn-primary">
                    💾 Update
                </button>
                <button type="button" class="btn btn-secondary" onclick="resetForm()">
                    🔄 Reset
                </button>
            </div>
        </form>
    </div>
    <script>
        function goBack() {
            if (confirm('Apakah Anda yakin ingin kembali? Perubahan yang belum disimpan akan hilang.')) {
                window.location.href = '/supplier';
            }
        }
        function resetForm() {
            if (confirm('Apakah Anda yakin ingin mengatur ulang form?')) {
                document.getElementById('supplierEditForm').reset();
            }
        }
        document.querySelectorAll('input, textarea, select').forEach(element => {
            element.addEventListener('focus', function() {
                this.parentElement.style.transform = 'translateY(-2px)';
            });
            element.addEventListener('blur', function() {
                this.parentElement.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>