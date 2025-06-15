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
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Form Dokter</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Dokter</h3>
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
                <form action="<?= base_url('dokter/update/' . $dokter_pasien['iddokter']); ?>" method="POST">
                    <div class="form-group">
                        <label for="dokter">Dokter Spesialis</label>
                        <input type="text" class="form-control" name="dokter" id="dokter"
                            value="<?= $dokter_pasien['dokter']; ?>" placeholder="Masukkan nama spesialis dokter" required>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('dokter'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>

            <div class="card-footer">
                <!-- Optional footer content -->
            </div>
        </div>
    </section>
</div>
