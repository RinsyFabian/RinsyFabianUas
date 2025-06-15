<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RS Marga Sakti | Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/adminlte/dist/css/adminlte.min.css'); ?>">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Times New Roman', Times, serif;
      background-image: url('https://i.pinimg.com/736x/f3/c8/55/f3c85561c46577b81e2546de74a6692b.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 20px;
      padding: 20px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    }

    .login-logo a {
      background-color: pink;
      padding: 10px 15px;
      border-radius: 10px;
      font-weight: bold;
      color: black;
    }

    .btn-pink {
      background-color: pink;
      color: black;
      font-weight: bold;
    }

    .btn-pink:hover {
      background-color: #ff94b6;
      color: white;
    }

    .text-pink {
      color: #d63384;
    }

    .text-pink:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>

<div class="login-box">
  <div class="login-logo">
    <h3><a href="#"><b>RS MARGA SAKTI</b></a></h3>
  </div>

  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Selamat Datang, silakan masuk</p>

      <?php if ($this->session->flashdata('error')): ?>
        <p style="color:red;"><?= $this->session->flashdata('error'); ?></p>
      <?php endif; ?>

      <form action="<?= site_url('auth/process_login') ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-8">
            <div class="icheck-pink">
              <input type="checkbox" id="remember">
              <label for="remember">Remember Me</label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-pink btn-block">Sign In</button>
          </div>
        </div>
      </form>

      <p class="mb-0 text-center">
        <a href="<?= base_url('auth/register'); ?>" class="text-pink">Belum punya akun? Daftar di sini</a>
      </p>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="<?= base_url('assets/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js'); ?>"></script>

</body>
</html>
