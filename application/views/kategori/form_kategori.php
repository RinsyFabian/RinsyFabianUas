<style>
  /* Font Times New Roman untuk seluruh area */
  body, .content-wrapper, .content-header, .breadcrumb, .card, form, label, select, button, .alert {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* biarkan warna teks default */
  }

  /* Background pink bervariasi */
  .content-wrapper {
    background-color: #ffe6f0; /* pink muda */
  }
  .content-header {
    background-color: #ffb6c1; /* lightpink */
    padding: 10px 0;
  }
  .breadcrumb {
    background-color: #ffc0cb; /* pink */
  }
  .breadcrumb-item a {
    color: #b30059; /* dark pink untuk link */
  }
  .breadcrumb-item.active {
    color: #800040; /* lebih gelap */
  }
  .card {
    background-color: #ffccd9; /* pink sangat muda */
    border: 1px solid #ff80aa; /* pink medium */
  }
  .card-header {
    background-color: #ff80aa; /* pink medium */
    border-bottom: 1px solid #ff4d94; /* pink lebih gelap */
    color: inherit;
  }
  .card-tools .btn-tool {
    color: #660033; /* pink gelap */
  }

  /* Form Control */
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

  /* Alert */
  .alert-success {
    background-color: #ffccdd; /* pink lembut */
    color: #660033;
  }
  .alert-danger {
    background-color: #ff99bb; /* pink agak gelap */
    color: #660033;
  }

  /* Tombol Primary pink */
  .btn-primary {
    background-color: #ff4d94;
    border-color: #e60073;
    color: white;
    padding: 6px 12px;
    border-radius: 4px;
  }
  .btn-primary:hover {
    background-color: #e60073;
    border-color: #b30059;
  }
</style>

<div class="content-wrapper">

  <!-- Content Header -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active">Status</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Form Tambah Status</h3>
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
        <?php if ($this->session->flashdata('success')): ?>
          <div class="alert alert-success"><?= $this->session->flashdata('success'); ?></div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('error')): ?>
          <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
        <?php endif; ?>

        <!-- Form -->
        <form action="<?= base_url('kategori/insert'); ?>" method="POST">
          <div class="form-group">
            <label for="kategori">Status</label>
            <select class="form-control" name="kategori" id="kategori" required>
              <option value="">-- Pilih Status --</option>
              <option value="Disetujui">Disetujui</option>
              <option value="Ditolak">Ditolak</option>
              <option value="Dalam Proses">Dalam Proses</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
      </div>

      <div class="card-footer">
      </div>
    </div>
  </section>
</div>
