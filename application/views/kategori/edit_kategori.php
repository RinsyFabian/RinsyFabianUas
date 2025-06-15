<style>
  /* Font Times New Roman untuk seluruh konten di content-wrapper */
  body, .content-wrapper, .content-header, .breadcrumb, .card, form, label, input, button, a {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* teks tetap warna default */
  }

  /* Background dan elemen pink */
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
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Form Status</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol>
        </div>
      </div>
    </div>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Update Status</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>

      <div class="card-body">
        <form action="<?= base_url('kategori/update/' . $kategori_pasien['idkategori']); ?>" method="POST">
          <div class="form-group">
            <label for="kategori">Status</label>
            <input type="text" class="form-control" name="kategori" id="kategori"
              value="<?= $kategori_pasien['kategori']; ?>" placeholder="Status" required>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
          </div>
        </form>
      </div>

      <div class="card-footer">
        <!-- Optional Footer -->
      </div>
    </div>
  </section>
</div>
