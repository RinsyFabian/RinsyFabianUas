<style>
  /* Gunakan Times New Roman untuk semua teks */
  .content-wrapper, .content-wrapper * {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* teks tetap warna default */
  }

  /* Background dan border warna pink */
  .content-wrapper {
    background-color: #ffe6f0; /* pink lembut */
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
  }
  .card-tools .btn-tool {
    color: #660033;
  }
  .form-control {
    border: 1px solid #ff80aa;
    background-color: #ffe6f0;
    color: initial;
  }
  .form-control:focus {
    border-color: #ff4d94;
    box-shadow: 0 0 5px #ff4d94;
    background-color: #fff0f6;
    color: initial;
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
</style>


<div class="content-wrapper">
    <!-- Content Header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Laporan Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Laporan Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Filter Laporan Pasien</h3>
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
            <form method="post" action="<?= base_url('pasien/cetak_laporan') ?>">
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="tanggal_dari">Dari Tanggal</label>
            <input type="date" name="tanggal_dari" id="tanggal_dari" class="form-control" required>
        </div>
        <div class="form-group col-md-4">
            <label for="tanggal_sampai">Sampai Tanggal</label>
            <input type="date" name="tanggal_sampai" id="tanggal_sampai" class="form-control" required>
        </div>
       
    </div>
    <button type="submit" class="btn btn-primary mt-2">Tampilkan Laporan</button>
</form>


            </div>

            <div class="card-footer">
                <!-- Optional footer content -->
            </div>
        </div>
    </section>
</div>
