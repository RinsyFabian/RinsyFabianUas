<style>
  /* Ubah font seluruh konten menjadi Times New Roman */
  body, .content-wrapper, .content-header, .card, form, label, input, select, textarea, button {
    font-family: "Times New Roman", Times, serif;
  }

  /* Warna pink yang sudah ada (tidak berubah) */
  .content-wrapper {
    background-color: #ffe6f0; /* pink muda */
  }
  .content-header {
    background-color: #ffb6c1;
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #ffc0cb;
  }
  .breadcrumb-item a {
    color: #b30059;
  }
  .breadcrumb-item.active {
    color: #800040;
  }
  .card {
    background-color: #ffccd9;
    border: 1px solid #ff80aa;
  }
  .card-header {
    background-color: #ff80aa;
    border-bottom: 1px solid #ff4d94;
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #660033;
  }
  .form-control {
    border: 1px solid #ff80aa;
    background-color: #ffe6f0;
    color: inherit;
  }
  .form-control:focus {
    border-color: #ff4d94;
    box-shadow: 0 0 5px #ff4d94;
    background-color: #fff0f6;
    color: inherit;
  }
  .btn-primary {
    background-color: #ff4d94;
    border-color: #e60073;
    color: white;
  }
  .btn-primary:hover {
    background-color: #e60073;
    border-color: #b30059;
  }
  .btn-secondary {
    background-color: #ff99bb;
    border-color: #ff80aa;
    color: #660033;
  }
  .btn-secondary:hover {
    background-color: #ff80aa;
    border-color: #e60073;
    color: white;
  }
</style>


<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Pasien</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <form action="<?= base_url('pasien/update/' . $pasien['idpasien']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pasien['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <input type="text" class="form-control" name="keluhan" id="keluhan" value="<?= $pasien['keluhan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" name="alamat" id="alamat" required><?= $pasien['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jam_kunjungan">Jam Kunjungan</label>
                        <select class="form-control" name="jam_kunjungan" id="jam_kunjungan" required>
                            <option value="">-- Pilih Jam Kunjungan --</option>
                            <?php
                            $start = strtotime('08:00');
                            $end = strtotime('16:00');
                            $interval = 60 * 60; // 1 jam

                            for ($time = $start; $time <= $end; $time += $interval):
                                $formatted_time = date('H:i', $time);
                                $selected = ($pasien['jam_kunjungan'] == $formatted_time) ? 'selected' : '';
                            ?>
                                <option value="<?= $formatted_time ?>" <?= $selected ?>><?= $formatted_time ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tgl_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tgl_kunjungan" id="tgl_kunjungan" value="<?= $pasien['tgl_kunjungan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Opsional Footer -->
            </div>
        </div>
    </section>
</div>
