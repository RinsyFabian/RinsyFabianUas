BLANK TEMPLATE


<div class="content-wrapper">
  <style>
    .welcome-banner {
      background-image: url('https://i.pinimg.com/736x/d4/7b/e7/d47be74aed3bceb8a9b0fae00a45a093.jpg');
      height: 100vh;
      width: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 192, 203, 0.4); /* pink transparan */
      z-index: 1;
      backdrop-filter: blur(3px);
    }

    .text-box {
      position: relative;
      z-index: 2;
      background-color: rgba(255, 255, 255, 0.85);
      padding: 30px 50px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    .text-box h1 {
      margin: 0;
      font-size: 36px;
      color: #d63384;
    }

    .text-box p {
      font-size: 18px;
      color: #555;
      margin-top: 10px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

  <?php
  echo '
  <div class="welcome-banner">
    <div class="overlay"></div>
    <div class="text-box">
      <h1>Selamat Datang di RS. Marga Sakti</h1>
      <p>Pelayanan Ramah, Cepat, dan Profesional</p>
    </div>
  </div>';?>
</div>