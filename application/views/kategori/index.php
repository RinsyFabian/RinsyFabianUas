<style>
  /* Font Times New Roman untuk seluruh area konten */
  body, .content-wrapper, .content-header, .breadcrumb, .card, table, form, label, button, a {
    font-family: "Times New Roman", Times, serif;
    color: inherit; /* warna teks default */
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
    color: #b30059; /* link warna pink gelap */
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

  /* Tombol */
  .btn-primary {
    background-color: #ff4d94;
    border-color: #e60073;
    color: white;
  }
  .btn-primary:hover {
    background-color: #e60073;
    border-color: #b30059;
  }
  .btn-info {
    background-color: #ff99bb;
    border-color: #ff80aa;
    color: #660033;
  }
  .btn-info:hover {
    background-color: #ff80aa;
    border-color: #e60073;
    color: white;
  }
  .btn-danger {
    background-color: #ff3366;
    border-color: #cc2952;
    color: white;
  }
  .btn-danger:hover {
    background-color: #cc2952;
    border-color: #991f3c;
  }

  /* Table */
  table.table {
    background-color: #fff0f6; /* sangat muda pink */
  }
  table.table th, table.table td {
    border: 1px solid #ff80aa;
  }

</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>Daftar status</h1>
        </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List status</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          
          <?php if (!empty($kategori_pasien)): ?>
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($kategori_pasien as $b): ?>
                  <tr>
                    <td><?= $b['kategori']; ?></td>
                    <td>
                      <a href="<?= base_url('kategori/edit/'. $b['idkategori']); ?>" class="btn btn-sm btn-info">Edit</a>
                      <a href="<?= base_url('kategori/hapus/'. $b['idkategori']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin hapus?')">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p> Tidak ada kategori yang tersedia</p>
          <?php endif; ?>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
